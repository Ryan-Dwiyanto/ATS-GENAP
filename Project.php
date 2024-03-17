<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banding Nilai</title>
    <link rel="stylesheet" href="Style/style.css">
    <style>
        .Perbandingan{
            margin-top: <?php  if ($_SERVER["REQUEST_METHOD"] == "POST") { echo "0px";} else {echo "85px";} ?> ;
            font-size: <?php  if ($_SERVER["REQUEST_METHOD"] == "POST") { echo "16px";} else {echo "24px";} ?>;
        }
        @media screen and (max-width: 700px){
            form {
                margin-top: <?php  if ($_SERVER["REQUEST_METHOD"] == "POST") { echo '0px'; } else { echo '37px';} ?>;
            }
            .Perbandingan {
                margin-top: <?php  if ($_SERVER["REQUEST_METHOD"] == "POST") { echo "0px";} else {echo "95px";} ?> ;
            }
        }
    </style>
</head>
<body>
    <div class="Box">
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $Bila1 = $_POST["Bila1"];
            $Bila2 = $_POST["Bila2"];
            $Perbandingan = "";
            $Deskripsi = "";
            if ($Bila1 > $Bila2 ) {
                $Perbandingan = ">" ;
                $Deskripsi = " lebih besar dari ";
            } elseif ($Bila1 < $Bila2) {
                $Perbandingan = "<" ;
                $Deskripsi = " lebih kecil dari ";
            } else {
                $Perbandingan = "=" ;
                $Deskripsi = " sama dengan ";
            }
        }
    ?>
    <div class="Box-text1">
        <h1 class="Symbol"><?php if($_SERVER["REQUEST_METHOD"] == "POST") {echo $Perbandingan;}; ?></h1>
        <h1 class="Deskripsi"><?php if($_SERVER["REQUEST_METHOD"] == "POST") {echo $Bila1 . $Deskripsi . $Bila2;}; ?></h1>
        <div class="Perbandingan">
            <p>Cek Perbandingan Angka</p>
        </div>
    </div>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <input type="number" name="Bila1" placeholder="Bilangan 1" required>
        <input type="number" name="Bila2" placeholder="Bilangan 2" required>
        <br>
        <input type="submit" value="Kirim">
    </form>
</div>
</body>
</html>