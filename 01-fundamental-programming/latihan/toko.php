<?php

// ==================================
// SIMPLE STORE MANAGEMENT SYSTEM
// ==================================

// 1. KONSTANTA INFORMASI TOKO
const NAMA_TOKO = "Aveline Store";
const ALAMAT_TOKO = "Jl. Danau Buyan G7/F19, Malang";
const TAHUN_BERDIRI = 2026;

// 2. VARIABEL INFORMASI TOKO
$namaPemilik = "Aveline";
$statusToko = true;
$jumlahProduk = 5;

// 3. MENAMPILKAN  INFORMASI TOKO
// echo "======================================================" . PHP_EOL;
// echo "                     INFORMASI TOKO         " . PHP_EOL;
// echo "======================================================" . PHP_EOL;
// echo "Nama Toko    : " . NAMA_TOKO . PHP_EOL;
// echo "Alamat Toko  : " . ALAMAT_TOKO . PHP_EOL;
// echo "Tahun Berdiri: " . TAHUN_BERDIRI . PHP_EOL;
// echo "Nama Pemilik : " . $namaPemilik . PHP_EOL;
// echo "Jumlah Produk: " . $jumlahProduk . PHP_EOL;
// echo "Status Toko  : " . ($statusToko? "Buka" : "Tutup") . PHP_EOL;

function tampilkanInformasiToko($namaPemilik, $jumlahProduk, $statusToko) {
    echo "======================================================" . PHP_EOL;
    echo "                 INFORMASI TOKO" . PHP_EOL;
    echo "======================================================" . PHP_EOL;

    echo "Nama Toko    : " . NAMA_TOKO . PHP_EOL;
    echo "Alamat Toko  : " . ALAMAT_TOKO . PHP_EOL;
    echo "Tahun Berdiri: " . TAHUN_BERDIRI . PHP_EOL;
    echo "Nama Pemilik : " . $namaPemilik . PHP_EOL;
    echo "Jumlah Produk: " . $jumlahProduk . PHP_EOL;
    echo "Status Toko  : " . ($statusToko ? "Buka" : "Tutup") . PHP_EOL;
}

tampilkanInformasiToko($namaPemilik, $jumlahProduk, $statusToko);

// 4. DATA PRODUK TOKO
$produk = [
    [
    "nama" => "Baju Kemeja",
    "harga" => 150000,  
    "stok" => 10
],
[
    "nama" => "Celana Jeans",
    "harga" => 200000,
    "stok" => 5
],
[
    "nama" => "Sepatu Sneakers",
    "harga" => 300000,
    "stok" => 8
],
[
    "nama" => "Kaos",
    "harga" => 100000,
    "stok" => 6
],
[
    "nama" => "Rok Panjang",
    "harga" => 80000,
    "stok" => 3
]
];

// 5. MENAMPILKAN DAFTAR PRODUK
// echo PHP_EOL;
// echo "======================================================" . PHP_EOL;
// echo "                        DAFTAR PRODUK" . PHP_EOL;
// echo "======================================================" . PHP_EOL;
// foreach ($produk as $index => $item) {
//     echo "Nama Produk : " . $item["nama"] . PHP_EOL;
//     echo "Harga       : Rp " . number_format($item["harga"], 0, ",", ".") . PHP_EOL;
//     echo "Stok        : " . $item["stok"] . PHP_EOL;
//     echo "------------------------------------------------------" . PHP_EOL;
// }

function tampilkanDaftarProduk($produk) {
    echo "======================================================" . PHP_EOL;
    echo "                        DAFTAR PRODUK" . PHP_EOL;
    echo "======================================================" . PHP_EOL;

    foreach ($produk as $item) {
        echo "Nama Produk : " . $item["nama"] . PHP_EOL;
        echo "Harga       : Rp " . number_format($item["harga"], 0, ',', '.') . PHP_EOL;
        echo "Stok        : " . $item["stok"] . PHP_EOL;
        echo "------------------------------------------------------" . PHP_EOL;
    }
}
tampilkanDaftarProduk($produk);

// 6. MENGHITUNG TOTAL NILAI STOK
// $totalNilaiStok = 0;
// foreach ($produk as $item) {
//     $totalNilaiStok += $item["harga"] * $item["stok"];
// }

// echo PHP_EOL;
// echo "======================================================" . PHP_EOL;
// echo "                  TOTAL NILAI STOK TOKO" . PHP_EOL;
// echo"=======================================================" . PHP_EOL;
// echo"Total Nilai Stok : Rp". number_format($totalNilaiStok,0,',','.') . PHP_EOL;

function hitungTotalNilaiStok($produk) {
    $totalNilaiStok = 0;

    foreach ($produk as $item) {
        $totalNilaiStok += $item["harga"] * $item["stok"];
    }

    return $totalNilaiStok;
}

$totalNilaiStok = hitungTotalNilaiStok($produk);

