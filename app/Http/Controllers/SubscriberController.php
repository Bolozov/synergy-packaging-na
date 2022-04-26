<?php

namespace App\Http\Controllers;

use App\Exports\SubscribersExport;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateSubscriberRequest;
use App\Http\Requests\UpdateSubscriberRequest;
use App\Models\Subscriber;
use Flash;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Response;

class SubscriberController extends AppBaseController
{
    /**
     * Display a listing of the Subscriber.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Subscriber $subscribers */
        $subscribers = Subscriber::paginate(10);

        return view('admin.subscribers.index')
            ->with('subscribers', $subscribers);
    }

    /**
     * Show the form for creating a new Subscriber.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.subscribers.create');
    }

    /**
     * Store a newly created Subscriber in storage.
     *
     * @param CreateSubscriberRequest $request
     *
     * @return Response
     */
    public function store(CreateSubscriberRequest $request)
    {
        $input = $request->all();

        /** @var Subscriber $subscriber */
        $subscriber = Subscriber::create($input);

        Flash::success(__('messages.saved', ['model' => __('models/subscribers.singular')]));

        return redirect(route('admin.subscribers.index'));
    }

    /**
     * Display the specified Subscriber.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Subscriber $subscriber */
        $subscriber = Subscriber::find($id);

        if (empty($subscriber)) {
            Flash::error(__('models/subscribers.singular') . ' ' . __('messages.not_found'));

            return redirect(route('admin.subscribers.index'));
        }

        return view('admin.subscribers.show')->with('subscriber', $subscriber);
    }

    /**
     * Show the form for editing the specified Subscriber.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Subscriber $subscriber */
        $subscriber = Subscriber::find($id);

        if (empty($subscriber)) {
            Flash::error(__('messages.not_found', ['model' => __('models/subscribers.singular')]));

            return redirect(route('admin.subscribers.index'));
        }

        return view('admin.subscribers.edit')->with('subscriber', $subscriber);
    }

    /**
     * Update the specified Subscriber in storage.
     *
     * @param int $id
     * @param UpdateSubscriberRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSubscriberRequest $request)
    {
        /** @var Subscriber $subscriber */
        $subscriber = Subscriber::find($id);

        if (empty($subscriber)) {
            Flash::error(__('messages.not_found', ['model' => __('models/subscribers.singular')]));

            return redirect(route('admin.subscribers.index'));
        }

        $subscriber->fill($request->all());
        $subscriber->save();

        Flash::success(__('messages.updated', ['model' => __('models/subscribers.singular')]));

        return redirect(route('admin.subscribers.index'));
    }

    /**
     * Remove the specified Subscriber from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Subscriber $subscriber */
        $subscriber = Subscriber::find($id);

        if (empty($subscriber)) {
            Flash::error(__('messages.not_found', ['model' => __('models/subscribers.singular')]));

            return redirect(route('admin.subscribers.index'));
        }

        $subscriber->delete();

        Flash::success(__('messages.deleted', ['model' => __('models/subscribers.singular')]));

        return redirect(route('admin.subscribers.index'));
    }

    public function exportSubscribers()
    {
        $date = date('Y-m-d');
        return Excel::download(new SubscribersExport, 'Liste-abonnés-'.$date.'.csv', \Maatwebsite\Excel\Excel::CSV, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="abonnés.csv"',
        ]);

    }
}
