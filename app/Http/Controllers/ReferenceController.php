<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateReferenceRequest;
use App\Http\Requests\UpdateReferenceRequest;
use App\Models\Reference;
use App\Models\ReferenceImages;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Response;

class ReferenceController extends AppBaseController
{
    /**
     * Display a listing of the Reference.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Reference $references */
        $references = Reference::paginate(5);

        return view('admin.references.index')
            ->with('references', $references);
    }

    /**
     * Show the form for creating a new Reference.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.references.create');
    }

    /**
     * Store a newly created Reference in storage.
     *
     * @param CreateReferenceRequest $request
     *
     * @return Response
     */
    public function store(CreateReferenceRequest $request)
    {
        $input = $request->all();
        $input['image'] = ImageTrait::uploadImage($input['image']);
        /** @var Reference $reference */
        $reference = Reference::create($input);
        if (isset($input['images']) && !empty($input['images']) && !is_null($input['images'])) {
            foreach ($input['images'] as $referenceImage) {
                $imagePath = ImageTrait::uploadImage($referenceImage);
                ReferenceImages::create([
                    'image' => $imagePath,
                    'reference_id' => $reference->id,
                ]);
            }
        }

        Flash::success(__('messages.saved', ['model' => __('models/references.singular')]));

        return redirect(route('admin.references.index'));
    }

    /**
     * Display the specified Reference.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Reference $reference */
        $reference = Reference::find($id);

        if (empty($reference)) {
            Flash::error(__('models/references.singular') . ' ' . __('messages.not_found'));

            return redirect(route('admin.references.index'));
        }

        return view('admin.references.show')->with('reference', $reference);
    }

    /**
     * Show the form for editing the specified Reference.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Reference $reference */
        $reference = Reference::with('images')->find($id);

        if (empty($reference)) {
            Flash::error(__('messages.not_found', ['model' => __('models/references.singular')]));

            return redirect(route('admin.references.index'));
        }

        return view('admin.references.edit')->with('reference', $reference);
    }

    /**
     * Update the specified Reference in storage.
     *
     * @param int $id
     * @param UpdateReferenceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateReferenceRequest $request)
    {
        /** @var Reference $reference */
        $reference = Reference::find($id);
        $input = $request->all();
        // dd($input);

        if (empty($reference)) {
            Flash::error(__('messages.not_found', ['model' => __('models/references.singular')]));

            return redirect(route('admin.references.index'));
        }
        if (isset($input['image']) && !empty($input['image']) && !is_null($input['image'])) {
            $input['image'] = ImageTrait::uploadImage($input['image']);
        }else {
            $input['image'] = $reference->image;
        }

        $reference->fill($input);
        $reference->save();
        if (isset($input['images']) && !empty($input['images']) && !is_null($input['images'])) {
            foreach ($input['images'] as $referenceImage) {
                $imagePath = ImageTrait::uploadImage($referenceImage);
                ReferenceImages::create([
                    'image' => $imagePath,
                    'reference_id' => $reference->id,
                ]);
            }
        }

        Flash::success(__('messages.updated', ['model' => __('models/references.singular')]));

        return redirect(route('admin.references.index'));
    }

    /**
     * Remove the specified Reference from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Reference $reference */
        $reference = Reference::find($id);

        if (empty($reference)) {
            Flash::error(__('messages.not_found', ['model' => __('models/references.singular')]));

            return redirect(route('admin.references.index'));
        }

        $reference->delete();

        Flash::success(__('messages.deleted', ['model' => __('models/references.singular')]));

        return redirect(route('admin.references.index'));
    }

    public function deleteImage($id)
    {

        $referenceImage = ReferenceImages::find($id);

        if (empty($referenceImage)) {
            Flash::error("Une erreur est survenue. Essayer plus tard.");
            return redirect()->back();
        }

        $referenceImage->delete();
        Flash::success("Image a été supprimée de la galerie avec succès. ");

        return redirect()->back();
    }
}
