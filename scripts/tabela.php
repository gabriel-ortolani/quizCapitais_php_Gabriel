<?php
    include("conexao.php");
    $placar = $conn->query("SELECT usuario, pontuacao FROM pontuacao");
?>
<div class="tabela">
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Pontuação</th>
            </tr>
        </thead>
        <?php while ($row = $placar->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['usuario']; ?></td>
            <td><?php echo $row['pontuacao']; ?></td> 
        </tr>
        <?php endwhile; ?>
    </table>
    <a href="../index.php">Voltar</a>
</div>