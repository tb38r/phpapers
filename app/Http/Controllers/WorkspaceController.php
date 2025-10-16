<?php

namespace App\Http\Controllers;

use App\Models\Workspace;
use Illuminate\Http\Request;

class WorkspaceController extends Controller
{
    public function home(Request $request)
    {

        $viewMode = $request->query('view', 'list');
        $workspaces = Workspace::orderBy('name')->get();

        return view('phpapers.home', compact('workspaces', 'viewMode'));
    }

    public function workspace($id)
    {
        $workspace = Workspace::with('papers')->findOrFail($id);
        return view('phpapers.workspace.index', ["workspace" => $workspace]);
    }

    public function destroy(Workspace $workspace)
    {
        $workspace_to_delete = $workspace->name;
        if (! $workspace->delete()) {
            abort(500, 'Workspace deletion failed.');
        }
        return redirect()->back()->with('delete-status', "Workspace '{$workspace_to_delete}' deleted");
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required| string|max:50',
            'description' => 'required| string|max:255',


        ]);
        Workspace::create($validated);
        return redirect()->route('home')->with('create-status', 'Workspace ' . $validated['name'] . ' created');
    }
}
