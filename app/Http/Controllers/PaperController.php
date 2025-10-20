<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paper;
use App\Models\Workspace;
use Illuminate\Support\Facades\Log;


class PaperController extends Controller
{
    public function show(Workspace $workspace, Paper $paper)
    {
        $content = $paper->content ?? '';


        return view('phpapers.wysiwyg', compact('workspace', 'paper', 'content'));
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

    public function save(Request $request, Workspace $workspace, Paper $paper)
{
    $validated = $request->validate([
        'content' => 'nullable|string',
    ]);

    $paper->update(['content' => $validated['content']]);

    return response()->json(['status' => 'saved']);
}




}
