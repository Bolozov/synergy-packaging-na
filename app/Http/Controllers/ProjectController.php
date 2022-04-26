<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Project;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Traits\ImageTrait;

class ProjectController extends AppBaseController
{
    /**
     * Display a listing of the Project.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Project $projects */
        $projects = Project::paginate(10);

        return view('admin.projects.index')
            ->with('projects', $projects);
    }

    /**
     * Show the form for creating a new Project.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created Project in storage.
     *
     * @param CreateProjectRequest $request
     *
     * @return Response
     */
    public function store(CreateProjectRequest $request)
    {
        $input = $request->all();
         $input['image'] = ImageTrait::uploadImage($input['image']);

        /** @var Project $project */
        $project = Project::create($input);

        Flash::success(__('messages.saved', ['model' => __('models/projects.singular')]));

        return redirect(route('admin.projects.index'));
    }

    /**
     * Display the specified Project.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Project $project */
        $project = Project::find($id);

        if (empty($project)) {
            Flash::error(__('models/projects.singular').' '.__('messages.not_found'));

            return redirect(route('admin.projects.index'));
        }

        return view('admin.projects.show')->with('project', $project);
    }

    /**
     * Show the form for editing the specified Project.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Project $project */
        $project = Project::find($id);

        if (empty($project)) {
            Flash::error(__('messages.not_found', ['model' => __('models/projects.singular')]));

            return redirect(route('admin.projects.index'));
        }

        return view('admin.projects.edit')->with('project', $project);
    }

    /**
     * Update the specified Project in storage.
     *
     * @param int $id
     * @param UpdateProjectRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProjectRequest $request)
    {
        /** @var Project $project */
        $project = Project::find($id);
        $input = $request->all();
        $input['image'] = ImageTrait::uploadImage($input['image']);

        if (empty($project)) {
            Flash::error(__('messages.not_found', ['model' => __('models/projects.singular')]));

            return redirect(route('admin.projects.index'));
        }

        $project->fill($request->all());
        $project->save();

        Flash::success(__('messages.updated', ['model' => __('models/projects.singular')]));

        return redirect(route('admin.projects.index'));
    }

    /**
     * Remove the specified Project from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Project $project */
        $project = Project::find($id);

        if (empty($project)) {
            Flash::error(__('messages.not_found', ['model' => __('models/projects.singular')]));

            return redirect(route('admin.projects.index'));
        }

        $project->delete();

        Flash::success(__('messages.deleted', ['model' => __('models/projects.singular')]));

        return redirect(route('admin.projects.index'));
    }
}
