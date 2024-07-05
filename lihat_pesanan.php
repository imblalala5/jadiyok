<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pesanan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Daftar Pesanan Kamera</h1>
    </header>
    <main>
        <section class="order-list">
            <h2>Data Pesanan</h2>
            <?php
            $file = 'pesanan.txt';
            if (file_exists($file)) {
                $orders = file($file, FILE_IGNORE_NEW_LINES);
                if (count($orders) > 0) {
                    echo '<ul>';
                    foreach ($orders as $order) {
                        echo '<li>' . htmlspecialchars($order) . '</li>';
                    }
                    echo '</ul>';
                } else {
                    echo '<p>Tidak ada pesanan yang ditemukan.</p>';
                }
            } else {
                echo '<p>File pesanan.txt tidak ditemukan.</p>';
            }
            ?>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Mika Rental Kamera DSLR</p>
    </footer>
</body>
</html>
