<!DOCTYPE HTML>
<html>
<head>
    <title>Kamen Škare Papir</title>
    <meta charset="UTF-8">
    <style>
        body {
            margin: 20px;
            font-family: Arial, sans-serif;
        }
        .btn {
            padding: 10px 20px;
            margin: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .result {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php

    mb_internal_encoding("UTF-8");

    $ksp = $_POST['ksp'] ?? '';
    $random = rand(1, 3);
    $korisnikPotez = 0;
    $potezKompjutera = '';


    switch ($ksp) {
        case "Kamen":
            $korisnikPotez = 1;
            break;
        case "Škare":
            $korisnikPotez = 2;
            break;
        case "Papir":
            $korisnikPotez = 3;
            break;
    }


    echo '<h2>Kamen, Škare, Papir</h2>
    <form method="post">
        <label>Odaberite potez:</label><br><br>
        <input type="submit" name="ksp" value="Kamen" class="btn">
        <input type="submit" name="ksp" value="Škare" class="btn">
        <input type="submit" name="ksp" value="Papir" class="btn">
    </form>';

    if ($korisnikPotez) {
        echo '<div class="result">';


        if ($korisnikPotez == $random) {
            echo 'Rezultat: Neriješeno! Oba ste odabrali isto.';
        } elseif (
            ($korisnikPotez == 1 && $random == 2) ||
            ($korisnikPotez == 2 && $random == 3) ||
            ($korisnikPotez == 3 && $random == 1)
        ) {
            echo 'Rezultat: Pobijedili ste!';
        } else {
            echo 'Rezultat: Kompjuter pobjeđuje!';
        }

        switch ($random) {
            case 1:
                $potezKompjutera = 'Kamen';
                break;
            case 2:
                $potezKompjutera = 'Škare';
                break;
            case 3:
                $potezKompjutera = 'Papir';
                break;
        }

        echo '<br>Kompjuter je odabrao: <strong>' . $potezKompjutera . '</strong>';
        echo '</div>';
    }
?>

</body>
</html>
