<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateExpertiseRequest;
use App\Http\Requests\UpdateExpertiseRequest;
use App\Models\Expertise;
use App\Models\ExpertiseImages;
use App\Models\ExpertiseItem;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Response;

class ExpertiseController extends AppBaseController
{
    /**
     * Display a listing of the Expertise.
     *
     *
     * @return Response
     */
    public function index()
    {
        /** @var Expertise $expertises */
        $expertises = Expertise::with('images')->paginate();
        return view('admin.expertises.index')
            ->with('expertises', $expertises);
    }

    /**
     * Show the form for creating a new Expertise.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.expertises.create');
    }

    /**
     * Store a newly created Expertise in storage.
     *
     * @param CreateExpertiseRequest $request
     *
     * @return Response
     */
    public function store(CreateExpertiseRequest $request)
    {
        $input = $request->all();
        $combinedLang = array_combine($input['expertise']['fr'], $input['expertise']['en']);
        //check if the logo is not empty
        if (!empty($input['logo']) && isset($input['logo'])) {
            $input['logo'] = ImageTrait::uploadImage($input['logo']);

        }
        if (!empty($input['brochure']) && isset($input['brochure'])) {
            $input['brochure'] = ImageTrait::uploadImage($input['brochure']);

        }

        /** @var Expertise $expertise */
        $expertise = Expertise::create($input);
        if (isset($input['images']) && !empty($input['images']) && !is_null($input['images'])) {
            foreach ($input['images'] as $expertiseImage) {
                $imagePath = ImageTrait::uploadImage($expertiseImage);
                ExpertiseImages::create([
                    'image' => $imagePath,
                    'expertise_id' => $expertise->id,
                ]);
            }
        }

        foreach ($combinedLang as $fr => $en) {
            ExpertiseItem::create([
                'title_fr' => $fr,
                'title_en' => $en,
                'expertise_id' => $expertise->id,
            ]);
        }

        Flash::success(__('messages.saved', ['model' => __('models/expertises.singular')]));

        return redirect(route('admin.expertises.index'));
    }

    /**
     * Display the specified Expertise.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Expertise $expertise */
        $expertise = Expertise::find($id);
        if (empty($expertise)) {
            Flash::error(__('models/expertises.singular') . ' ' . __('messages.not_found'));

            return redirect(route('admin.expertises.index'));
        }

        return view('admin.expertises.show')->with('expertise', $expertise);
    }

    /**
     * Show the form for editing the specified Expertise.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Expertise $expertise */
        $expertise = Expertise::find($id);

        if (empty($expertise)) {
            Flash::error(__('messages.not_found', ['model' => __('models/expertises.singular')]));

            return redirect(route('admin.expertises.index'));
        }

        return view('admin.expertises.edit')->with('expertise', $expertise);
    }

    /**
     * Update the specified Expertise in storage.
     *
     * @param int $id
     * @param UpdateExpertiseRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateExpertiseRequest $request)
    {
        /** @var Expertise $expertise */
        $expertise = Expertise::find($id);
        $input = $request->all();
        if (empty($expertise)) {
            Flash::error(__('messages.not_found', ['model' => __('models/expertises.singular')]));

            return redirect(route('admin.expertises.index'));
        }
        if (!empty($input['logo']) && isset($input['logo'])) {
            $input['logo'] = ImageTrait::uploadImage($input['logo']);

        }
        if (!empty($input['brochure']) && isset($input['brochure'])) {
            $input['brochure'] = ImageTrait::uploadImage($input['brochure']);

        }

        if (isset($input['images']) && !empty($input['images']) && !is_null($input['images'])) {
            foreach ($input['images'] as $expertiseImage) {
                $imagePath = ImageTrait::uploadImage($expertiseImage);
                ExpertiseImages::create([
                    'image' => $imagePath,
                    'expertise_id' => $expertise->id,
                ]);
            }
        }

        $expertise->fill($input);
        $expertise->save();
        $combinedLang = array_combine($input['expertise']['fr'], $input['expertise']['en']);

        $expertise->expertises()->delete();
        foreach ($combinedLang as $fr => $en) {
            if (!empty($fr) && !is_null($fr) && !empty($en) && !is_null($en)) {
                ExpertiseItem::create([
                    'title_fr' => $fr,
                    'title_en' => $en,
                    'expertise_id' => $expertise->id,
                ]);
            }
        }

        Flash::success(__('messages.updated', ['model' => __('models/expertises.singular')]));

        return redirect(route('admin.expertises.index'));
    }

    /**
     * Remove the specified Expertise from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Expertise $expertise */
        $expertise = Expertise::find($id);

        if (empty($expertise)) {
            Flash::error(__('messages.not_found', ['model' => __('models/expertises.singular')]));

            return redirect(route('admin.expertises.index'));
        }

        $expertise->delete();

        Flash::success(__('messages.deleted', ['model' => __('models/expertises.singular')]));

        return redirect(route('admin.expertises.index'));
    }
}
