<?php

if (isset($_POST["cetak"])) {
    $nama = $_POST['nama'];
    $paket = $_POST["paket"];
    $semua = "";
    foreach ($_POST["paket"] as $press) {
        $semua = $semua . "<br>" . $press;
    }
    // if ($paket == 1) {
    //     $harga = 55000;
    // } else if ($paket == 2) {
    //     $harga = 4500;
    // }
    $waktu = $_POST['waktu'];



?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pendaftaran Kursus</title>
    </head>

    <body>
        <h1>LEMBAGA KURSUS KOMPUTER ANDA PASTI BISA</h1><br>
        ----------------------------------------------------------------- <br>
        nama petugas : << riza>> <br>
            ----------------------------------------------------------------- <br>
            nama peserta : <?php echo $nama ?> <br>
            pilihan paket Kursus : <?php echo $semua ?><br>
            pilihan waktu kursus : <?php echo $waktu ?> <br>
            ----------------------------------------------------------------- <br>
            total biaya kursus : <?php var_dump($harga)  ?>


    </body>

    </html>
<?php }
?>