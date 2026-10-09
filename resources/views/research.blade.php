@extends('layouts.app')

@section('پوهنتون البرز ', 'Home')

@section('content')

   
    <main id="research-page" class="page">
        <section style="padding: 3rem 0;">
            <h2 class="section-title">مراکز تحقیقاتی و نوآوری</h2>
            <p style="text-align: center; margin-bottom: 2rem;">پیشگام در پژوهش‌های مرزی و فناوری‌های نوین</p>
            <div class="research-grid" id="researchGrid">
                @foreach($researches as $research)
                    <div class="research-card">

                        <i
                            class="{{ $research["icon"] }}"
                            style="
                                font-size: 3rem;
                                color: var(--secondary);
                                margin-bottom: 1rem;
                                display: block;
                            "
                        ></i>

                        <h3>{{ $research["title"] }}</h3>

                        <p>{{ $research["desc"] }}</p>

                        <button
                            class="btn btn-outline"
                            style="margin-top: 1rem;"
                        >
                            مشاهده جزئیات
                        </button>

                    </div>
                @endforeach
            </div>
        </section>
    </main>

@endsection
   
