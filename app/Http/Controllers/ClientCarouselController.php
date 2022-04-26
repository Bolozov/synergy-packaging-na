<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateClientCarouselRequest;
use App\Http\Requests\UpdateClientCarouselRequest;
use App\Models\ClientCarousel;
use App\Traits\ImageTrait;
use Flash;
use Illuminate\Http\Request;
use Response;

class ClientCarouselController extends AppBaseController
{
    /**
     * Display a listing of the ClientCarousel.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var ClientCarousel $clientCarousels */
        $clientCarousels = ClientCarousel::paginate(20);

        return view('admin.client_carousels.index')
            ->with('clientCarousels', $clientCarousels);
    }

    /**
     * Show the form for creating a new ClientCarousel.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.client_carousels.create');
    }

    /**
     * Store a newly created ClientCarousel in storage.
     *
     * @param CreateClientCarouselRequest $request
     *
     * @return Response
     */
    public function store(CreateClientCarouselRequest $request)
    {
        $input = $request->all();
        $input['logo'] = ImageTrait::uploadImage($input['logo']);

        /** @var ClientCarousel $clientCarousel */
        $clientCarousel = ClientCarousel::create($input);

        Flash::success(__('messages.saved', ['model' => __('models/clientCarousels.singular')]));

        return redirect(route('admin.clientCarousels.index'));
    }

    /**
     * Display the specified ClientCarousel.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var ClientCarousel $clientCarousel */
        $clientCarousel = ClientCarousel::find($id);

        if (empty($clientCarousel)) {
            Flash::error(__('models/clientCarousels.singular') . ' ' . __('messages.not_found'));

            return redirect(route('admin.clientCarousels.index'));
        }

        return view('admin.client_carousels.show')->with('clientCarousel', $clientCarousel);
    }

    /**
     * Show the form for editing the specified ClientCarousel.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var ClientCarousel $clientCarousel */
        $clientCarousel = ClientCarousel::find($id);

        if (empty($clientCarousel)) {
            Flash::error(__('messages.not_found', ['model' => __('models/clientCarousels.singular')]));

            return redirect(route('admin.clientCarousels.index'));
        }

        return view('admin.client_carousels.edit')->with('clientCarousel', $clientCarousel);
    }

    /**
     * Update the specified ClientCarousel in storage.
     *
     * @param int $id
     * @param UpdateClientCarouselRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClientCarouselRequest $request)
    {
        $input = $request->all();
        /** @var ClientCarousel $clientCarousel */
        $clientCarousel = ClientCarousel::find($id);

        if (empty($clientCarousel)) {
            Flash::error(__('messages.not_found', ['model' => __('models/clientCarousels.singular')]));

            return redirect(route('admin.clientCarousels.index'));
        }
        if (!empty($input['logo'])) {
            $input['logo'] = ImageTrait::uploadImage($input['logo']);
        }

        $clientCarousel->fill($input);
        $clientCarousel->save();

        Flash::success(__('messages.updated', ['model' => __('models/clientCarousels.singular')]));

        return redirect(route('admin.clientCarousels.index'));
    }

    /**
     * Remove the specified ClientCarousel from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var ClientCarousel $clientCarousel */
        $clientCarousel = ClientCarousel::find($id);

        if (empty($clientCarousel)) {
            Flash::error(__('messages.not_found', ['model' => __('models/clientCarousels.singular')]));

            return redirect(route('admin.clientCarousels.index'));
        }

        $clientCarousel->delete();

        Flash::success(__('messages.deleted', ['model' => __('models/clientCarousels.singular')]));

        return redirect(route('admin.clientCarousels.index'));
    }
}
