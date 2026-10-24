<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOBIM | المنصة الهندسية المتكاملة</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Cairo', sans-serif; }
        .glass-card {
            background: rgba(15, 23, 42, 0.6);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(51, 65, 85, 0.4);
        }
        .glow-effect:hover {
            box-shadow: 0 0 25px rgba(37, 99, 235, 0.25);
        }
    </style>
</head>
<body class="bg-slate-950 text-slate-100 min-h-screen flex flex-col justify-between selection:bg-blue-500 selection:text-white">

    <!-- Navigation Bar -->
    <header class="w-full border-b border-slate-800/60 backdrop-blur-md bg-slate-900/80 fixed top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <div class="text-2xl font-black tracking-wider text-blue-500 flex items-center gap-2">
                TOBIM
                <span class="text-xs px-2 py-0.5 rounded bg-blue-500/10 text-blue-400 border border-blue-500/20">Unified</span>
            </div>
            <nav class="hidden md:flex gap-8 text-sm font-medium text-slate-300">
                <a href="#index.html" class="hover:text-blue-400 transition">الرئيسية</a>
                <a href="#services" class="hover:text-blue-400 transition">الخدمات الإنشائية</a>
                <a href="#academy" class="hover:text-blue-400 transition">الأكاديمية</a>
            </nav>
            <div>
                <a href="#contact" class="px-5 py-2.5 rounded-xl bg-blue-600 hover:bg-blue-500 text-white text-sm font-semibold transition shadow-lg shadow-blue-600/20">تواصل معنا</a>
            </div>
        </div>
    </header>

    <!-- Main Hero Section -->
    <main class="flex-grow pt-36 pb-20 px-6">
        <div class="max-w-5xl mx-auto text-center">
            <span class="px-4 py-1.5 rounded-full bg-blue-500/10 text-blue-400 text-xs font-semibold border border-blue-500/20 mb-6 inline-block">المنظومة الرقمية الموحدة لـ TOBIM</span>
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight mb-6 leading-tight">
                منصة هندسية متكاملة <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-400 to-blue-600">لتصميم وإدارة مشاريعك</span>
            </h1>
            <p class="text-slate-400 text-lg md:text-xl max-w-2xl mx-auto mb-10 leading-relaxed">
                تم دمج خدمات الهندسة الإنشائية والمنصات التعليمية تحت مظلة واحدة لتقديم تجربة مستخدم سريعة وعصرية.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#services" class="px-8 py-4 rounded-xl bg-blue-600 hover:bg-blue-500 text-white font-bold transition shadow-xl shadow-blue-600/30">استكشف الخدمات والمنصات</a>
            </div>
        </div>

        <!-- Services Grid Section -->
        <section id="services" class="max-w-7xl mx-auto mt-28 grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Card 1: Structural Platform -->
            <div class="glass-card p-8 rounded-2xl glow-effect transition flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 rounded-xl bg-blue-600/20 text-blue-400 flex items-center justify-center font-bold text-xl mb-6 border border-blue-500/30">01</div>
                    <h3 class="text-2xl font-bold text-white mb-4">خدمات الهندسة الإنشائية</h3>
                    <p class="text-slate-400 leading-relaxed mb-6">
                        استعراض الحلول الهندسية المتقدمة، التصاميم، وإدارة الأنظمة والملفات التقنية الخاصة بالهندسة والإنشاءات.
                    </p>
                </div>
                <a href="https://structure.to-bim.com" target="_blank" class="inline-flex items-center gap-2 text-blue-400 font-semibold hover:text-blue-300 transition">
                    الذهاب لمنصة الهياكل الإنشائية 
                    <svg class="w-4 h-4 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </a>
            </div>

            <!-- Card 2: Academy / Training Platform -->
            <div class="glass-card p-8 rounded-2xl glow-effect transition flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 rounded-xl bg-indigo-600/20 text-indigo-400 flex items-center justify-center font-bold text-xl mb-6 border border-indigo-500/30">02</div>
                    <h3 class="text-2xl font-bold text-white mb-4">الأكاديمية والتدريب المهني</h3>
                    <p class="text-slate-400 leading-relaxed mb-6">
                        كورسات وبرامج احترافية لتطوير المهارات التقنية والهندسية بأحدث الأساليب وتدريب الكوادر.
                    </p>
                </div>
                <a href="#" class="inline-flex items-center gap-2 text-indigo-400 font-semibold hover:text-indigo-300 transition">
                    استعراض الدورات والبرامج
                    <svg class="w-4 h-4 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </a>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="border-t border-slate-900 bg-slate-950 py-10 text-center text-slate-500 text-sm mt-auto">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-4">
            <p>جميع الحقوق محفوظة لشركة TOBIM © 2026</p>
            <div class="flex gap-6 text-slate-400">
                <a href="#" class="hover:text-blue-400 transition">سياسة الخصوصية</a>
                <a href="#" class="hover:text-blue-400 transition">الشروط والأحكام</a>
            </div>
        </div>
    </footer>

</body>
</html>
