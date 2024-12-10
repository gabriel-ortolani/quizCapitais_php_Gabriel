<?php
    $total_question = $_SESSION['game']['total_questions'];
    $correct_answers = $_SESSION['game']['correct_answers'];
    $incorrect_answers = $_SESSION['game']['incorrect_answers'];

    $pontuacao = $correct_answers;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Captura os dados do formulário
        $nome = $_POST['usuario'];

        $sql = "INSERT INTO pontuacao (usuario, pontuacao) 
        VALUES ('$nome', '$pontuacao')";

        if ($conn->query($sql) !== TRUE) {
            $mensagem = "Erro:" . $conn->error;
        }
    }
    
?>

<!-- Início do código HTML para exibir os resultados finais do jogo -->
<div class="result-container">   
   <h1>Quiz das capitais</h1>
   <hr>

   <h3>Total de questões: <strong class="result-value"><?=$total_question ?></strong></h3>

   <h3>Respostas corretas: <strong class="result_value"><?= $correct_answers ?></strong></h3>

   <h3>Respostas erradas: <strong class="result_value"><?= $incorrect_answers ?></strong></h3>

   <div>
        <a href="index.php?route=start" class="btn btn-secondary p-3 w-50">Jogar Novamente</a>
   </div>
</div>
<div class="form">
    <form method="post">
        <h3>Desejá salvar seu resultado?</h3>

        <label for="nome">Nome de Usuario:</label><br>
        <input type="text" name="usuario"><br>

        <label for="pontuacao">Sua Pontuação:</label><br>
        <?php echo "$pontuacao" ?><br>

        <button type="submit" class="btn btn-secondary p-3 w-50">salvar pontução</button>
    </form>
</div>
