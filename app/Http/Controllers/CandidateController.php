<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCandidateRequest;
use App\Http\Requests\UpdateCandidateRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Candidate;
use Illuminate\Http\Request;
use Flash;
use Response;

class CandidateController extends AppBaseController
{
    /**
     * Display a listing of the Candidate.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Candidate $candidates */
        $candidates = Candidate::paginate(10);

        return view('admin.candidates.index')
            ->with('candidates', $candidates);
    }

    /**
     * Show the form for creating a new Candidate.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.candidates.create');
    }

    /**
     * Store a newly created Candidate in storage.
     *
     * @param CreateCandidateRequest $request
     *
     * @return Response
     */
    public function store(CreateCandidateRequest $request)
    {
        $input = $request->all();

        /** @var Candidate $candidate */
        $candidate = Candidate::create($input);

        Flash::success(__('messages.saved', ['model' => __('models/candidates.singular')]));

        return redirect(route('admin.candidates.index'));
    }

    /**
     * Display the specified Candidate.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Candidate $candidate */
        $candidate = Candidate::find($id);

        if (empty($candidate)) {
            Flash::error(__('models/candidates.singular').' '.__('messages.not_found'));

            return redirect(route('admin.candidates.index'));
        }

        return view('admin.candidates.show')->with('candidate', $candidate);
    }

    /**
     * Show the form for editing the specified Candidate.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Candidate $candidate */
        $candidate = Candidate::find($id);

        if (empty($candidate)) {
            Flash::error(__('messages.not_found', ['model' => __('models/candidates.singular')]));

            return redirect(route('admin.candidates.index'));
        }

        return view('admin.candidates.edit')->with('candidate', $candidate);
    }

    /**
     * Update the specified Candidate in storage.
     *
     * @param int $id
     * @param UpdateCandidateRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCandidateRequest $request)
    {
        /** @var Candidate $candidate */
        $candidate = Candidate::find($id);

        if (empty($candidate)) {
            Flash::error(__('messages.not_found', ['model' => __('models/candidates.singular')]));

            return redirect(route('admin.candidates.index'));
        }

        $candidate->fill($request->all());
        $candidate->save();

        Flash::success(__('messages.updated', ['model' => __('models/candidates.singular')]));

        return redirect(route('admin.candidates.index'));
    }

    /**
     * Remove the specified Candidate from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Candidate $candidate */
        $candidate = Candidate::find($id);

        if (empty($candidate)) {
            Flash::error(__('messages.not_found', ['model' => __('models/candidates.singular')]));

            return redirect(route('admin.candidates.index'));
        }

        $candidate->delete();

        Flash::success(__('messages.deleted', ['model' => __('models/candidates.singular')]));

        return redirect(route('admin.candidates.index'));
    }
}
