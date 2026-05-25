<?php
session_start();

$page = isset($_GET['page']) ? $_GET['page'] : 'welcome';

$destinations = [
    ["id" => "#20462", "name" => "Wisata Kawah Putih", "location" => "Ciwidey", "price" => 200000, "mood" => "Healing", "img" => "https://images.unsplash.com/photo-1626125353105-021b2bb74b33?auto=format&fit=crop&w=600&q=80", "desc" => "Danau belerang ikonik dengan suasana alam yang tenang.", "address" => "Jalan Raya Ciwidey - Patengan Km 11, Kabupaten Bandung"],
    ["id" => "#18933", "name" => "Jalan Braga", "location" => "Sumur Bandung", "price" => 250000, "mood" => "Adventure", "img" => "https://images.unsplash.com/photo-1582202951118-2e06c86716a5?auto=format&fit=crop&w=600&q=80", "desc" => "Suasana kota tua Bandung dengan bangunan bersejarah.", "address" => "Jalan Braga No. 10, Kota Bandung"],
    ["id" => "#45169", "name" => "Orchid Forest Cikole", "location" => "Lembang", "price" => 150000, "mood" => "Healing", "img" => "https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?auto=format&fit=crop&w=600&q=80", "desc" => "Hutan pinus asri dengan koleksi anggrek langka.", "address" => "Jl. Anyar No. 49, Cikole, Lembang"]
];

$_SESSION['destinations'] = $destinations;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TripKu bdg - Aplikasi Pemesanan Trip Bandung</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght=400;500;600;700&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 min-h-screen flex flex-col">

    <?php if (strpos($page, 'user-') === 0): ?>
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 h-16 flex items-center justify-between">
            <a href="index.php?page=user-home" class="text-xl font-bold text-emerald-600">TripKu<span class="text-xs font-normal align-super text-emerald-500">bdg</span></a>
            <nav class="flex items-center space-x-6 text-sm font-medium text-gray-600">
                <a href="index.php?page=user-home" class="hover:text-emerald-600">Trips</a>
                <a href="index.php?page=user-history" class="hover:text-emerald-600">Riwayat</a>
                <a href="index.php?page=user-about" class="hover:text-emerald-600">Tentang</a>
                <a href="index.php?page=welcome" class="text-red-500 font-bold ml-2"><i class="fa-solid fa-power-off"></i></a>
            </nav>
        </div>
    </header>
    <?php endif; ?>

    <?php if (strpos($page, 'admin-') === 0): ?>
    <header class="bg-slate-900 text-white sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 h-16 flex items-center justify-between">
            <span class="text-xl font-bold text-emerald-400">TripKu<span class="text-xs align-super">bdg</span> <span class="text-xs bg-slate-800 text-slate-300 px-2 py-0.5 rounded ml-1">ADMIN</span></span>
            <nav class="flex items-center space-x-4 text-sm font-medium">
                <a href="index.php?page=admin-bookings" class="hover:text-emerald-400">Kelola Booking</a>
                <a href="index.php?page=welcome" class="bg-red-600 px-3 py-1.5 rounded text-xs text-white">Logout</a>
            </nav>
        </div>
    </header>
    <?php endif; ?>

    <main class="flex-grow max-w-7xl w-full mx-auto p-4 md:p-6">
        <?php
        $target_file = "pages/" . $page . ".php";
        if (file_exists($target_file)) {
            include($target_file);
        } else {
            echo "<div class='text-center py-12 text-red-500 font-bold'>Halaman tidak ditemukan!</div>";
        }
        ?>
    </main>

    <footer class="bg-white border-t border-gray-100 mt-12 py-6 text-center text-xs text-gray-400">
        <p>&copy; 2026 TripKuᵇᵈᵍ Proyek Tugas Besar Pemrograman Web.</p>
    </footer>

</body>
</html>