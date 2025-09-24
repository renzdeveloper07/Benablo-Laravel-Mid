<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller

{

    public function index()

    {

        // Your portfolio data - you can modify these details

        $portfolio = [

            'name' => 'Renz Boy M. Benablo ',

            'title' => 'Full Stack Web Developer',

            'email' => 'renzbenablo@gmail.com',

            'phone' => '+639074562134',

            'location' => 'PH, Manila',

            'bio' => 'Passionate web developer with 5+ years of experience...',

            'profile_image' => 'https://via.placeholder.com/300x300?text=Your+Photo',

            'skills' => ['Laravel', 'PHP', 'JavaScript', 'HTML5', 'CSS3'],

            'projects' => [], // Project data

            'experience' => [], // Experience data

            'education' => [], // Education data

            'social_links' => [], // Social media links

        ];

        return view('portfolio.index', compact('portfolio'));

    }

}