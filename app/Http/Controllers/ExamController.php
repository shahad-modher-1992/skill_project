<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExamController extends Controller
{
    public function examindex($id) {
        $exam = Exam::findOrFail($id);
        return view("web.exam", compact('exam'));
    }

    public function questionindex($id) {
        $question = Question::findOrFail($id);
        $exam = Exam::findOrFail($id);
        $all = $exam->questions;
        return view('web.question', compact('question', 'all'));
    }

    public function start($id) {
        $user = Auth::user();
        $user->exams()->attach($id);

        return redirect(url("/exam/show/question/$id"));
    }
}
