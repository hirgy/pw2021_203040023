<?php
/*
Muhammad Rhyamizard Hirgy
203040023
https://github.com/hirgy/pw2021_203040023
Pertemuan 3 - 18 Februari 2021
Mempelajari tentang Pengulangan
*/
?>
<?php 
// Date
// Untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
// echo time();
// echo date("l", time()-60*60*24*100);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,8,25,1985));


/*
    Nama : Muhammad Rhyamizard Hirgy
    NRP : 203040023
    Kelas A
    Pertemuan ke 4
*/


// strtotime
echo date("l", strtotime("25 aug 1985"));

?>