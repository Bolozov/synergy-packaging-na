<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateExpertiseImagesRequest;
use App\Http\Requests\UpdateExpertiseImagesRequest;
use App\Models\ExpertiseImages;
use Flash;
use Illuminate\Http\Request;
use Response;

class ExpertiseImagesController extends AppBaseController
{
    /**
     * Display a listing of the ExpertiseImages.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var ExpertiseImages $expertiseImages */
        $expertiseImages = ExpertiseImages::paginate(10);

        return view('admin.expertise_images.index')
            ->with('expertiseImages', $expertiseImages);
    }

    /**
     * Show the form for creating a new ExpertiseImages.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.expertise_images.create');
    }

    /**
     * Store a newly created ExpertiseImages in storage.
     *
     * @param CreateExpertiseImagesRequest $request
     *
     * @return Response
     */
    public function store(CreateExpertiseImagesRequest $request)
    {
        $input = $request->all();

        /** @var ExpertiseImages $expertiseImages */
        $expertiseImages = ExpertiseImages::create($input);

        Flash::success(__('messages.saved', ['model' => __('models/expertiseImages.singular')]));

        return redirect(route('admin.expertiseImages.index'));
    }

    /**
     * Display the specified ExpertiseImages.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var ExpertiseImages $expertiseImages */
        $expertiseImages = ExpertiseImages::find($id);

        if (empty($expertiseImages)) {
            Flash::error(__('models/expertiseImages.singular') . ' ' . __('messages.not_found'));

            return redirect(route('admin.expertiseImages.index'));
        }

        return view('admin.expertise_images.show')->with('expertiseImages', $expertiseImages);
    }

    /**
     * Show the form for editing the specified ExpertiseImages.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var ExpertiseImages $expertiseImages */
        $expertiseImages = ExpertiseImages::find($id);

        if (empty($expertiseImages)) {
            Flash::error(__('messages.not_found', ['model' => __('models/expertiseImages.singular')]));

            return redirect(route('admin.expertiseImages.index'));
        }

        return view('admin.expertise_images.edit')->with('expertiseImages', $expertiseImages);
    }

    /**
     * Update the specified ExpertiseImages in storage.
     *
     * @param int $id
     * @param UpdateExpertiseImagesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateExpertiseImagesRequest $request)
    {
        /** @var ExpertiseImages $expertiseImages */
        $expertiseImages = ExpertiseImages::find($id);

        if (empty($expertiseImages)) {
            Flash::error(__('messages.not_found', ['model' => __('models/expertiseImages.singular')]));

            return redirect(route('admin.expertiseImages.index'));
        }

        $expertiseImages->fill($request->all());
        $expertiseImages->save();

        Flash::success(__('messages.updated', ['model' => __('models/expertiseImages.singular')]));

        return redirect(route('admin.expertiseImages.index'));
    }

    /**
     * Remove the specified ExpertiseImages from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var ExpertiseImages $expertiseImages */
        $expertiseImages = ExpertiseImages::find($id);

        if (empty($expertiseImages)) {
            Flash::error("image non trouvée");

            return redirect()->back();
        }

        $expertiseImages->delete();

        Flash::success("Image a été supprimée de la galerie avec succès. ");

        return redirect()->back();
    }
}
