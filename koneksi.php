<?php

$koneksi = mysqli_connect('localhost','root','','smarthome');
if($koneksi == false){
    echo "Tidak ada Koneksi Database";
}

?>