<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../MA1/css/style.css"  rel="stylesheet" >
</head>
<body>
    
<?php
    session_start();
    if(isset($_SESSION['msg_error']) && !empty($_SESSION['msg_error'])){
        ?>
        <center>
        <P style="background-color: red; color:white; align-content:center"> <?php echo $_SESSION['msg_error'];?> </P>
        </center>
        <?php
    }


    if(isset($_SESSION['msg_sucess']) && !empty($_SESSION['msg_sucess'])){
        ?>
        <center>
        <P style="background-color: green; color:white; align-content:center"> <?php echo $_SESSION['msg_sucess'];?> </P>
        </center>
        <?php
    }
    session_destroy();
    ?>



    <div class="container" style="margin-top: 100px; margin-bottom: 50px;">
        <center>
        <h1> Entre em contato para denuncias de locais com indice de poulução</h1>
    
        <p> Enviaremos uma equipe ao local para verificar</p>
        </center>

        <br>
        <form method="post" action="contato_envia.php">
            <div class="row">
                <div class="col">
                    <div class="mb-6">
                        <label for="exampleInputEmail1" class="form-label">Nome</label>
                        <input type="text" class="form-control" autocomplete="off" required name="nome" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                </div>
                <div class="col">
                    <div class="mb-6">
                        <label for="exampleInputEmail1" class="form-label">E-mail</label>
                        <input type="email" autocomplete="off" required class="form-control" name="email"id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                </div>
              </div>
              <br>
              <div class="form-floating">
                <textarea class="form-control" id="floatingTextarea2"  autocomplete="off" required  name="msg"style="height: 300px"></textarea>
                <label>Deixe seu comentario aqui</label>
              </div>
              <br>
              <div style="text-align: left">
              <a href="index.html" type="button" class="btn btn-primary"> Voltar </a>

             
              </div>
              <div style="text-align: right">
                <button type="reset" class="btn btn-danger"> Apagar </button>
              <button type="submit" class="btn btn-primary"> Enviar </button>

              </div>

       


        </form>


    </div>
    <br>
    <section class="footer-site">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p class="text-center">todos os direitos reservados </p>
                </div>
            </div>
        </div>
   </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>