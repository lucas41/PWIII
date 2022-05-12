<?php 

include('conexao.php');

$id = $_GET['id'];

$listar = $banco->prepare("select * from pessoas where id=?");
$listar->execute(array($id));
$linha = $listar->fetchAll(PDO::FETCH_OBJ); 

foreach($linha as $func){  //a cada linha, ele percorre o banco de dados (a partir doq vc fatiou)

    $id = $func->id;
    $nome = $func->nome;
    $email = $func->email;
  
?>  

<form method="post" action="atualiza.php">
            <div>
                <label>
                    Nome
                </label>
                <input type="text" class="form-control" name="nome" value="<?php echo $nome ?>">
            </div> <br>
            <div>
                <label>
                    E-mail
                </label>
                <input type="text" class="form-control" name="email" value="<?php echo $email ?>">
            </div>
            <input type="number" class="form-control" name="id" value="<?php echo $id?>" style="display: none">
            <div><br><br>
                <button type="submit">
                    Enviar
                </button><br>
            </div>
        </form>

  
  


<?php
}
?>