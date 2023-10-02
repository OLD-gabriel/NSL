<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "dados";
$nometutor = "";

$conn = new mysqli($host, $user, $password, $db);
 
function getMinVagas($conn, $tabela) {
    $sql = "SELECT MIN(vagas) AS vagas_disponiveis FROM $tabela";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    return ($row['vagas_disponiveis'] !== NULL) ? $row['vagas_disponiveis'] : 15;
}

$vagas_alex = getMinVagas($conn, 'alex');
$vagas_vania = getMinVagas($conn, 'vania');
$vagas_pedro = getMinVagas($conn, 'pedro');
$vagas_maikon = getMinVagas($conn, 'maikon');
$vagas_devilson = getMinVagas($conn, 'devilson');
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Gestor | Nsl</title>
    <link rel="shortcut icon" href="img/favicon (3).ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style-GST.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;800&display=swap" rel="stylesheet">

</head>

<body>
    <header class="header-bg">
        <div class="header">
            <img class="header-brazao" src="img/Imagem3.png" alt="Brazao">
            <div class="header-menu">
                <a href="#" class="nome">
                    ADMINISTRADOR
                </a>
                <img class="user" src="img/Imagem1.svg" alt="User">
            </div>
        </div>
    </header>

    <main class="tutor">
        <form action="" method="post">
    <div id="alex_v" class="tutores">
            <img src="img/avatar.png" alt="" class="">
            <span class="nome-tutor">Alex Menezes<br>
            vagas:
            <?php echo $vagas_alex?>
            </span>
            <form action="" method="post">
                <button type="submit" class="botao-ver" name="alex">Ver alunos</button>
            </form>
        </div>

        <div id="alex_v" class="tutores">
            <img src="img/avatar.png" alt="" class="">
            <span class="nome-tutor">Devilson <br>
            vagas:
            <?php echo $vagas_devilson?>

            </span>
            <form action="" method="post">
                <button type="submit" class="botao-ver" name="devilson">Ver alunos</button>
            </form>
        </div>

        <div id="alex_v" class="tutores">
            <img src="img/avatar.png" alt="" class="">
            <span class="nome-tutor">Vânia Alves <br>
            vagas:
            <?php echo $vagas_vania?>
            </span>
            <form action="" method="post">
                <button type="submit" class="botao-ver" name="vania">Ver alunos</button>
            </form>
        </div>

        <div id="alex_v" class="tutores">
            <img src="img/avatar.png" alt="" class="">
            <span class="nome-tutor">Maikon <br>
            vagas:
            <?php echo $vagas_maikon?>
            </span>
            <form action="" method="post">
                <button type="submit" class="botao-ver" name="maikon">Ver alunos</button>
            </form>
        </div>

        <div id="alex_v" class="tutores">
            <img src="img/avatar.png" alt="" class="">
            <span class="nome-tutor">pedro <br>
            vagas:
            <?php echo $vagas_pedro?>
            </span>
            <form action="" method="post">
                <button type="submit" class="botao-ver" name="pedro">Ver alunos</button>
            </form>
        </div>
        </form>


    </main>

<?php 

    if(isset($_POST['alex'])){
        $nome =  base64_encode("alex");
        $url = "tutorandos.php?nome=" . urldecode($nome);
        header("location: $url");
    }
    if(isset($_POST['pedro'])){
        $nome = base64_encode("pedro");
        $url = "tutorandos.php?nome=" . urldecode($nome);
        header("location: $url");
    }
    if(isset($_POST['devilson'])){
        $nome = base64_encode("devilson");
        $url = "tutorandos.php?nome=" . urldecode($nome);
        header("location: $url");
    }
    if(isset($_POST['maikon'])){
        $nome = base64_encode("maikon");
        $url = "tutorandos.php?nome=" . urldecode($nome);
        header("location: $url");
    }
    if(isset($_POST['vania'])){
        $nome = base64_encode("vania");
        $url = "tutorandos.php?nome=" . urldecode($nome);
        header("location: $url");
    }

?>
</body>

</html>