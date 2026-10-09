import "./bootstrap";

const coursesData = [
    {
        id: 1,
        name: "علوم کامپیوتر",
        image: "https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=800&h=500&fit=crop",
        description: "هوش مصنوعی، امنیت، داده‌کاوی و مهندسی نرم‌افزار",
    },
    {
        id: 2,
        name: "مهندسی برق",
        image: "https://images.unsplash.com/photo-1581092334651-ddf26d9a09d0?w=800&h=500&fit=crop",
        description: "مخابرات، قدرت، الکترونیک و کنترل",
    },
    {
        id: 3,
        name: "اقتصاد",
        image: "https://images.unsplash.com/photo-1559526324-4b87b5e36e44?w=800&h=500&fit=crop",
        description: "اقتصاد مالی، توسعه و بانکداری",
    },
    {
        id: 4,
        name: "حقوق",
        image: "https://images.unsplash.com/photo-1589578527966-fdac0f44566c?w=800&h=500&fit=crop",
        description: "حقوق بین‌الملل، جزا و تجارت",
    },
    {
        id: 5,
        name: "زراعت",
        image: "https://images.unsplash.com/photo-1461354464878-ad92f492a5a0?w=800&h=500&fit=crop",
        description: "علوم گیاهی، بیوتکنولوژی و آبیاری",
    },
    {
        id: 6,
        name: "پزشکی",
        image: "https://images.unsplash.com/photo-1579154204601-01588f351e67?w=800&h=500&fit=crop",
        description: "پزشکی بالینی، جراحی و تحقیقات",
    },
    {
        id: 7,
        name: "داروسازی",
        image: "https://images.unsplash.com/photo-1587854692152-cbe660dbde88?w=800&h=500&fit=crop",
        description: "شیمی دارویی، فارماکولوژی",
    },
    {
        id: 8,
        name: "ادبیات فارسی",
        image: "https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?w=800&h=500&fit=crop",
        description: "زبان شناسی، نقد ادبی و تاریخ",
    },
];

const featuresData = [
    {
        icon: "fas fa-chalkboard-user",
        title: "کلاس‌های تعاملی",
        desc: "سیستم پیشرفته مجازی با تخته هوشمند و ضبط جلسات",
    },
    {
        icon: "fas fa-flask",
        title: "آزمایشگاه مجازی",
        desc: "شبیه‌سازی آزمایشگاه‌های پیشرفته به صورت آنلاین",
    },
    {
        icon: "fas fa-book-open",
        title: "کتابخانه دیجیتال",
        desc: "دسترسی به ۱۰۰ هزار منبع علمی و پایان‌نامه",
    },
    {
        icon: "fas fa-chart-line",
        title: "تحلیل پیشرفت",
        desc: "نمودارهای هوشمند عملکرد تحصیلی",
    },
    {
        icon: "fas fa-users",
        title: "شبکه اساتید",
        desc: "ارتباط مستقیم با منتورها و اساتید برجسته",
    },
    {
        icon: "fas fa-graduation-cap",
        title: "مدیریت پایان‌نامه",
        desc: "سیستم جامع داوری و ارزیابی",
    },
];

const testimonialsData = [
    {
        text: "سامانه آریانا تحول شگرفی در فرآیند آموزش ایجاد کرده است.",
        author: "دکتر رضا کریمی",
        role: "استاد مهندسی",
    },
    {
        text: "دسترسی به منابع و ارتباط با اساتید بی‌نظیر است.",
        author: "امید حسینی",
        role: "دانشجوی دکتری",
    },
    {
        text: "بخش مدیریت پایان‌نامه شفاف، سریع و کارآمد است.",
        author: "دکتر احمد نوری",
        role: "رئیس پژوهشکده",
    },
];

const faqData = [
    {
        q: "آیا دسترسی به سامانه رایگان است؟",
        a: "بله، محصلان به تمام امکانات پایه دسترسی رایگان دارند.",
    },
    {
        q: "امنیت داده‌های من چگونه تضمین می‌شود؟",
        a: "رمزنگاری AES-256 و سرورهای امن در مراکز داده پیشرفته.",
    },
    {
        q: "آیا می‌توانم اشتراک را لغو کنم؟",
        a: "بله، در هر زمان بدون هیچ جریمه‌ای.",
    },
    {
        q: "گواهی معتبر ارائه می‌شود؟",
        a: "بله، گواهی با مهر پوهنتون و قابل استعلام آنلاین.",
    },
];

