<?php
include 'koneksi.php';
$id = $_POST['id'];
$status = $_POST['status'];
 
echo "$id $status";
if ($status == "off") {
    $status = "on";
    // Mempersiapkan dan menjalankan query
    $stmt = $koneksi->prepare("UPDATE sensor SET status=? WHERE id=?");
    $stmt->bind_param("si", $status, $id);
    $stmt->execute();

}elseif ($status == "on") {
    $status = "off";
    // Mempersiapkan dan menjalankan query
    $stmt = $koneksi->prepare("UPDATE sensor SET status=? WHERE id=?");
    $stmt->bind_param("si", $status, $id);
    $stmt->execute();
}
 
header("location:led.php?pesan=update");
?>