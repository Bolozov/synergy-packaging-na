<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\ClientCarouselController;
use App\Http\Controllers\ExpertiseController;
use App\Http\Controllers\ExpertiseImagesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\TestimonialController;use Illuminate\Support\Facades\App;use Illuminate\Support\Facades\Auth;use Illuminate\Support\Facades\Route;

/**

 * Admin Panel Routes

 */

Auth::routes(['register' => false]);

Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {

    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    Route::delete('deleteImage/{id}', [ReferenceController::class, 'deleteImage'])->name('deleteImage');

    Route::resource('references', ReferenceController::class);

    Route::resource('settings', SettingController::class);

    Route::resource('expertises', ExpertiseController::class);

    Route::resource('testimonials', TestimonialController::class);

    Route::resource('expertiseImages', ExpertiseImagesController::class);

    Route::resource('projects', ProjectController::class);

    Route::resource('clientCarousels', ClientCarouselController::class);

    Route::get('exportSubscribers', [SubscriberController::class, 'exportSubscribers'])->name('exportSubscribers');

    Route::resource('subscribers', SubscriberController::class);

    Route::resource('candidates', CandidateController::class);

});

/**

 * Website Routes

 */

/**

 * TODO : Add Middleware Array :->middleware(['visitor' , 'page-cache'])

 */

Route::name('website.')->middleware('visitor')->group(function () {

    Route::get('/', [PageController::class, 'home'])->name('home');

    Route::get('/nos-solutions', [PageController::class, 'nosMetiers'])->name('nos-metiers');

    Route::get('/nos-services', [PageController::class, 'nosMissions'])->name('nos-missions');

    Route::get('/nos-references', [PageController::class, 'nosReferences'])->name('nos-references');

    Route::get('/nos-projets', [PageController::class, 'nosProjets'])->name('nos-projets');

    Route::get('/contact', [PageController::class, 'contact'])->name('contact');

    Route::post('/submit-contact', [PageController::class, 'submitContact'])->name('submit-contact');

    Route::post('/submit-quote', [PageController::class, 'submitQuote'])->name('submit-quote');

    Route::post('/subscribe', [PageController::class, 'subscribeToNewsLetter'])->name('subscribeToNewsLetter');

    Route::view('/qui-sommes-nous', 'website.about')->name('about');

    Route::view('/carrieres', 'website.careers')->name('careers');

    Route::post('/apply', [PageController::class, 'apply'])->name('apply');

    /**Language Switcher */

    Route::get('language/{locale}', function ($locale) {

        App::setLocale($locale);

        session()->put('locale', $locale);

        return redirect()->back();

    })->name('switchLanguage');

});

// Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');

// Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');

// Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');

// Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');

// Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');

// Route::post(

//     'generator_builder/generate-from-file',

//     '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile'

// )->name('io_generator_builder_generate_from_file');
