<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <ul>
            <li>Pobierz:</li>
                <li><a href="skrypt.rar">skrypt.php,</a></li>
                <li><a href="css.rar">arkusz.css</a></li>
                <!-- Pakuje css do rara i dajesz -->
            </ul>
        </div>
        <div class="left-content">
            <?php

               
                if(isset($_POST['a'], $_POST['b'], $_POST['c'])){
                    $a = $_POST['a'];
                    $b = $_POST['b'];
                    $c = $_POST['c'];


                    if($a > $b && $a > $c ){
                        echo 'A najwieksze';
                    }else if($b > $c){
                        echo 'B najwieksze';
                    }else {
                        echo 'C najwieksze';
                    }

                    // Sprawdzanie trojkata to if(a + b > c) itp 
                    // a dalej nie wiem co trzeba

                }else {
                    echo 'Brak danych';
                }

              


            ?>
        </div>
        <div class="right-content">
            <ul>
                <li><a href="index.html">START</a></li>
                <li><a href="index.php">SKRYPT</a></li>
                <li><a href="info.html">INFO</a></li>
            </ul>
        </div>
        <div class="footer">
            <p>Wykonał: jakiś ziomal z 420G </p>
        </div>
    </div>
</body>
</html>