echo "======================================================" . PHP_EOL;
echo "                  TOTAL NILAI STOK TOKO" . PHP_EOL;
echo "======================================================" . PHP_EOL;
echo "Total Nilai Stok : Rp" . number_format($totalNilaiStok, 0, ',', '.') . PHP_EOL;

// 7. FITUR PENCARIAN PRODUK
// $keyword = "Sepatu Sneakers";
// $produkDitemukan = false;

// echo PHP_EOL;
// echo "======================================================" . PHP_EOL;
// echo "                  PENCARIAN PRODUK" . PHP_EOL;
// echo "======================================================" . PHP_EOL;
// foreach ($produk as $item) {
//     if ($item["nama"] === $keyword){
//         echo "Produk ditemukan!" . PHP_EOL;
//         echo "Nama Produk : " . $item["nama"] . PHP_EOL;
//         echo "Harga       : Rp " . number_format($item["harga"], 0, ",", ".") . PHP_EOL;
//         echo "Stok        : " . $item["stok"] . PHP_EOL;
//         $produkDitemukan = true;
//         break;
//     }
// }

// if (!$produkDitemukan) {
//     echo "Produk dengan nama '$keyword' tidak ditemukan." . PHP_EOL;
// }

function cariProduk($produk, $keyword) {
    foreach ($produk as $item) {
        if ($item["nama"] === $keyword) {
            return $item;
        }
    }

    return null;
}
$keyword = "Sepatu";

$hasilPencarian = cariProduk($produk, $keyword);

echo "======================================================" . PHP_EOL;
echo "                  PENCARIAN PRODUK" . PHP_EOL;
echo "======================================================" . PHP_EOL;

if ($hasilPencarian !== null) {
    echo "Produk ditemukan!" . PHP_EOL;
    echo "Nama Produk : " . $hasilPencarian["nama"] . PHP_EOL;
    echo "Harga       : Rp " . number_format($hasilPencarian["harga"], 0, ',', '.') . PHP_EOL;
    echo "Stok        : " . $hasilPencarian["stok"] . PHP_EOL;
} else {
    echo "Produk " . $keyword . " tidak ditemukan." . PHP_EOL;
}

// // 8. FITUR TRANSASKI PEMBELIAN
// $namaProduBeli = "Baju Kemeja";
// $jumlahBeli = 4;

// echo PHP_EOL;
// echo "======================================================" . PHP_EOL;
// echo "                  TRANSAKSI PEMBELIAN" . PHP_EOL;
// echo "======================================================" . PHP_EOL;    

// foreach ($produk as $item){

//     if ($item["nama"] === $namaProduBeli) {
//         if ($jumlahBeli > 0 && $jumlahBeli <= $item["stok"]){
//             $subtotal = $item["harga"] * $jumlahBeli;

            

//     // MENGHITUNG DISKON
//     $diskon = 0;

//         if($subtotal>=500000){
//             $diskon = 10;

//         }elseif ($subtotal>=300000){
//             $diskon = 5;
//         }

//         //MENGHITUNG NOMINAL DISKON
//         $nominalDiskon = $subtotal * ($diskon / 100);

//         //MENGHITUNG TOTAL PEMBAYARAN
//         $totalPembayaran = $subtotal - $nominalDiskon;

//         //MENAMPILKAN RINCIAN PEMBAYARAN
//         echo "Diskon      : " . $diskon . "%" . PHP_EOL;
//         echo "Potongan    : Rp" . number_format($nominalDiskon, 0, ',', '.') . PHP_EOL;
//         echo "Total Bayar : Rp" . number_format($totalPembayaran, 0, ',', '.') . PHP_EOL;



//     }

//             echo "Nama Produk : " . $item["nama"] . PHP_EOL;
//             echo "Harga       : Rp " . number_format($item["harga"], 0, ",", ".") . PHP_EOL;
//             echo "Jumlah Beli : " . $jumlahBeli . PHP_EOL;  
//             echo "Subtotal    : Rp " . number_format($subtotal, 0, ",", ".") . PHP_EOL;

//         }else {
//             echo "Stok tidak mencukupi untuk pembelian." . PHP_EOL;

//         }
//         break;
//     }


// // Mengurangi stok setelah transaksi berhasil
// foreach ($produk as $index => $item) {
//     if ($item["nama"] === $namaProduBeli) {
//         $produk[$index]["stok"] -= $jumlahBeli;
//         break;
//     }
// }

// echo "Sisa Stok   : " . $produk[$index]["stok"] . PHP_EOL;





// 8. FITUR TRANSAKSI PEMBELIAN

// $namaProdukBeli = "Baju Kemeja";
// $jumlahBeli = 4;

// $produkDitemukan = false;

// echo PHP_EOL;
// echo "======================================================" . PHP_EOL;
// echo "                 TRANSAKSI PEMBELIAN" . PHP_EOL;
// echo "======================================================" . PHP_EOL;

