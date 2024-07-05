<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Services;
use App\Models\Skills;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Work;









class HomeController extends Controller
{

    public function index()
    {
        $about = About::get();
        $services = Services::get();
        $skills = Skills::get();
        $education = Education::get();
        $experience = Experience::get();
        $work = Work::get();









        return view('home.index', compact('about', 'services', 'skills', 'education', 'experience', 'work'));
    }
}
