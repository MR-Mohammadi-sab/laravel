@extends('layouts.app')

@section('پوهنتون البرز ', 'Home')

@section('content')

   
    <div id="contact-page" class="page">
        <section style="padding: 3rem 0;">
            <h2 class="section-title">ارتباط با ما</h2>
            <div class="contact-container">
                <div class="contact-cart">
                    <form class="contactForm contact-form">
                        <h3>فرم تماس</h3>
                        <div>
                            <label for="fullName">نام کامل</label>
                            <input type="text" id="contactName" placeholder="نام کامل">
                            <p  class="error" ></p>
                        </div>
                        <div>
                            <label for="fullName">ایمیل </label>
                             <input type="email" id="contactEmail" placeholder="ایمیل">
                            <p  class="error" ></p>
                        </div>
                        <div>
                            <label for="fullName">موضوع </label>
                             <input type="text" id="contactSubject" placeholder="موضوع">
                            <p  class="error" ></p>
                        </div>
                        <div>
                            <label for="fullName">پیام شما</label>
                            <textarea id="contactMessage" rows="4" placeholder="پیام شما"></textarea>
                            <p  class="error" ></p>
                        </div>

                        <button class="btn btn-primary" id="sendContactBtn">ارسال پیام</button>
                    </form>
                </div>

                <div class="contact-cart">
                    <div class="contact-form">
                        <h3>اطلاعات تماس</h3>
                        <p><i class="fas fa-map-marker-alt"></i> کابل، خیابان پوهنتون، پردیس مرکزی</p>
                        <p><i class="fas fa-phone"></i> ۰۲۱-۸۸۷۶۵۴۳۲</p>
                        <p><i class="fas fa-envelope"></i> info@au.edu.af</p>
                        <div class="social-icons" style="margin-top: 1rem;">
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-telegram"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
   
