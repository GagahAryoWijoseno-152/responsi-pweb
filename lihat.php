<?php 

echo "<head><title>Buku Pendaftaran</title></head>";
$fp = fopen("guestbook.txt", "r");
echo("<center><h1>DAFTAR NAMA TEAM YANG SUDAH TERDAFTAR</h1>");
echo ("<a href='kalender.html'>::Klik Jika Ingin Melihat Jadwal Turnamen Di Laksanakan::</a><br><hr>");
echo ("<a href='tampilan.php'>::Isi Buku Pendaftaran::</a><br><hr>");
echo "<table border='1' width='70%' style='text-align: center;'>";
echo("<tr><td>Tanggal Daftar</td><td>Nama Team</td><td>Email</td><td>Asal</td><td>Status</td><td>Kritik Dan Saran</td></tr>");
$tanggal=date("d-m-Y");
while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);
    echo("<tr><td>$tanggal</td><td>$pisah[0]</td><td>$pisah[2]</td><td>$pisah[1]</td><td>$pisah[3]</td><td>$pisah[4]</td></tr>");
    // echo "<tr><td>Nama: </td><td>: $pisah[0] </td></tr>";
    // echo "<tr><td>Alamat: </td><td>: $pisah[1] </td></tr>";
    // echo "<tr><td>Email: </td><td>: $pisah[2] </td></tr>";
    // echo "<tr><td>Status: </td><td>: $pisah[3] </td></tr>";
    // echo "<tr><td>Komentar: </td><td>: $pisah[4] </td></tr>";
    // echo "<tr><td><br></td><td><br></td></tr>";
}

echo "</table></center>";
?>


    
    
    
    
    



