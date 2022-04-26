<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Mail\Quote;
use App\Models\Candidate;
use App\Models\ClientCarousel;
use App\Models\Expertise;
use App\Models\Project;
use App\Models\Reference;
use App\Models\Setting;
use App\Models\Subscriber;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function home()
    {
        $realisations = Reference::latest()->take(5)->get();
        $testimonials = Testimonial::latest()->take(5)->get();
        $partenaires = ClientCarousel::latest()->get();
        return view('website.home', compact('realisations', 'testimonials', 'partenaires'));
    }

    public function nosMetiers()
    {
        $metiers = Expertise::with(['expertises', 'images'])->get();
        return view('website.nos-metiers', compact('metiers'));
    }

    public function nosMissions()
    {
        return view('website.nos-missions');
    }

    public function contact()
    {
        $settings = Setting::first();
        return view('website.contact', compact('settings'));
    }

    public function nosReferences()
    {
        // $realisations = Reference::with('images')->latest()->get();
        $realisations = Reference::with('images')
            ->orderBy('creation_date', 'desc')
            ->get();

        // ->groupBy(function ($val) {
        //     return Carbon::parse($val->creation_date)->format('Y');
        // });

        // Select disting references domaine
        $realisations_domaines = Reference::distinct()->get(['domaine']);
        /**all projects */
        $projects = Project::all();

        return view('website.nos-references', compact('realisations', 'realisations_domaines', 'projects'));

    }
    public function nosProjets()
    {
        $realisations = Reference::with('images')
            ->orderBy('creation_date', 'desc')
            ->get();
        // ->groupBy(function ($val) {
        //     return Carbon::parse($val->creation_date)->format('Y');
        // });

        $realisations_domaines = Reference::distinct()->get(['domaine']);

        return view('website.nos-projets', compact('realisations', 'realisations_domaines', ));
    }

    public function submitContact(Request $request)
    {
        $request->validate([
            "nom" => "required|string",
            "prenom" => "required|string",
            "entreprise" => "nullable|string",
            "email" => "required|email",
            "tel" => "required|numeric",
            "sujet" => "required|string",
            "message" => "required|string",
        ]);
        $input = $request->all();
        $mail = Setting::get('contact_mail')->pluck('contact_mail');
        $mailTo = "dev.obygen@gmail.com";

        // dd($mail[0]);
        if (count(Mail::failures()) > 0) {
            return back()->with('error', __('contact.error'));
        }
        Mail::to($mail[0])->send(new Contact($input));
        return back()->with('success', __('contact.success'));

    }
    public function submitQuote(Request $request)
    {
        $request->validate([
            "firstname" => "required|string",
            "lastname" => "required|string",
            "email" => "required|email",
            "phone" => "required|numeric",
            "projecttype" => "nullable|string",
            "projectdetails" => "nullable|string",
        ]);
        $input = $request->all();
        $mail = Setting::get('contact_mail')->pluck('contact_mail');
        $mailTo = "dev.obygen@gmail.com";
        // dd($mail[0]);
        if (count(Mail::failures()) > 0) {
            return back()->with('error', __('quote.error'));
        }
        Mail::to($mail[0])->send(new Quote($input));
        return back()->with('success', __('quote.success'));

    }

    public function subscribeToNewsLetter(Request $request)
    {
        $request->validate([
            "email" => "required|email",
        ]);
        $input = $request->all();
        Subscriber::create($input);
        return redirect()->to(url()->previous() . '#newsletter')->with('subscribe-success', __('app.subscribe-success'));

    }

    public function apply(Request $request)
    {
        $request->validate([
            "first_name" => "required|string",
            "last_name" => "required|string",
            "position" => "required|string",
            "date_of_birth" => "required|date|before:today",
            "cover_letter" => "required|file|mimes:pdf,doc,docx|max:2048",
            "cv" => "required|file|mimes:pdf,doc,docx|max:2048",
        ]);
        // Upload Cv file
        $cv = $request->file('cv');
        $cv_name = $request->first_name . ' ' . $request->last_name . time() . '.' . $cv->getClientOriginalExtension();
        $cv->move(public_path('uploads/candidates/cv'), $cv_name);
        //Upload cover letter file
        $cover_letter = $request->file('cover_letter');
        $cover_letter_name = $request->first_name . ' ' . $request->last_name . time() . '.' . $cover_letter->getClientOriginalExtension();
        $cover_letter->move(public_path('uploads/candidates/cover_letter'), $cover_letter_name);
        // Create Candidate
        Candidate::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'position' => $request->position,
            'date_of_birth' => $request->date_of_birth,
            'cover_letter' => 'uploads/candidates/cv/'.$cover_letter_name,
            'cv' => 'uploads/candidates/cover_letter/' . $cv_name,
        ]);
        return back()->with('success', __('careers.success'));

    }
}
