<?php

namespace Database\Seeders;

use App\Models\Workspace;
use App\Models\Paper;
use App\Models\EloquentNote;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class WorkspaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $workspaces = Workspace::factory()->count(4)->create();

        foreach ($workspaces as $workspace) {
            $papers = Paper::factory()
                ->count(rand(2, 5))
                ->create(['workspace_id' => $workspace->id]);

       
        }
    }
}
