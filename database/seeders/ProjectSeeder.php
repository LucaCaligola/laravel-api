<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Type;
use App\Models\User;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    
    {
        $typeIds = Type::all()->pluck('id');


        $projects = array (
            array(
                'title'=> 'Boolzapp',
                'description'=> 'Boolzapp è una replica della famossissima Whatsapp',
                'date'=> '2023-12-7',
                'picture'=> asset('img/boolzapp.png'),
                'project_url'=> 'https://github.com/LucaCaligola/vue-boolzapp',
                'languages'=> 'Javascript, HTML, CSS',
                'type_id' => rand(0, count($typeIds))
            ),

            array(
                'title'=> 'Spotify Web',
                'description'=> 'Replica di Spotify',
                'date'=> '2023-10-26',
                'picture'=> asset('img/spotify.png'),
                'project_url'=> 'https://github.com/LucaCaligola/vue-boolzapp',
                'languages'=> 'HTML, CSS',
                'type_id' => rand(0, count($typeIds))
            ),
            array(
                'title'=> 'Dashboard',
                'description'=> 'Dashboard di un sito web',
                'date'=> '2023-12-17',
                'picture'=> asset('img/dashboard.png'),
                'project_url'=> 'https://github.com/LucaCaligola/html-css-bootstrap-dashboard',
                'languages'=> 'HTML, CSS',
                'type_id' => rand(0, count($typeIds))
            )
            );

            foreach ($projects as $project) {

                $newProject = new Project();
                $newProject->title = $project['title'];
                $newProject->description = $project['description'];
                $newProject->date = $project['date'];
                $newProject->picture = $project['picture'];
                $newProject->project_url = $project['project_url'];
                $newProject->languages = $project['languages'];
                $newProject->type_id = $project['type_id'];
                $newProject->save();

                
            }

    //         foreach($projects as $project) {
    //             Project::create($project);
    //         }
    }
}