const researchData = [
    {
        icon: "fas fa-microchip",
        title: "مرکز هوش مصنوعی",
        desc: "پروژه‌های پیشرفته در یادگیری عمیق و بینایی ماشین",
    },
    {
        icon: "fas fa-dna",
        title: "بیوتکنولوژی",
        desc: "آزمایشگاه مجهز ژنتیک مولکولی و مهندسی ژن",
    },
    {
        icon: "fas fa-satellite",
        title: "فناوری فضایی",
        desc: "همکاری با سازمان فضایی در طراحی ماهواره",
    },
    {
        icon: "fas fa-energy",
        title: "انرژی تجدیدپذیر",
        desc: "پژوهش در سلول‌های خورشیدی و توربین‌های بادی",
    },
];

const blogData = [
    {
        title: "افتتاح مرکز نوآوری دیجیتال",
        image: "https://picsum.photos/id/91/400/250",
        excerpt: "با حضور وزیر علوم، مرکز نوآوری دیجیتال پوهنتون افتتاح شد.",
    },
    {
        title: "نشست بین‌المللی هوش مصنوعی",
        image: "https://picsum.photos/id/92/400/250",
        excerpt: "برگزاری همایش دو روزه با حضور پژوهشگران بین‌المللی.",
    },
    {
        title: "رتبه برتر در تولید علم",
        image: "https://picsum.photos/id/93/400/250",
        excerpt: "پوهنتون آریانا رتبه اول تولید علم در بین پوهنتون‌های کشور.",
    },
    {
        title: "بورسیه‌های تحصیلی جدید",
        image: "https://picsum.photos/id/94/400/250",
        excerpt: "اعلام ۵۰ بورسیه کامل برای محصلان ممتاز.",
    },
];

/*
|--------------------------------------------------------------------------
| Render Courses
|--------------------------------------------------------------------------
*/

function renderCourses(containerId) {
    const container = document.getElementById(containerId);

    if (!container) return;

    container.innerHTML = coursesData
        .map(
            (course) => `
                <div class="course-col">
                    <img src="${course.image}" alt="${course.name}">

                    <div class="course-info">
                        <h3>${course.name}</h3>
                        <p>${course.description}</p>

                        <button
                            class="btn btn-outline"
                            style="margin-top: 10px;"
                        >
                            اطلاعات بیشتر
                        </button>
                    </div>
                </div>
            `,
        )
        .join("");
}

/*
|--------------------------------------------------------------------------
| Render Features
|--------------------------------------------------------------------------
*/

function renderFeatures(containerId) {
    const container = document.getElementById(containerId);

    if (!container) return;

    container.innerHTML = featuresData
        .map(
            (feature) => `
                <div class="feature-card">
                    <i class="${feature.icon} feature-icon"></i>

                    <div class="feature-title">
                        ${feature.title}
                    </div>

                    <p>${feature.desc}</p>
                </div>
            `,
        )
        .join("");
}

/*
|--------------------------------------------------------------------------
| Render Testimonials
|--------------------------------------------------------------------------
*/

function renderTestimonials() {
    const container = document.getElementById("testimonialsGrid");

    if (!container) return;

    container.innerHTML = testimonialsData
        .map(
            (testimonial) => `
                <article class="testimonial-card">
                    <i
                        class="fas fa-quote-right"
                        style="color: var(--secondary); font-size: 2rem;"
                    ></i>

                    <blockquote style="margin: 1rem 0;">
                        "${testimonial.text}"
                    </blockquote>

                    <h4 style="font-weight: 800;">
                        ${testimonial.author}
                    </h4>

                    <span style="font-size: 0.8rem; color: var(--text-muted);">
                        ${testimonial.role}
                    </span>
                </article>
            `,
        )
        .join("");
}

