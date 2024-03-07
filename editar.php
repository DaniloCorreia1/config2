<!DOCTYPE html>
    <html>
            <head>
                
                <meta charset = "UTF-8" />
                <title> Teste</title>
                <link rel=" stylesheet" href="style.css"/>

            </head>
<?php
require 'config.php';

$info = [];
$id = filter_input(INPUT_GET, 'id');
if($id) {

    $sql = $pdo -> prepare("SELECT * FROM usuarios WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount() > 0 ) {
        $info = $sql ->fetch(PDO::FETCH_ASSOC);

    } else {

        header("Location: index.php");
        exit;
    }


} else {
    header("Location: index.php");
    exit;
}
?>

        
            <form method="POST" action="editar_action.php">
            <input type="hidden" name="id" value="<?=$info['id'];?>" />
                    <div class="tab">
                       
                    <h3><i><u>CADASTRO</u></i></h3>
                    
                    <label>
                        NOME :
                        <input type="text" name="name" value="<?=$info['name'];?>" /> 
                    </label><br/><br/>
                    <label>
                        SENHA :
                        <input type="text" name="senha"  value="<?=$info['senha'];?>" /> 
                    </label><br/><br/>
                    <label>
                        NOME DA MÃE :
                        <input type="text" name="namemae" value="<?=$info['namemae'];?>" />
                    </label><br/><br/>
                    <label>
                        E-MAIL :
                        <input type="email" name="email" value="<?=$info['email'];?>" />
                    </label><br/><br/>
                    

                    <button> ALTERAR </button>



                </div>
                </form>






            </body>
            </html>