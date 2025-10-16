<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WorkspaceItem extends Component
{
    /**
     * Create a new component instance.
     */
    public $workspace;
    public $viewMode;

    public function __construct($workspace, $viewMode = 'list')
    {
        $this->workspace = $workspace;
        $this->viewMode = $viewMode;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.workspace-item');
    }
}
