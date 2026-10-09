<?php

namespace App\Http\Controllers;

class CourseController extends Controller
{
    public function index()
    {
        $coursesData = [
            [
                'id' => 1,
                'name' => 'علوم کامپیوتر',
                'image' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=800&h=500&fit=crop',
                'description' => 'هوش مصنوعی، امنیت، داده‌کاوی و مهندسی نرم‌افزار',
            ],
            [
                'id' => 2,
                'name' => 'مهندسی برق',
                'image' => 'https://images.unsplash.com/photo-1581092334651-ddf26d9a09d0?w=800&h=500&fit=crop',
                'description' => 'مخابرات، قدرت، الکترونیک و کنترل',
            ],
            [
                    
        'id'=> 3,
        'name'=> "اقتصاد",
        'image'=> "https://images.unsplash.com/photo-1559526324-4b87b5e36e44?w=800&h=500&fit=crop",
        'description'=> "اقتصاد مالی، توسعه و بانکداری",
    
            ]
        ];

        return view('courses', [
            'courses' => $coursesData,
        ]);
    }
}