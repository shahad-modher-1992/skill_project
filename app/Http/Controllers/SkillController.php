<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function skillindex($id) {
        $skill = Skill::findOrFail($id);
        $exams = $skill->exams;
        return view('web.skill', compact('skill', 'exams'));
    }
}
