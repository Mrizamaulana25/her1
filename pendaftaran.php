<?php $proses = isset($_POST['bayar']) ? $_POST['bayar'] : ' ';
$peserta = isset($_POST['pembeli']) ? $_POST['pembeli'] : ' ';
$paket = isset($_POST['paket']) ? $_POST['paket'] : ' ';
$jumlah = isset($_POST['paket']) ? $_POST['paket'] : ' ';
$waktu = isset($_POST['waktu']) ? $_POST['waktu'] : ' ';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pendaftaran khusu</title>
</head>

<body>
    <h1>LEMBAGA KURSUS KOMPUTER ANDA PASTI BISA</h1>
    <br>
    ------------------------------- <br>
    nama petugas : << riza>> <br>
        ------------------------------- <br>
</body>

</html>
<?php
echo "<br>Nama Peserta : $peserta";
echo "<br> Pilihan Paket Kurus : $paket";
echo "<br>pilihan waktu kursus : $waktu";


if ($paket == "Web Programming") {
    echo "<br>Jumlah Yang Harus Dibayar : " . $jumlah = "Rp.4200000";
} elseif ($paket == "Java") {
    echo "<br>Jumlah Yang Harus Dibayar : " . $jumlah = "Rp.3100000";
} elseif ($paket == "Mobile Programming") {
    echo "<br>Jumlah Yang Harus Dibayar : " . $jumlah = "Rp.3800000";
} elseif ($paket == "Phyton") {
    echo "<br>Jumlah Yang Harus Dibayar : " . $jumlah = "Rp.3800000";
}
