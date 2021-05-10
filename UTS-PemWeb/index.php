<?php
session_start();
$_SESSION["score"] = 0;
$_SESSION["lives"] = 5;

if (isset($_SESSION["email"])) {
    ?>
    <h5>Hallo <?php echo $_SESSION["name"];?>, selamat datang kembali di permainan ini!</h5>
    <a href="soal.php">Main lagi</a>
    <h5>Bukan Anda? <a href="looping.php"> Klik disini</h5></a>
<?php
} else {
?>
    <form action="soal.php" method="POST">
        <h1> Sebelum Main, Daftar dulu yuk!! </h1>
        <label>Nama</label>
        <input type="text" name="nama" id="name" placeholder="Masukkan Nama">
        <br></br>
        <label>Email</label>
        <input type="text" name="email" id="email" placeholder="Masukkan Email">
        <br></br>
        <button type="submit" name="mulai">Mulai Main</button>
    </form>
<?php
}
?>