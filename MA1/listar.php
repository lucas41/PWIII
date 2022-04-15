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
    
<div class="container" style="margin-top: 40px">

<h1> Ultimas denuncias enviadas </h1>

<table class="table" style="margin-top: 40px">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">Nome Colaborador</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mensagem</th>

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
                </tr>

            <?php
            }
            ?>

        </table>

        <div style="text-align: left; margin-top: 40px">
            <a href="contato.php" type="button" class="btn btn-primary"> Voltar </a>
        </div>
</div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>