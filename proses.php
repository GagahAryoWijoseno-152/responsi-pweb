<?php 

$nama = $_POST['NamaTeam'];
$email = $_POST['email'];
$alamat = $_POST['Asal'];
$status = $_POST['Status'];
$komentar = $_POST['KritikDanSaran'];

echo "<head><title>Buku Pendaftaran</title></head>";
$fp = fopen("guestbook.txt", "a");
fputs($fp, "$nama|$alamat|$email|$status|$komentar\n");
fclose($fp);

header("Location: setelahProses.php");

?>