/*
|--------------------------------------------------------------------------
| Render FAQ
|--------------------------------------------------------------------------
*/

function renderFAQ() {
    const container = document.getElementById("faqGrid");

    if (!container) return;

    container.innerHTML = faqData
        .map(
            (item) => `
                <div class="faq-item">

                    <div class="faq-question">
                        ${item.q}

                        <i class="fas fa-chevron-down"></i>
                    </div>

                    <p class="faq-answer">
                        ${item.a}
                    </p>

                </div>
            `,
        )
        .join("");

    document.querySelectorAll(".faq-item").forEach((item) => {
        item.addEventListener("click", () => {
            item.classList.toggle("active");
        });
    });
}

/*
|--------------------------------------------------------------------------
| Render Research
|--------------------------------------------------------------------------
*/

function renderResearch() {
    const container = document.getElementById("researchGrid");

    if (!container) return;

    container.innerHTML = researchData
        .map(
            (research) => `
                <div class="research-card">

                    <i
                        class="${research.icon}"
                        style="
                            font-size: 3rem;
                            color: var(--secondary);
                            margin-bottom: 1rem;
                            display: block;
                        "
                    ></i>

                    <h3>${research.title}</h3>

                    <p>${research.desc}</p>

                    <button
                        class="btn btn-outline"
                        style="margin-top: 1rem;"
                    >
                        مشاهده جزئیات
                    </button>

                </div>
            `,
        )
        .join("");
}

/*
|--------------------------------------------------------------------------
| Render Blog
|--------------------------------------------------------------------------
*/

function renderBlog() {
    const container = document.getElementById("blogGrid");

    if (!container) return;

    container.innerHTML = blogData
        .map(
            (blog) => `
                <div class="blog-card">

                    <img src="${blog.image}" alt="${blog.title}">

                    <div class="blog-content">

                        <h3>${blog.title}</h3>

                        <p>${blog.excerpt}</p>

                        <button
                            class="btn btn-outline"
                            style="margin-top: 0.5rem;"
                        >
                            ادامه مطلب
                        </button>

                    </div>
                </div>
            `,
        )
        .join("");
}

/*
|--------------------------------------------------------------------------
| Dark Mode
|--------------------------------------------------------------------------
*/

const darkModeButtons = document.querySelectorAll(".darkModeToggle");

const savedTheme = localStorage.getItem("theme");

if (savedTheme === "dark") {
    document.body.classList.add("dark");
}

function updateDarkModeButtons() {
    const isDark = document.body.classList.contains("dark");

    darkModeButtons.forEach((button) => {
        button.textContent = isDark ? "☀️ روشن" : "🌙 تیره";
    });
}

updateDarkModeButtons();

darkModeButtons.forEach((button) => {
    button.addEventListener("click", () => {
        document.body.classList.toggle("dark");

        const isDark = document.body.classList.contains("dark");

        localStorage.setItem("theme", isDark ? "dark" : "light");

        updateDarkModeButtons();
    });
});

/*
|--------------------------------------------------------------------------
| Mobile Menu
|--------------------------------------------------------------------------
*/

const mobileOpenButton = document.getElementById("bars");
const mobileCloseButton = document.getElementById("cross");
const mobileMenu = document.querySelector(".mobile-container");

if (mobileOpenButton && mobileMenu) {
    mobileOpenButton.addEventListener("click", () => {
        mobileMenu.classList.add("activMobil");
    });
}

if (mobileCloseButton && mobileMenu) {
    mobileCloseButton.addEventListener("click", () => {
        mobileMenu.classList.remove("activMobil");
    });
}

if (mobileMenu) {
    mobileMenu.querySelectorAll("a").forEach((link) => {
        link.addEventListener("click", () => {
            mobileMenu.classList.remove("activMobil");
        });
    });
}

/*
|--------------------------------------------------------------------------
| Render Everything
|--------------------------------------------------------------------------
*/

renderCourses("courseRow");
renderCourses("coursesPageRow");

renderFeatures("featuresGrid");
renderFeatures("featuresPageGrid");

renderTestimonials();
renderFAQ();
renderResearch();
renderBlog();
