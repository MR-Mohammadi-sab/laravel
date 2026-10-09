<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <header>

        <nav class="navbar" >
            <div class="navbar-desktop">
                <a href="#" class="logo main-logo" data-page="home">
                    <i class="fas fa-university logo-icon"></i>
                    <div class="logo-text">
                        <div >پوهنتون البرز</div>
                        <div style="font-size: 0.8rem;">Alborz University</div>
                    </div>
                </a>
        
                <ul class="nav-links">
                    <li><a href="/" data-page="home">خانه</a></li>
                    <li><a href="/courses" data-page="courses">دوره‌ها</a></li>
                    <li><a href="/features" data-page="features">ویژگی‌ها</a></li>
                    <li><a href="/research" data-page="research">پژوهش</a></li>
                    <!-- <li><a href="" data-page="blog">وبلاگ</a></li> -->
                    <li><a href="/about" data-page="about">درباره ما</a></li>
                    <li><a href="/contact" data-page="contact">تماس</a></li>
                </ul>    
        
                <div class="btnContainer">
                    <button class="btn btn-outline loginBtn" id="loginBtn">ورود</button>
                    <button class="btn btn-primary signupBtn" id="signupBtn">ثبت‌نام</button>
                    <button class="theme-toggle darkModeToggle" id="darkModeToggle">🌙 تیره</button>
                </div>
                <button id="bars"><i class="fa-solid fa-bars" ></i></button>
            </div>
            <!-- mobile navbar -->
            <aside class="mobile-container">
                <div class="mobileLogo">
                    <a href="#" class="logo" data-page="home">
                    <i class="fas fa-university logo-icon"></i>
                    <div class="logo-text">
                        <h1 >پوهنتون البرز</h1>
                        <h1 style="font-size: 0.8rem;">Alborz University</h1>
                    </div>
                </a>
                    <div class="btnContainer-mobile">
                        <button class="btn btn-outline loginBtn" id="loginBtn">ورود</button>
                        <button class="btn btn-primary signupBtn" id="signupBtn">ثبت‌نام</button>
                        <button class="theme-toggle darkModeToggle" id="darkModeToggle">🌙 تیره</button>
                    </div>
                </div>

                <div class="mobilNav">
                <button id="cross"><i class="fa-solid fa-xmark"></i></button>
                <ul class="nav-links-mobile">
                    <li><a href="#" data-page="home">خانه</a></li>
                    <li><a href="#" data-page="courses">دوره‌</a></li>
                    <li><a href="#" data-page="features">ویژگی‌ها</a></li>
                    <li><a href="#" data-page="research">پژوهش</a></li>
                    <li><a href="#" data-page="blog">وبلاگ</a></li>
                    <li><a href="#" data-page="about">درباره ما</a></li>
                    <li><a href="#" data-page="contact">تماس</a></li>
                </ul>    
                </div>
            </aside>
        </nav>
    </header>

        <div id="authModal" class="modal">
        <form class="modal-form">
            <h2 id="modalTitle">ورود به حساب کاربری</h2> 
            <div>
                <label for="fullName">نام کامل</label>
                <input type="text" id="fullName" placeholder="نام و نام خانوادگی"  >
                <p  class="error" ></p>
            </div>
            <div>
                <label for="email">ایمیل</label>
                <input type="email" id="email" placeholder="ایمیل">
                <p  class="error" ></p>
            </div>
            <div>
                <label for="password">رمز عبور</label>
                <input type="password" id="password" placeholder="رمز عبور">
                <p  class="error" ></p>
            </div>
            <div>
                <label for="confirmPassword">تکرار رمز عبور</label>
                <input type="password" id="confirmPassword" placeholder="تکرار رمز عبور" >
                <p  class="error" ></p>
            </div>
            
            <div class="modal-buttons">
                <button class="btn btn-primary" id="modalSubmitBtn" type="submit">ورود</button>
                <button class="btn btn-outline" id="modalCloseBtn" type="button">انصراف</button>
            </div>
            <p id="toggleAuthMode">ثبت‌نام نکرده‌اید؟ ثبت‌نام کنید</p>
        </form>
    </div>

<main class="container">
        @yield('content')
</main>
<footer>
    <div class="container">
        <div class="footer-grid">
            <div class="footer-col">
                <h4>پوهنتون البرز</h4>
                <p>پیشرو در آموزش و پژوهش</p>
                <div class="social-icons">
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-telegram"></i></a>
                </div>
            </div>
            <div class="footer-col">
                <h4>دسترسی سریع</h4>
                <a href="#" data-page="home">خانه</a>
                <a href="#" data-page="courses">دوره‌ها</a>
                <a href="#" data-page="research">پژوهش</a>
                <a href="#" data-page="blog">وبلاگ</a>
            </div>
            <div class="footer-col">
                <h4>تماس</h4>
                <p>info@au.edu.af</p>
                <p>07444343222</p>
            </div>
        </div>
        <div class="footer-bottom">© ۲۰۲۶ پوهنتون البرز - تمامی حقوق محفوظ است</div>
    </div>
</footer>

</body>
</html>