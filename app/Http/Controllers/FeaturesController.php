<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeaturesController extends Controller
{
    function index(){
        $featuresData = [
            [
                'icon' => 'fas fa-chalkboard-user',
                'title' => 'کلاس‌های تعاملی',
                'desc' => 'سیستم پیشرفته مجازی با تخته هوشمند و ضبط جلسات',
            ],
            [
                'icon' => 'fas fa-flask',
                'title' => 'آزمایشگاه مجازی',
                'desc' => 'شبیه‌سازی آزمایشگاه‌های پیشرفته به صورت آنلاین',
            ],
            [
                'icon' => 'fas fa-book-open',
                'title' => 'کتابخانه دیجیتال',
                'desc' => 'دسترسی به ۱۰۰ هزار منبع علمی و پایان‌نامه',
            ],
            [
                'icon' => 'fas fa-chart-line',
                'title' => 'تحلیل پیشرفت',
                'desc' => 'نمودارهای هوشمند عملکرد تحصیلی',
            ],
            [
                'icon' => 'fas fa-users',
                'title' => 'شبکه اساتید',
                'desc' => 'ارتباط مستقیم با منتورها و اساتید برجسته',
            ],
            [
                'icon' => 'fas fa-graduation-cap',
                'title' => 'مدیریت پایان‌نامه',
                'desc' => 'سیستم جامع داوری و ارزیابی',
            ],
];
return view('features',[
    'features'=>$featuresData,
]);
    }
}
