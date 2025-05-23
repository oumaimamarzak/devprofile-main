<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Auth::user()->skills;
        return view('skills.index', compact('skills'));
    }

    public function create()
    {
        return view('skills.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100'
        ]);

        Auth::user()->skills()->create($request->all());

        return redirect()->route('skills.index')->with('success', 'Compétence ajoutée');
    }

    public function destroy(Skill $skill)
    {
        if ($skill->user_id !== Auth::id()) {
            abort(403, 'Unauthorized');
        }

        $skill->delete();
        return redirect()->route('skills.index')->with('success', 'Compétence supprimée');
    }
}
