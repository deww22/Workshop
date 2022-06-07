

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PESAN MAKANAN - M. DEWA IRTA BUWANA</title>
    <!-- MEMANGGIL CSS - CASCADING STYLESHEET -->
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <!-- SECTION AWAL, PEMBUNGKUS CONTAINER -->
    <div class="section">
        <!-- CONTAINER, PEMBUNGKUS KONTEN -->
        <div class="container">
            <!-- JUDUL KONTEN -->
            <h1>
                PESAN MAKANAN
            </h1>
            <!-- SUB-JUDUL KONTEN -->
            <h4>
                Menu pilihan Makanan
            </h4>
            <!-- KONTEN - MENU MAKANAN -->
        <ol>
            <li>
                Cumi Asam Manis (Rp. 75.000,-)
            </li>
            <li>
                Cah Kangkung (Rp. 25.000,-)
            </li>
            <li>
                Nasi Timbel Kumplit (Rp. 80.000,-)
            </li>
            <li>
                Ayam Rica-rica (Rp. 120.000,-)
            </li>
            <li>
                Daging Sapi Lada Hitam (Rp. 100.000,-)
            </li>
        </ol>
        <!-- FORMULIR UNTUK MEMESAN MAKANAN -->
        <form action="" method="post">
            <!-- TIPE DATA NUMERIK YANG BISA DIMASUKKAN -->
            <label class="text-kiri" for="makanan">Masukan kode Makanan : </label>
            <input type="number" name="makanan" id="makanan">
            <!-- TIPE DATA NUMERIK YANG BISA DIMASUKKAN, DENGAN JUMLAH PESANAN DEFAULT 1 -->
        <label class="text-kiri" for="pesanan">Masukan Jumlah Pesanan : </label>
        <input type="number" name="pesanan" id="pesanan" value="1">
        <!-- TOMBOL UNTUK MEMESAN MAKANAN -->
        <input class="btn" type="submit" name="btn" value="PESAN MAKAN" />

    </form>
        </div>
    </div>
    <div class="container-card">
    <?php
    // JIKA ADA NILAI 'btn' ATAU JIKA TOMBOL YANG BERNILAI ATAU BERNAMA 'btn' DITEKAN, MAKA JALANKAN FUNGSI BERIKUT
if (isset($_POST['btn'])) {
    // TANGKAP NILAI MAKANAN ATAU MAKANAN YANG DI INPUT USER
    $makanan = $_POST['makanan'];
    // JIKA PESANAN TIDAK LEBIH DARI 1, MAKA
    if (!isset($_POST['pesanan'])) {
        $pesanan = 1;
    }
    // LALU JIKA SEBALIKNYA MAKA
    else {

        $pesanan = $_POST['pesanan'];
    }
    // DIBAWAH ADALAH PENGKONDISIAN YANG AKAN MENENTUKAN OUTPUT DARI APA YANG DI INPUT USER 

    switch ($makanan) {
        // DISINI AKAN TERJADI PENJUMLAHAN DAN PERKALIAN, DIMANA SUATU HARGA MAKANAN DAN NAMA MAKANAN SEBAGAI OUTPUTNYA, SERTA DENGAN MENTOTAL HARGA YANG DITAMBAH PPN 10%
        case 1:
            echo "Makanan : " . "Cumi Asam Manis";
            echo "<br>";
            echo "Harga : " . "Rp. " . number_format(75000, 0, ".", ".");
            echo "<br>";
            echo "Jumlah Pesanan : " . $pesanan;
            echo "<br>";
            echo "PPN (10 %) : " . "Rp. " . number_format(75000 / 10, 0, ".", ".");
            echo "<br>";
            echo "Total : ". "Rp. " . number_format(75000  * $pesanan, 0, ".", ".");
            echo "<br>";
            echo "Harus dibayarkan : ". "Rp. " . number_format(75000  * $pesanan + 75000 / 10, 0, ".", ".") . " (Hasil penjumlahan Total Harga + PPN 10%)";
            break;
        case 2:
            echo "Makanan : " . "Cah Kangkung";
            echo "<br>";
            echo "Harga : " . "Rp. " . number_format(25000, 0, ".", ".");
            echo "<br>";
            echo "Jumlah Pesanan : " . $pesanan;
            echo "<br>";
            echo "PPN (10 %) : " . "Rp. " . number_format(25000 / 10, 0, ".", ".");
            echo "<br>";
            echo "Total : " . "Rp. " . number_format(25000  * $pesanan, 0, ".", ".");
            echo "<br>";
            echo "Harus dibayarkan : " . "Rp. " . number_format(25000  * $pesanan + 25000 / 10, 0, ".", ".") . " (Hasil penjumlahan Total Harga + PPN 10%)";
            break;
        case 3:
            echo "Makanan : " . "Nasi Timbel Kumplit";
            echo "<br>";
            echo "Harga : " . "Rp. " . number_format(80000, 0, ".", ".");
            echo "<br>";
            echo "Jumlah Pesanan : " . $pesanan;
            echo "<br>";
            echo "PPN (10 %) : " . "Rp. " . number_format(80000 /10 , 0, ".", ".");
            echo "<br>";
            echo "Total : " . "Rp. " . number_format(80000  * $pesanan, 0, ".", ".");
            echo "<br>";
            echo "Harus dibayarkan : " . "Rp. " . number_format(80000  * $pesanan + 80000 / 10, 0, ".", ".") . " (Hasil penjumlahan Total Harga + PPN 10%)";
            break;
        case 4:
            echo "Makanan : " . "Ayam Rica-rica";
            echo "<br>";
            echo "Harga : " . "Rp. " . number_format(120000, 0, ".", ".");
            echo "<br>";
            echo "Jumlah Pesanan : " . $pesanan;
            echo "<br>";
            echo "PPN (10 %) : " . "Rp. " . number_format(120000 / 10, 0, ".", ".");
            echo "<br>";
            echo "Total : " . "Rp. " . number_format(120000  * $pesanan, 0, ".", ".");
            echo "<br>";
            echo "Harus dibayarkan : " . "Rp. " . number_format(120000  * $pesanan + 120000 / 10, 0, ".", ".") . " (Hasil penjumlahan Total Harga + PPN 10%)";
            break;
        case 5:
            echo "Makanan : " . "Daging Sapi Lada Hitam";
            echo "<br>";
            echo "Harga : " . "Rp. " . number_format(100000, 0, ".", ".");
            echo "<br>";
            echo "Jumlah Pesanan : " . $pesanan;
            echo "<br>";
            echo "PPN (10 %) : " . "Rp. " . number_format(100000 / 10, 0, ".", ".");
            echo "<br>";
            echo "Total : " . "Rp. " . number_format(100000  * $pesanan, 0, ".", ".");
            echo "<br>";
            echo "Harus dibayarkan : " . "Rp. " . number_format(100000  * $pesanan + 100000 / 10, 0, ".", ".") . " (Hasil penjumlahan Total Harga + PPN 10%)";
            break;
        
        default:
            echo "Menu yang anda masukan tidak ada";
            break;
    }

}


?>
    </div>
</body>
</html>
