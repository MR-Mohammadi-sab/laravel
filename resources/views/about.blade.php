@extends('layouts.app')

@section('پوهنتون البرز ', 'Home')

@section('content')

   
    <main id="about-page" class="page">
        <section style="padding: 3rem 0; text-align: center;">
            <h2 class="section-title">درباره پوهنتون بین‌المللی البرز</h2>
            <p style="max-width: 800px; margin: 1rem auto;">تأسیس ۱۳۸۰، یکی از برترین مراکز علمی با تمرکز بر فناوری و نوآوری. مأموریت ما تربیت نیروی متخصص و پژوهش‌های مرزی در حوزه علوم و فناوری است.</p>
            <img src="{{ asset('images/library.jpg') }}" style="border-radius: 32px; width:100%; max-width:600px; margin-top:2rem;">
            <div id="statsSection" class="stats-section">
        
                <div class="stat-item">
                    <div class="stat-number">۲۵٬۰۰۰+</div>
                    <div class="stat-label">دانشجو فعال</div>
                </div>

                <div class="stat-item">
                    <div class="stat-number">۱٬۸۰۰+</div>
                    <div class="stat-label">عضو هیئت علمی</div>
                </div>

                <div class="stat-item">
                    <div class="stat-number">۷۰۰+</div>
                    <div class="stat-label">مقاله علمی</div>
                </div>

                <div class="stat-item">
                    <div class="stat-number">۹۸٪</div>
                    <div class="stat-label">رضایت مندی</div>
                </div>

            </div>
        </section>
    </main>

@endsection
   
