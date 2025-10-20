<?php

use App\Http\Controllers\PaperController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkspaceController;

//show all workspaces on the homepage
Route::get('/', [WorkspaceController::class, 'home'])->name('home');

//show a singular workspace and its papers
Route::get('/workspace/{id}', [WorkspaceController::class, 'workspace'])->name('workspace.show');

//Create a workspace
Route::post('/workspace', [WorkspaceController::class, 'store'])->name(('workspace.store'));

//Delete a workspace
Route::delete('/{workspace}', [WorkspaceController::class, 'destroy'])->name('workspace.destroy');


//create a paper
Route::post('/{workspace}', [PaperController::class, 'store'])->name('paper.store')->scopeBindings();

//Delete a paper
Route::delete('/workspaces/{workspace}/papers/{paper}', [PaperController::class, 'destroy'])->name('paper.destroy')->scopeBindings();

//show all notes belonging to a paper
Route::get('/workspace/{workspace}/paper/{paper}', [PaperController::class, 'show'])->name('paper.show')->scopeBindings();


Route::get('/wys', function () {
    return view('phpapers.wysiwyg');
});
