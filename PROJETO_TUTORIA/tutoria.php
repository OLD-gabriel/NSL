<?php
$RA = $_GET['RA'];
$serie = $_GET['serie'];
$nome_aluno = $_GET['nome'];

$host = "localhost";
$user = "root";
$password = "";
$db = "dados";
$nometutor = "";

$conn = new mysqli($host, $user, $password, $db);
function getMinVagas($conn, $tabela)
{
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
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.TUT.css">
    <title>Escolha Tutoria</title>
    <meta http-equiv="refresh" content="30">
    <link rel="shortcut icon" href="img/favicon (3).ico" type="image/x-icon">
 
</head>

<body>
    <header class="header">
        <div class="brazao">
            <a href="../Tutoria-Eletiva.html"><img src="img/brazao.png" alt="Brazao" class="brazao"></a>
        </div>

        <div class="header-user">
            <a href="#" class="nome">
                <?php echo $nome_aluno . "<br>" . $serie; ?>
            </a>
            <img src="img/Imagem1.svg" alt="" class="user">
        </div>
    </header>
    <main class="tutor">

        <div id="alex_v" class="tutores">
            <img src="img/avatar.png" alt="" class="">
            <span class="nome-tutor">Alex Menezes <br>vagas:
                <?php

                if ($vagas_alex == NULL) {
                    echo 15;
                } else if ($vagas_alex == 0) {
                    echo "ESGOTADO!";
                } else {
                    echo $vagas_alex;
                }


                ?>
            </span>
            <form action="" method="post">
                <button type="submit" class="botao" name="alex">Escolher</button>
            </form>
        </div>

        <div id="vania_v" class="tutores">
            <img src="img/avatar.png" alt="" class="">
            <span class="nome-tutor">Vânia alves<br>vagas:
                <?php

                if ($vagas_vania == NULL) {
                    echo 15;
                } else if ($vagas_vania == 0) {
                    echo "ESGOTADO!";
                } else {
                    echo $vagas_vania;
                }


                ?>
            </span>
            <form action="" method="post">
                <button type="submit" class="botao" name="vania">Escolher</button>
            </form>
        </div>

        <div id="pedro_v" class="tutores">
            <img src="img/avatar.png" alt="" class="">
            <span class="nome-tutor">pedro<br>vagas:
                <?php

                if ($vagas_pedro == NULL) {
                    echo 15;
                } else if ($vagas_pedro == 0) {
                    echo "ESGOTADO!";
                } else {
                    echo $vagas_pedro;
                }


                ?>
            </span>
            <form action="" method="post">
                <button type="submit" class="botao" name="pedro">Escolher</button>
            </form>
        </div>

        <div id="devilson_v" class="tutores">
            <img src="img/avatar.png" alt="" class="">
            <span class="nome-tutor"> devilson<br>vagas:
                <?php

                if ($vagas_devilson == NULL) {
                    echo 15;
                } else if ($vagas_devilson == 0) {
                    echo "ESGOTADO!";
                } else {
                    echo $vagas_devilson;
                }


                ?>
            </span>
            <form action="" method="post">
                <button type="submit" class="botao" name="devilson">Escolher</button>
            </form>
        </div>

        <div id="maikon_v" class="tutores">
            <img src="img/avatar.png" alt="" class="">
            <span class="nome-tutor">maikon<br>vagas:
                <?php

                if ($vagas_maikon == NULL) {
                    echo 15;
                } else if ($vagas_maikon == 0) {
                    echo "ESGOTADO!";
                } else {
                    echo $vagas_maikon;
                }


                ?>
            </span>
            <form action="" method="post">
                <button type="submit" class="botao" name="maikon">Escolher</button>
            </form>
        </div>








        <div id="alex" class="tutores">
            <center>
                <img src="img/avatar.png" alt="" class="">
                <span class="nome-tutor">Alex Menezes <br>vagas:<br><br>
                    <?php

                    if ($vagas_alex == NULL) {
                        echo 15;
                    } else if ($vagas_alex == 0) {
                        echo "ESGOTADO!";
                    } else {
                        echo $vagas_alex;
                    }

                    ?>
                </span>

            </center>
        </div>

        <div id="vania" class="tutores">
            <center>
                <img src="img/avatar.png" alt="" class="">
                <span class="nome-tutor">Vânia alves<br>vagas:<br><br>
                    <?php
                    if ($vagas_vania == NULL) {
                        echo 15;
                    } else if ($vagas_vania == 0) {
                        echo "ESGOTADO!";
                    } else {
                        echo $vagas_vania;
                    }
                    ?>
                </span>

            </center>
        </div>

        <div id="pedro" class="tutores">
            <center>
                <img src="img/avatar.png" alt="" class="">
                <span class="nome-tutor">pedro<br>vagas:<br><br>
                    <?php
                    if ($vagas_pedro == NULL) {
                        echo 15;
                    } else if ($vagas_pedro == 0) {
                        echo "ESGOTADO!";
                    } else {
                        echo $vagas_pedro;
                    }
                    ?>
                </span>

            </center>
        </div>

        <div id="devilson" class="tutores">
            <center>
                <img src="img/avatar.png" alt="" class="">
                <span class="nome-tutor"> devilson<br>vagas:<br><br>
                    <?php
                    if ($vagas_devilson == NULL) {
                        echo 15;
                    } else if ($vagas_devilson == 0) {
                        echo "ESGOTADO!";
                    } else {
                        echo $vagas_devilson;
                    }
                    ?>
                </span>

            </center>
        </div>

        <div id="maikon" class="tutores">
            <center>
                <img src="img/avatar.png" alt="" class="">
                <span class="nome-tutor">maikon<br>vagas:<br><br>
                    <?php
                    if ($vagas_maikon == NULL) {
                        echo 15;
                    } else if ($vagas_maikon == 0) {
                        echo "ESGOTADO!";
                    } else {
                        echo $vagas_maikon;
                    }
                    ?>
                </span>

            </center>
        </div>




    </main>
    <!-- Pop-up -->
    <div id="sobreposicao-popup">
        <div id="conteudo-popup">
            <h2 style="padding:5px;">CONFIRMADO!</h2>
            <p>Você selecionou tutor com <br> sucesso!</p>
            <div class="botoes">
                <button id="fechar-popup">Fechar</button>
            </div>
        </div>
    </div>

    <!-- Pop-up -->
    <div id="sobreposicao-popup2">
        <div id="conteudo-popup">
            <h2 style="padding:5px;">Erro!</h2>
            <p>Ocorreu um erro ao inserir registro! <br><br> Talvez você já tenha selecionado o tutor! <br> </p>
            <div class="botoes">
                <button id="fechar-popup2">Fechar</button>
            </div>
        </div>
    </div>

    <!-- Pop-up -->
    <div id="sobreposicao-popup3">
        <div id="conteudo-popup">
            <h2 style="padding:5px;">Erro!</h2>
            <p>Esse tutor atingiu o limite de vagas! <br> </p>
            <div class="botoes">
                <button id="fechar-popup3">Fechar</button>
            </div>
        </div>
    </div>

    <script>
        const botaoFecharPopup = document.getElementById('fechar-popup');
        const botaoFecharPopup2 = document.getElementById('fechar-popup2');
        const sobreposicaoPopup = document.getElementById('sobreposicao-popup');
        const sobreposicaoPopup2 = document.getElementById('sobreposicao-popup2');
        const botaoFecharPopup3 = document.getElementById('fechar-popup3');
        const sobreposicaoPopup3 = document.getElementById('sobreposicao-popup3');

        function fecharPopup() {
            sobreposicaoPopup.style.display = 'none';
        }

        function fecharPopup2() {
            sobreposicaoPopup2.style.display = 'none';
        }

        function fecharPopup3() {
            sobreposicaoPopup3.style.display = 'none';
        }

        function mostrarPopup() {
            sobreposicaoPopup.style.display = 'block';
        }

        function mostrarPopup2() {
            sobreposicaoPopup2.style.display = 'block';
        }

        function mostrarPopup3() {
            sobreposicaoPopup3.style.display = 'block';
        }

        botaoFecharPopup.addEventListener('click', fecharPopup);
        botaoFecharPopup2.addEventListener('click', fecharPopup2);
        botaoFecharPopup3.addEventListener('click', fecharPopup3);

        function esgotado_alex() {
            box_v = document.getElementById("alex_v");
            box = document.getElementById("alex");
            box.style.display = "block";
            box_v.style.display = "none";
        }

        function esgotado_vania() {
            box_v = document.getElementById("vania_v");
            box = document.getElementById("vania");
            box.style.display = "block";
            box_v.style.display = "none";
        }

        function esgotado_pedro() {
            box_v = document.getElementById("pedro_v");
            box = document.getElementById("pedro");
            box.style.display = "block";
            box_v.style.display = "none";
        }

        function esgotado_devilson() {
            box_v = document.getElementById("devilson_v");
            box = document.getElementById("devilson");
            box.style.display = "block";
            box_v.style.display = "none";
        }

        function esgotado_maikon() {
            box_v = document.getElementById("maikon_v");
            box = document.getElementById("maikon");
            box.style.display = "block";
            box_v.style.display = "none";
        }
    </script>

    <?php
    if ($vagas_alex == 0) {
        echo "<script>esgotado_alex()</script>";
    }
    if ($vagas_vania == 0) {
        echo "<script>esgotado_vania()</script>";
    }
    if ($vagas_pedro == 0) {
        echo "<script>esgotado_pedro()</script>";
    }
    if ($vagas_devilson == 0) {
        echo "<script>esgotado_devilson()</script>";
    }
    if ($vagas_maikon == 0) {
        echo "<script>esgotado_maikon()</script>";
    }


    function escolherTutor($conn, $nometutor, $nome_tabela, $nome_aluno, $serie, $RA)
    {
        // Consulta para pegar o número de vagas disponíveis                                                                    
        $sql = "SELECT MIN(vagas) AS vagas_disponiveis FROM $nome_tabela";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $vagas = $row['vagas_disponiveis'];
        if ($vagas === null) {
            $vagas = 15;
        }
        if ($vagas > 0) {
            $vagas = $vagas - 1;

            // Inserir a escolha do aluno no banco de dados
            // Inserir a escolha do aluno na tabela correspondente
            $sql_inserir = "INSERT INTO $nome_tabela (nome_tutor, nome_aluno, serie, ra, vagas) VALUES ('$nometutor', '$nome_aluno', '$serie', '$RA', '$vagas')";

            try {
                if ($conn->query($sql_inserir) === TRUE) {
                    $vagas_disponiveis = getMinVagas($conn, $nome_tabela);
                    // Inserir os dados na tabela "tudo"
                    $sql_tudo = "INSERT INTO tudo (nome_tutor, nome_aluno, ra_aluno, serie) VALUES ('$nometutor', '$nome_aluno', '$RA', '$serie')";
                    if ($conn->query($sql_tudo) === TRUE) {
                        echo "<script>mostrarPopup()</script>";
                        exit();
                    } else {
                        echo "<script>mostrarPopup2()</script>";
                    }
                }
            } catch (mysqli_sql_exception $e) {
                // Erro de chave primária duplicada, exibir pop-up de erro
                echo "<script>mostrarPopup2()</script>";
            }
        } else {
            echo "<script>mostrarPopup3()</script>";
        }
    }

    if (isset($_POST["alex"])) {
        $nometutor = "Alex Menezes";
        $nome_tabela = "alex";
        escolherTutor($conn, $nometutor, $nome_tabela,$nome_aluno, $serie, $RA);
    }
    if (isset($_POST["vania"])) {
        $nometutor = "Vânia Alves";
        $nome_tabela = "vania";
        escolherTutor($conn, $nometutor, $nome_tabela,$nome_aluno, $serie, $RA);
    } 
    if (isset($_POST["pedro"])) {
        $nometutor = "Pedro Leonan";
        $nome_tabela = "pedro";
        escolherTutor($conn, $nometutor, $nome_tabela,$nome_aluno, $serie, $RA);
    } 
    if (isset($_POST["devilson"])) {
        $nometutor = "Devilson";
        $nome_tabela = "devilson";
        escolherTutor($conn, $nometutor, $nome_tabela,$nome_aluno, $serie, $RA);
    } 
    if (isset($_POST["maikon"])) {
        $nometutor = "Maikon";
        $nome_tabela = "maikon";
        escolherTutor($conn, $nometutor, $nome_tabela,$nome_aluno, $serie, $RA);
    }
    ?>
 
</body> 
</html>