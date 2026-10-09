@extends('layouts.app')

@section('پوهنتون البرز ', 'Home')

@section('content')

   
   <main id="home-page" class="page active-page">
        <!-- hero -->
        <section class="hero">
            <div class="hero-content">
                <div class="hero-badge">🎓 پیشرو در آموزش عالی آسیا</div>
                <h1>تحول دیجیتال <span>آموزش</span><br>در قلب تمدن</h1>
                <p style="color: var(--text-secondary); margin-bottom: 2rem;">بیش از ۲۵٬۰۰۰ محصل از ۳۵ کشور جهان به سامانه آموزشی پیشرفته ما متصل هستند. آینده را امروز تجربه کنید.</p>
                <button class="btn btn-primary"> ثبت نام کردن</button>
            </div>
            <div class="hero-illustration">
                <img src="{{ asset('images/hero.jpg') }}" alt="پوهنتون مدرن" />
            </div>
        </section>
        <!-- features -->
        <section >
            <h2 class="section-title">خدمات ممتاز پوهنتون</h2>
            <div class="features-grid" id="featuresGrid"></div>
        </section>
        <!-- course -->
        <section class="course-section">
            <h2 style="font-size: 2rem; text-align: center;">رشته‌های تحصیلی برتر</h2>
            <p style="text-align: center; color: var(--text-muted);">پیشرو در آموزش عالی با بیش از ۵۰ رشته تخصصی</p>
            <div class="course-row" id="courseRow"></div>
        </section>

        <div class="demo-section">
            <h3 style="font-size: 1.8rem;">پیش‌نمایش سامانه آموزشی</h3>
            <div class="video-wrapper">
                <video controls  height="400">
                    <source src="{{ asset('images/demo.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>

        <!-- testimonial -->
        <section>
            <h2 class="section-title">نظرات جامعه پوهنتونی</h2>
            <div class="testimonial-grid" id="testimonialsGrid"></div>
        </section>



        <!-- faq -->
        <section>
            <h2 class="section-title">پرسش‌های متداول</h2>
            <div class="faq-grid" id="faqGrid"></div>
        </section>
    </main>

@endsection
   
