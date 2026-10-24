<?php 
include 'includes/db.php';
include 'includes/header.php'; 
?>

    <main class="flex-grow pt-32 pb-20 px-6 max-w-7xl mx-auto w-full">
        <div class="glass-card p-8 rounded-2xl mb-8">
            <h1 class="text-3xl font-extrabold text-white mb-2">لوحة التحكم المركزية</h1>
            <p class="text-slate-400">مرحباً بك في لوحة تحكم منصة TOBIM الموحدة.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="glass-card p-6 rounded-xl">
                <h4 class="text-slate-400 text-sm font-medium mb-2">إجمالي المستخدمين</h4>
                <div class="text-3xl font-bold text-white">0</div>
            </div>
            <div class="glass-card p-6 rounded-xl">
                <h4 class="text-slate-400 text-sm font-medium mb-2">الخدمات النشطة</h4>
                <div class="text-3xl font-bold text-blue-400">2</div>
            </div>
            <div class="glass-card p-6 rounded-xl">
                <h4 class="text-slate-400 text-sm font-medium mb-2">حالة النظام</h4>
                <div class="text-emerald-400 font-bold flex items-center gap-2 mt-1">
                    <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-pulse"></span>
                    يعمل بكفاءة
                </div>
            </div>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
