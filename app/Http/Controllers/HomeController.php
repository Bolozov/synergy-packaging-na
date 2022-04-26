<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Expertise;
use App\Models\Reference;
use App\Models\Project;
use App\Models\Subscriber;
use App\Models\Visitor;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $referencesCount = Reference::count();
        $expertisesCount = Expertise::count();
        $projectsCount = Project::count();
        $visitorsCount = Visitor::select('date', DB::raw('count(*) as total'))
            ->where('date', '>', today()->subDays(7))
            ->count();
        $candidatesCount = Candidate::count();
        $subscribersCount = Subscriber::count();
        return view('admin.dashboard.home', compact('referencesCount', 'expertisesCount', 'visitorsCount' , 'projectsCount' , 'candidatesCount' , 'subscribersCount'));
    }
}
