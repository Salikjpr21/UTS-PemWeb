<?php    
    session_start();
?>
<?php

echo "Hallo " .$_SESSION['name']. ", Selamat jawaban anda benar!!!";
echo "<br>";
echo "Lives: " .$_SESSION['lives']. " | Score: " .$_SESSION["score"];
echo "<br>";
echo "<a href='soal.php'>[Soal berikutnya]</a>";

?>