<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOBIM | المنصة الهندسية المتكاملة</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/custom.css">
    <style>
        body { font-family: 'Cairo', sans-serif; }
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
                <a href="index.php" class="hover:text-blue-400 transition">الرئيسية</a>
                <a href="index.php#services" class="hover:text-blue-400 transition">الخدمات الإنشائية</a>
                <a href="index.php#academy" class="hover:text-blue-400 transition">الأكاديمية</a>
                <a href="index.php#contact" class="hover:text-blue-400 transition">تواصل معنا</a>
            </nav>
            <div class="flex items-center gap-4">
                <a href="dashboard.php" class="text-sm font-semibold text-slate-300 hover:text-white transition">لوحة التحكم</a>
                <a href="login.php" class="px-5 py-2.5 rounded-xl bg-blue-600 hover:bg-blue-500 text-white text-sm font-semibold transition shadow-lg shadow-blue-600/20">تسجيل الدخول</a>
            </div>
        </div>
    </header>
