<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TripKu bdg - Aplikasi Pemesanan Trip Bandung</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .hide-scrollbar::-webkit-scrollbar { display: none; }
        .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 min-h-screen flex flex-col">

    <header id="main-nav" class="bg-white shadow-sm sticky top-0 z-50 hidden">
        <div class="max-w-6xl mx-auto px-4 h-16 flex items-center justify-between">
            <div class="flex items-center space-x-2 cursor-pointer" onclick="navigateTo('user-home')">
                <span class="text-xl font-bold text-emerald-600">TripKu<span class="text-xs font-normal align-super text-emerald-500">bdg</span></span>
            </div>
            <nav class="flex items-center space-x-6 text-sm font-medium text-gray-600">
                <button onclick="navigateTo('user-home')" class="hover:text-emerald-600">Trips</button>
                <button onclick="navigateTo('user-history')" class="hover:text-emerald-600">Riwayat</button>
                <button onclick="navigateTo('user-about')" class="hover:text-emerald-600">Tentang</button>
                <button onclick="logout()" class="text-red-500 font-bold ml-2"><i class="fa-solid fa-power-off"></i></button>
            </nav>
        </div>
    </header>

    <header id="admin-nav" class="bg-slate-900 text-white sticky top-0 z-50 hidden">
        <div class="max-w-7xl mx-auto px-4 h-16 flex items-center justify-between">
            <span class="text-xl font-bold text-emerald-400">TripKu<span class="text-xs align-super">bdg</span> <span class="text-xs bg-slate-800 text-slate-300 px-2 py-0.5 rounded ml-1">ADMIN</span></span>
            <nav class="flex items-center space-x-4 text-sm font-medium">
                <button onclick="navigateTo('admin-trips')" class="hover:text-emerald-400">Kelola Trips</button>
                <button onclick="navigateTo('admin-destinations')" class="hover:text-emerald-400">Kelola Destinasi</button>
                <button onclick="navigateTo('admin-bookings')" class="hover:text-emerald-400">Kelola Booking</button>
                <button onclick="logout()" class="bg-red-600 px-3 py-1.5 rounded text-xs">Logout</button>
            </nav>
        </div>
    </header>

    <main id="content-viewport" class="flex-grow max-w-7xl w-full mx-auto p-4 md:p-6">
        </main>

    <footer class="bg-white border-t border-gray-100 mt-12 py-6 text-center text-xs text-gray-400">
        <p>&copy; 2026 TripKuᵇᵈᵍ Proyek Tugas Besar Pemrograman Web.</p>
    </footer>

    <script src="app.js"></script>
</body>
</html>