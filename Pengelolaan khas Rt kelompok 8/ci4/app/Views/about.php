<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <title><?= $title; ?></title>
</head>
<body>
<?= $this->include('template/header_view'); ?>
<div class="container pt-5">
<h1><?= $title; ?></h1>
<hr>
<div class="container pt-5">
<p><?= $content; ?></p>
<br>
<div class="row">
<div class="container">
     <br>
                <img src="kelompok.png" title="M. AKMAL AL ABDILAH" alt="M. AKMAL AL ABDILAH" class="image" width="150" style="float: left; border: 2px solid black;">
                <br>
                <div class="container pt-4">
                <center><h1>KELOMPOK 8</h1></center>
                <center><p>Mahasiswa Teknik Informatika <strong>Universitas Pelita Bangsa</strong> 
                Kelas : T1.21.A.1.
                Tugas Pemograman Web 2.
                </p></center>
            </div>
            <br>
<?= $this->include('template/footer_view'); ?>
</body>
</html>