<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResearchController extends Controller
{
    function index(){
        $researchData = [
    [
        'icon' => 'fas fa-microchip',
        'title' => 'مرکز هوش مصنوعی',
        'desc' => 'پروژه‌های پیشرفته در یادگیری عمیق و بینایی ماشین',
    ],
    [
        'icon' => 'fas fa-dna',
        'title' => 'بیوتکنولوژی',
        'desc' => 'آزمایشگاه مجهز ژنتیک مولکولی و مهندسی ژن',
    ],
    [
        'icon' => 'fas fa-satellite',
        'title' => 'فناوری فضایی',
        'desc' => 'همکاری با سازمان فضایی در طراحی ماهواره',
    ],
    [
        'icon' => 'fas fa-solar-panel',
        'title' => 'انرژی تجدیدپذیر',
        'desc' => 'پژوهش در سلول‌های خورشیدی و توربین‌های بادی',
    ],
];

return view('research',[
    'researches'=>$researchData
]);
    }
}
