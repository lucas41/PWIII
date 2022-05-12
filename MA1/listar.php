<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
<div class="container">
<table class="table" style="margin-top: 40px">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">Nome Colaborador</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mensagem</th>
                    <th scope="col">Opções</th>
                </tr>
            </thead>
            <?php
            include 'sql.php';
            $sql = "SELECT * FROM `colaboradores`";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {
                $id = $array['id'];
                $nome = $array['nome'];
                $email = $array['email'];
                $msg = $array['msg'];
            ?>
                <tr style="text-align: center;">
                    <td> <?php echo $nome ?> </td>
                    <td> <?php echo $email ?> </td>
                    <td> <?php echo $msg ?> </td>
                    <td> <a class="btn btn-warning btn-sm" style="color:white" href="editar_categoria.php?id=<?php echo $id_categoria ?>" role="button"><i class="fa-solid fa-pen-to-square"></i> Editar </a>
                        <a class="btn btn-danger btn-sm" onclick="alerta()" style="color:white" href="deletar_categoria.php?id=<?php echo $id_categoria ?>" role="button"><i class="fa-solid fa-trash"></i> Excluir </a>
                    </td>
                </tr>

            <?php
            }
            ?>

        </table>

        <div style="text-align: left">
              <a href="contato.php" type="button" > Voltar </a>
        </div>
</div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>