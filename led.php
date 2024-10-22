
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="layouts">
        <section class="navbar">
            <h3>SMARTHOME</h3>
        </section>
        <section class="leds">
        <?php
            include "koneksi.php";
            $no = 0;
            $ambildata = mysqli_query($koneksi,"select * from sensor");
            $gambar = array("assets/led-off.png", "assets/led-off.png", "assets/fan.png", "assets/servo.png","assets/buzzer.png"); 
            $id_elemen = array("dapurLedImage","tamuLedImage");
            $warna = '#1e4355';            
            $id = array("ledDapur","ledtamu");

            while ($data = mysqli_fetch_array($ambildata)){
                if ($data['status'] == "off") {
                    $warna = '#f5372a';
                
                }elseif ($data['status'] == "on") {
                    $warna = '#1e4355';
                }

                    
                    echo "
                    <div class='led'>
                        <img src='$gambar[$no]' class='led-image' id='$id_elemen[0]'/>
                        <form action='ubah.php' method='post'>		
                            <input type='hidden' name='id' value='$data[id]'>
                            <input type='hidden' name='status' value='$data[status]'>
                            <input type='submit' value='TURN $data[status]' style='padding: 10px 50px 10px 50px;background-color: $warna;' class='led-submit' id='$id[0]'>
                        </form>
                    </div>
                    ";
                $no++;
            }
            // var_dump($data);
        ?>
        </section>
        <section class="bottombar">
            <ul>
                <li>
                    <a href="/"><i class="fa-solid fa-home"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa-solid fa-lightbulb"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa-solid fa-fan"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa-solid fa-user"></i></a>
                </li>
            </ul>
        </section>    
    </div>
    
    <script src="main.js"></script>
</body>
</html>