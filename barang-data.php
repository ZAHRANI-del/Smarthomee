<h3> Data Barang </h3>

<table border="1">
    <tr>
        <th>No</th>
        <th>id</th>
        <th>Tools</th>
        <th>Status</th>
    </tr>

    <?php

    include "koneksi.php";
    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from sensor");
    while ($tampil = mysqli_fetch_array($ambildata)){
        echo"
        <tr>
            <td>$no</td>
            <td>$tampil[id]</td>
            <td>$tampil[tools]</td>
            <td>$tampil[status]</td>
        </tr>";

        $no++;
    }
    ?>
</table>