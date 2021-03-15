<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przychodnia</title>
    <link rel="stylesheet" href="przychodnia.css">
</head>
<body>
<header><h1>PRAKTYKA LEKARZA RODZINNEGO</h1> </header>
<div class="main">
<!--PIERWSZY-->
    <article>
        <h3>LISTA PACJENTÓW</h3>
        <!-- -->
        <br> <br>
        <form action="pacjent.php" method="POST" name="formular">
            <input name="id_pacjenta" type="number"> <button>Pokaż dane</button>
        </form> 
        <h3>LEKARZE</h3> 
        <ul>
            <li>pn-śr
            <ol>
                <li>Anna Kwiatkowska</li>
                <li>Jan Kowalewski</li>
            </ol>
            </li>
            <li>czw-pt
            <ol>
                <li>Krzysztof Nowak</li>
            </ol>
            </li>
        </ul>
    </article>
<!--DRUGI-->
    <article>
        <h2>INFORMACJE SZCZEGÓŁOWE O PACJENCIE</h2>
        <!--SKRYPT-->

        <?php
            $connect = mysqli_connect('localhost', 'root', '', 'przychodnia');
            $id = $_POST['id_pacjenta'];
            $sql = "SELECT imie, nazwisko, choroby_przewlekle, uczulenia FROM pacjenci where id = $id";
            $result = mysqli_query($connect, $sql);
            while($wiersz = mysqli_fetch_assoc($result)){
                echo '<p>Imię i nazwisko : '.$wiersz['imie'].' '.$wiersz['nazwisko'].'</p>'.'<br>';
                echo '<p>Choroby przewlekłe : '.$wiersz['choroby_przewlekle'].'</p>'.'<br>';
                echo '<p>Uczulenia: '.$wiersz['uczulenia'].'</p>';
            }
            mysqli_close($connect);
        ?>

    </article>
</div>
<footer>
    <p>utworzone przez: 00000000000</p>
    <a href="kwerendy.txt">Pobierz plik z kwerendami</a>
</footer>
</body>
</html>