<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;


class MainController extends Controller 
{

    public function dashboard()
    {
        $quizzes = Quiz::where('status','published')->withCount('questions')->paginate(5);
        return view('dashboard',compact('quizzes'));
    }   

    public function quiz_detail($slug)
    {
        $quiz = Quiz::whereSlug($slug)->withCount('questions')->first() ?? abort(404, 'Quize ait soru bulunamadı');
        return view('quiz_detail', compact('quiz'));
    }


}

