<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja Barang Elektronik</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <style>
        .container {
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            background-color: #fff;
            margin: auto;
            margin-top: 50px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            width: 100%;
        }

        label, select, input[type="text"], input[type="submit"] {
            width: 100%;
            margin-bottom: 10px;
            display: block;
            padding: 5px;
        }

        input[type="submit"] {
            background-color: #64a0e4;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #4d5ac9;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Arman Elektronik</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="nama_pelanggan">Nama Pelanggan</label>
        <input type="text" name="nama_pelanggan" id="nama_pelanggan" required>
        
        <label for="produk">Produk Pilihan</label>
        <select name="produk" id="produk" required>
            <option value="">Pilih Produk</option>
            <option value="TV">TV</option>
            <option value="Kulkas">Kulkas</option>
            <option value="AC">AC</option>
            <option value="Laptop">Laptop</option>
        </select>
        
        <label for="jumlah_beli">Jumlah Produk</label>
        <input type="text" name="jumlah_beli" id="jumlah_beli" required>
        
        <input type="submit" name="submit" value="Beli">
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $produk = $_POST['produk'];
    $jumlah_beli = $_POST['jumlah_beli'];

    if ($produk == 'TV') {
        $harga_satuan = 2000000;
    } elseif ($produk == 'Kulkas') {
        $harga_satuan = 4000000;
    } elseif ($produk == 'AC') {
        $harga_satuan = 3000000;
    } elseif ($produk == 'Laptop') {
        $harga_satuan = 6000000;
    }

    $total_belanja = $jumlah_beli * $harga_satuan;

    $diskon = 0.2 * $total_belanja;

    $ppn = 0.1 * ($total_belanja - $diskon);

    $harga_bersih = ($total_belanja - $diskon) + $ppn;

    echo "<script>
        Swal.fire({
            title: 'Rincian Belanja',
            html: 'Nama Pelanggan: $nama_pelanggan <br>
                   Produk: $produk <br>
                   Jumlah Beli: $jumlah_beli <br>
                   Harga Satuan: $harga_satuan IDR <br>
                   Total Belanja: $total_belanja IDR <br>
                   Diskon: $diskon IDR <br>
                   PPN: $ppn IDR <br>
                   Harga Bersih: $harga_bersih IDR',
        });
    </script>";
}
?>

</body>
</html>
