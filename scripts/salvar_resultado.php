<?php
    $total_question = $_SESSION['game']['total_questions'];
    $correct_answers = $_SESSION['game']['correct_answers'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Captura os dados do formulário
        $nome = $_POST['usuario'];
    }
    $pontuacao = ["$correct_answers'/'$total_question"];
    $sql = "INSERT INTO pontuacao (usuario, pontuacao) 
    VALUES ('$nome', '$pontuacao')";
?>
<div class="form">
    <form action="salvar" method="post">

    <label for="nome">Nome de usuario</label><br>
    <input type="text" name="usuario"><br>

    <label for="pontuacao">Sua pontuação</label><br>
    <?php echo "$pontuacao" ?>

    <button type="submit">salvar pontução</button>
    </form>
</div>