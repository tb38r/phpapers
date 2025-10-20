<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paper;
use App\Models\Workspace;

class PaperController extends Controller
{
    public function show(Workspace $workspace, Paper $paper)
    {


        return view('phpapers.paper.show', compact('workspace', 'paper'));
    }

    public function destroy(Workspace $workspace, Paper $paper)
    {
        if ($paper->workspace_id !== $workspace->id) {
            abort(403);
        }

        $paper->delete();
        return redirect()->route('workspace.show', $workspace);;
    }

    public function store(Request $request, Workspace $workspace)
    {
        $validated = $request->validate(
            [
                'name' => 'required| string|max:50',
            ]
        );
        
        Paper::create([
            'title' => $validated['name'],
            'workspace_id' => $workspace->id,
            'content'=> '',
        ]);
        return redirect()->route('workspace.show', $workspace);
    }
    // public function edit(Workspace $workspace, Paper $paper)
    // {
    //     // Authorization and ownership checks here
    //     return view('phpapers.paper.edit', compact('workspace', 'paper'));
    // }

    // public function update(Request $request, Workspace $workspace, Paper $paper)
    // {
    //     // Validate and update notes or paper metadata
    // }

}
