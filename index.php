<!DOCTYPE html>
    <html>
            <head>
                
                <meta charset = "UTF-8" />
                <title> Teste</title>
                <link rel=" stylesheet" href="style.css"/>

            </head>
<?php
require 'config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM usuarios");
if($sql->rowCount() > 0 ) {
    $lista = $sql ->fetchAll(PDO::FETCH_ASSOC);
}
?>



<a div  class = "link" href="adicionar.php">ADICIONAR USUÁRIO</a>
    <div class = "tabl">
    <table border="1px" ;>
        <tr>
            <td>NOME</td>
            <td>SENHA</td>
            <td>NOME DA MÃE</td>
            <td>E-MAIL</td>
            <td>AÇÃO</td>
            
        </tr>

        <?php foreach ($lista AS $usuarios): ?>
    <tr>
        <td><?=$usuarios['name'];?></td>
        <td><?=$usuarios['senha'];?></td>
        <td><?=$usuarios['namemae'];?></td>
        <td><?=$usuarios['email'];?></td>
        <td>
        <div class = "bot">    
        <a href="editar.php?id=<?=$usuarios['id'];?>"> EDITAR  </a>
            <a href="excluir.php?id=<?=$usuarios['id'];?>"> EXCLUIR  </a>
            </div>

        </td>
    </tr>
        </div>

    <?php endforeach; ?>


</table>

</html>

