// foreach ($produk as $index => $item) {

//     if ($item["nama"] === $namaProdukBeli) {

//         $produkDitemukan = true;

//         // Validasi jumlah pembelian
//         if ($jumlahBeli <= 0) {
//             echo "Transaksi gagal! Jumlah pembelian tidak valid." . PHP_EOL;

//         } elseif ($jumlahBeli > $item["stok"]) {
//             echo "Transaksi gagal! Stok tidak mencukupi." . PHP_EOL;
//             echo "Stok tersedia : " . $item["stok"] . PHP_EOL;

//         } else {

//             // Menghitung subtotal
//             $subtotal = $item["harga"] * $jumlahBeli;

//             // Menghitung diskon
//             $diskon = 0;

//             if ($subtotal >= 500000) {
//                 $diskon = 10;
//             } elseif ($subtotal >= 300000) {
//                 $diskon = 5;
//             }

//             $nominalDiskon = $subtotal * ($diskon / 100);
//             $totalPembayaran = $subtotal - $nominalDiskon;

//             // Mengurangi stok
//             $produk[$index]["stok"] -= $jumlahBeli;

//             // Menampilkan transaksi
//             echo "Nama Produk  : " . $item["nama"] . PHP_EOL;
//             echo "Harga Satuan : Rp" . number_format($item["harga"], 0, ',', '.') . PHP_EOL;
//             echo "Jumlah Beli  : " . $jumlahBeli . PHP_EOL;
//             echo "Subtotal     : Rp" . number_format($subtotal, 0, ',', '.') . PHP_EOL;
//             echo "Diskon       : " . $diskon . "%" . PHP_EOL;
//             echo "Potongan     : Rp" . number_format($nominalDiskon, 0, ',', '.') . PHP_EOL;
//             echo "Total Bayar  : Rp" . number_format($totalPembayaran, 0, ',', '.') . PHP_EOL;
//             echo "Sisa Stok    : " . $produk[$index]["stok"] . PHP_EOL;

//             echo "Transaksi berhasil!" . PHP_EOL;
//         }

//         break;
//     }
// }

// // Jika produk tidak ditemukan
// if ($produkDitemukan === false) {
//     echo "Transaksi gagal! Produk tidak ditemukan." . PHP_EOL;
// }


function prosesTransaksi(&$produk, $namaProdukBeli, $jumlahBeli) {
    $produkDitemukan = false;

    foreach ($produk as $index => $item) {
        if ($item["nama"] === $namaProdukBeli) {
            $produkDitemukan = true;

            // Validasi jumlah pembelian
            if ($jumlahBeli <= 0) {
                echo "Transaksi gagal! Jumlah pembelian tidak valid." . PHP_EOL;

            } elseif ($jumlahBeli > $item["stok"]) {
                echo "Transaksi gagal! Stok tidak mencukupi." . PHP_EOL;
                echo "Stok tersedia : " . $item["stok"] . PHP_EOL;

            } else {
                // Menghitung subtotal
                $subtotal = $item["harga"] * $jumlahBeli;

                // Menghitung diskon
                $diskon = 0;

                if ($subtotal >= 500000) {
                    $diskon = 10;
                } elseif ($subtotal >= 300000) {
                    $diskon = 5;
                }

                // Menghitung total pembayaran
                $nominalDiskon = $subtotal * ($diskon / 100);
                $totalPembayaran = $subtotal - $nominalDiskon;

                // Mengurangi stok
                $produk[$index]["stok"] -= $jumlahBeli;

                // Menampilkan struk transaksi
                echo "Nama Produk  : " . $item["nama"] . PHP_EOL;
                echo "Harga Satuan : Rp" . number_format($item["harga"], 0, ',', '.') . PHP_EOL;
                echo "Jumlah Beli  : " . $jumlahBeli . PHP_EOL;
                echo "Subtotal     : Rp" . number_format($subtotal, 0, ',', '.') . PHP_EOL;
                echo "Diskon       : " . $diskon . "%" . PHP_EOL;
                echo "Potongan     : Rp" . number_format($nominalDiskon, 0, ',', '.') . PHP_EOL;
                echo "Total Bayar  : Rp" . number_format($totalPembayaran, 0, ',', '.') . PHP_EOL;
                echo "Sisa Stok    : " . $produk[$index]["stok"] . PHP_EOL;
                echo "Transaksi berhasil!" . PHP_EOL;
            }

            break;
        }
    }

    if ($produkDitemukan === false) {
        echo "Transaksi gagal! Produk tidak ditemukan." . PHP_EOL;
    }
}
$namaProdukBeli = "Baju Kemeja";
$jumlahBeli = 4;

echo "======================================================" . PHP_EOL;
echo "                 TRANSAKSI PEMBELIAN" . PHP_EOL;
echo "======================================================" . PHP_EOL;

prosesTransaksi($produk, $namaProdukBeli, $jumlahBeli);
