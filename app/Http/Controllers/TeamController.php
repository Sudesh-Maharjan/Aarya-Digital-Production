<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Models\TeamMember; // Replace with your actual model

class TeamController extends Controller
{
    /**
     * Display a listing of team members.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        // $teamMembers = TeamMember::paginate(8);

        // Mock data for team members
        $teamMembers = [
            [
                'id' => 1,
                'image_url' => 'https://retratosbarcelona.com/wp-content/uploads/2022/09/Retratos-Barcelona-Linkedin-Photo-Sydney.jpg',
                'name' => 'Subas Nepal',
                'designation' => 'CEO'
            ],
            [
                'id' => 2,
                'image_url' => 'https://retratosbarcelona.com/wp-content/uploads/2022/09/Retratos-Barcelona-Linkedin-Photo-Sydney.jpg',
                'name' => 'Sajan Shrestha',
                'designation' => 'Digital Managing Director'
            ],
            [
                'id' => 1,
                'image_url' => 'https://retratosbarcelona.com/wp-content/uploads/2022/09/Retratos-Barcelona-Linkedin-Photo-Sydney.jpg',
                'name' => 'Rubina Tamang',
                'designation' => 'Senior Graphic Designer'
            ],
            [
                'id' => 2,
                'image_url' => 'https://retratosbarcelona.com/wp-content/uploads/2022/09/Retratos-Barcelona-Linkedin-Photo-Sydney.jpg',
                'name' => 'Amit Sir',
                'designation' => 'Video Editor'
            ],
            [
                'id' => 1,
                'image_url' => 'https://retratosbarcelona.com/wp-content/uploads/2022/09/Retratos-Barcelona-Linkedin-Photo-Sydney.jpg',
                'name' => 'Member 1',
                'designation' => 'Designation 1'
            ],
            [
                'id' => 2,
                'image_url' => 'https://retratosbarcelona.com/wp-content/uploads/2022/09/Retratos-Barcelona-Linkedin-Photo-Sydney.jpg',
                'name' => 'Member 2',
                'designation' => 'Designation 2'
            ],
            [
                'id' => 1,
                'image_url' => 'https://retratosbarcelona.com/wp-content/uploads/2022/09/Retratos-Barcelona-Linkedin-Photo-Sydney.jpg',
                'name' => 'Member 1',
                'designation' => 'Designation 1'
            ],
            [
                'id' => 2,
                'image_url' => 'https://retratosbarcelona.com/wp-content/uploads/2022/09/Retratos-Barcelona-Linkedin-Photo-Sydney.jpg',
                'name' => 'Member 2',
                'designation' => 'Designation 2'
            ],
            [
                'id' => 1,
                'image_url' => 'https://retratosbarcelona.com/wp-content/uploads/2022/09/Retratos-Barcelona-Linkedin-Photo-Sydney.jpg',
                'name' => 'Member 1',
                'designation' => 'Designation 1'
            ],
            [
                'id' => 2,
                'image_url' => 'https://retratosbarcelona.com/wp-content/uploads/2022/09/Retratos-Barcelona-Linkedin-Photo-Sydney.jpg',
                'name' => 'Member 2',
                'designation' => 'Designation 2'
            ],
            [
                'id' => 1,
                'image_url' => 'https://retratosbarcelona.com/wp-content/uploads/2022/09/Retratos-Barcelona-Linkedin-Photo-Sydney.jpg',
                'name' => 'Rubina Tamang',
                'designation' => 'Senior Graphic Designer'
            ],
            
        ];

        $icons = [
            ['image' => 'images/popularT.png', 'alt' => 'Description 1'],
            ['image' => 'images/uab.png', 'alt' => 'Description 2'],
            ['image' => 'images/sofadecor.png', 'alt' => 'Description 3'],
            ['image' => 'images/popularT.png', 'alt' => 'Description 1'],
            ['image' => 'images/uab.png', 'alt' => 'Description 2'],
            ['image' => 'images/sofadecor.png', 'alt' => 'Description 3'],
            ['image' => 'images/popularT.png', 'alt' => 'Description 1'],
            ['image' => 'images/uab.png', 'alt' => 'Description 2'],
            ['image' => 'images/sofadecor.png', 'alt' => 'Description 3'],
            ['image' => 'images/popularT.png', 'alt' => 'Description 1'],
            ['image' => 'images/uab.png', 'alt' => 'Description 2'],
            ['image' => 'images/sofadecor.png', 'alt' => 'Description 3'],
            ['image' => 'images/uab.png', 'alt' => 'Description 2'],

            // ... more icons
        ];


 

        // Pass the team member data to the view
        return view('about', compact('teamMembers', 'icons'));
    }
}
