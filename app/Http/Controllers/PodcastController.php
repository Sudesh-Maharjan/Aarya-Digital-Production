<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PodcastController extends Controller
{
    /**
     * Display a listing of events.
     *
     * @return \Illuminate\Http\Response
     */
    public function showPodcasts()
    {
        // Mock data for podcasts
        $podcasts = [
            [
                'id' => 1,
                'type' => 'podcasts',
                'image_url' => 'https://cdn.visitmusiccity.com/cdn/ff/WyUQ2fToB_u6c_uUNUPfiylu-hDXHFC8P0z7rwhUwB0/1670515183/public/2022-12/Sheraton%20Grand%20Nashville%20Downtown%20Earth%20%20Wind-1200x689-1a6d737.jpg',
                'month' => 'JAN',
                'day' => '20',
                'title' => 'Wonder Girls 2010 Wonder Girls World Tour San Francisco',
                'description' => 'We will get you directly seated and inside for you to enjoy the show.'
            ],
            [
                'id' => 2,
                'type' => 'podcasts',
                'image_url' => 'https://media.assettype.com/filmcompanion%2F2023-11%2Fb9b403e1-f078-4758-acf8-4d2d1e660f8a%2FErasTour_Lead.jpg?auto=format%2Ccompress&fit=max&w=1200',
                'month' => 'FEB',
                'day' => '15',
                'title' => 'JYJ 2011 JYJ Worldwide Concert Barcelona',
                'description' => 'Directly seated and inside for you to enjoy the show.'
            ],
      
            [
                'id' => 3,
                'type' => 'podcasts',
                'image_url' => 'https://media.wnyc.org/i/700/466/c/80/photologue/photos/LSO-bean.jpg',
                'month' => 'MAY',
                'day' => '15',
                'title' => 'JYJ 2011 JYJ Worldwide Concert Barcelona',
                'description' => 'Directly seated and inside for you to enjoy the show.'
            ],
            [
                'id' => 4,
                'type' => 'podcasts',
                'image_url' => 'https://audacyinc.com/wp-content/uploads/2021/11/header-events-page.jpg',
                'month' => 'JUL',
                'day' => '15',
                'title' => 'JYJ 2011 JYJ Worldwide Concert Barcelona',
                'description' => 'Directly seated and inside for you to enjoy the show.'
            ],
            [
                'id' => 5,
                'type' => 'podcasts',
                'image_url' => 'https://media.assettype.com/knocksense%2F2023-03%2F273084d5-7f21-4941-b6b3-68ada6bf9c35%2Fmaxresdefault__3_.jpg?rect=0%2C0%2C1280%2C720',
                'month' => 'SEP',
                'day' => '17',
                'title' => 'JYJ 2011 JYJ Worldwide Concert Barcelona',
                'description' => 'Directly seated and inside for you to enjoy the show.'
            ],
            [
                'id' => 6,
                'type' => 'podcasts', 
                'image_url' => 'https://cdn.visitmusiccity.com/cdn/ff/WyUQ2fToB_u6c_uUNUPfiylu-hDXHFC8P0z7rwhUwB0/1670515183/public/2022-12/Sheraton%20Grand%20Nashville%20Downtown%20Earth%20%20Wind-1200x689-1a6d737.jpg',
                'month' => 'AUG',
                'day' => '15',
                'title' => 'JYJ 2011 JYJ Worldwide Concert Barcelona',
                'description' => 'Directly seated and inside for you to enjoy the show.'
            ],
            [
                'id' => 7,
                'type' => 'podcasts',
                'image_url' => 'https://cdn.visitmusiccity.com/cdn/ff/WyUQ2fToB_u6c_uUNUPfiylu-hDXHFC8P0z7rwhUwB0/1670515183/public/2022-12/Sheraton%20Grand%20Nashville%20Downtown%20Earth%20%20Wind-1200x689-1a6d737.jpg',
                'month' => 'JAN',
                'day' => '20',
                'title' => 'Wonder Girls 2010 Wonder Girls World Tour San Francisco',
                'description' => 'We will get you directly seated and inside for you to enjoy the show.'
            ],
            [
                'id' => 8,
                'type' => 'podcasts',
                'image_url' => 'https://media.assettype.com/filmcompanion%2F2023-11%2Fb9b403e1-f078-4758-acf8-4d2d1e660f8a%2FErasTour_Lead.jpg?auto=format%2Ccompress&fit=max&w=1200',
                'month' => 'FEB',
                'day' => '15',
                'title' => 'JYJ 2011 JYJ Worldwide Concert Barcelona',
                'description' => 'Directly seated and inside for you to enjoy the show.'
            ],
       
        ];

        // Pass the podcasts data to the view
        return view('podcasts', ['podcasts' => $podcasts]);
    }
}
