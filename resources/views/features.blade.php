@extends('layouts.app')

@section('پوهنتون البرز ', 'Home')

@section('content')

   
    <main id="features-page" class="page">
        <section style="padding: 3rem 0;">
            <h2 class="section-title">ویژگی‌های منحصر به فرد</h2>
            <div class="features-grid" >
                @foreach ($features as $feature)
                    <div class="feature-card">
                        <i class="{{ $feature["icon"] }} feature-icon"></i>

                        <div class="feature-title">
                            {{ $feature["title"] }}
                        </div>

                        <p> {{ $feature["desc"] }} </p>
                    </div>
                @endforeach
            </div>
        </section>
    </main>

@endsection
   
