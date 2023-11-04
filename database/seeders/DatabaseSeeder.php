<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Project;
use App\Models\Task;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       DB::statement('SET FOREIGN_KEY_CHECKS=0;');
       DB::table('project_user')->truncate();
       Project::truncate();
       Task::truncate();
       User::truncate();
       DB::statement('SET FOREIGN_KEY_CHECKS=1;');

       $admin = User::create([
           'name'  => 'Super Admin',
           'email' => 'superadmin@projectmanager.test',
           'password' => bcrypt('secrect')
       ]);

        $user = User::create([
            'name'  => 'Gabriel Quintana',
            'email' => 'gquintana@projectmanager.test',
            'password' => bcrypt('secrect')
        ]);

        $project = Project::create([
           'name' => 'Project Manager App',
            'description' => 'Creando Project Manager Laravel',
            'manager_id' => $admin->id
        ]);

        $task=Task::create([
            'name' => 'Fase Inicial',
            'description' =>'Se crea la face inicial del projecto Manager',
            'status_code' => 'COMP',
            'user_id' => $user->id,
            'project_id' => $project->id
        ]);
        $task=Task::create([
            'name' => 'Fase Dos',
            'description' =>'Fase de desarrollo',
            'status_code' => 'OPEN',
            'user_id' => $user->id,
            'project_id' => $project->id
        ]);

        $project->users()->saveMany([$admin, $user]);





    }
}
