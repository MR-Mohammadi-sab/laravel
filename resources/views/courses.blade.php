@extends('layouts.app')

@section('پوهنتون البرز ', 'Home')

@section('content')

   
    <div id="courses-page" class="page">
        <section style="padding: 3rem 0;">
            <h2 class="section-title">دوره‌های تخصصی پوهنتون</h2>
            <p style="text-align: center; margin-bottom: 2rem;">بیش از ۵۰ رشته در مقاطع کارشناسی، ارشد و دکتری</p>
            <div class="course-row" >

                @foreach ($courses as $course)
                <div class='course-col'>
                    <h2>{{ $course['name'] }}</h2>
                    
                    <img
                    src="{{ $course['image'] }}"
                    alt="{{ $course['name'] }}"
                    width="300"
                    >
                    
                    <p>{{ $course['description'] }}</p>
                </div>
                @endforeach
            </div>
        </section>
    </div>

@endsection
   
