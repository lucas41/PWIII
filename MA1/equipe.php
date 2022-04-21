<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../MA1/css/style.css" rel="stylesheet">
</head>

<body>

    <?php

    include('equipe_class.php');

    $lucas = new equipe('lucas', 21, 'delfini.lucas@hotmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vehicula pretium convallis. Suspendisse feugiat aliquet mauris, in porttitor velit bibendum eu. Fusce nec vehicula nunc.');
    $herica = new equipe('herica', 20, 'email@email', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vehicula pretium convallis. Suspendisse feugiat aliquet mauris, in porttitor velit bibendum eu. Fusce nec vehicula nunc. ');
    $Ikaro = new equipe('Ikaro', 22, 'ikaro@ikaro', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vehicula pretium convallis. Suspendisse feugiat aliquet mauris, in porttitor velit bibendum eu. Fusce nec vehicula nunc.');
    $Gabriel = new equipe('Gabe', 22, 'gabe@gabe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vehicula pretium convallis. Suspendisse feugiat aliquet mauris, in porttitor velit bibendum eu. Fusce nec vehicula nunc. ');
    $Carlos = new equipe('Carlos', 21, 'carlos@carlos', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vehicula pretium convallis. Suspendisse feugiat aliquet mauris, in porttitor velit bibendum eu. Fusce nec vehicula nunc.');

    ?>
    <center>
    <div style="margin-top: 50px">
    <h1> Menbros da equipe </h1>
    <p> Esses são os menbros de nossa equipe </p>
    </div>
    </center>

    <center>
    <section>
    <div style="width: 2000px; margin-top: 100px">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="img/lucas.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $lucas->nome; ?></h3>
                        <h5 class="card-title"><?php echo $herica->idade; ?> Anos </h5>
                        <p class="card-text"><?php echo $herica->descricao; ?></p>
                        <a href="#" class="btn btn-primary"><?php echo $herica->email; ?></a>
                    </div>
                </div>
            </div>
            <div class="col">
            <div class="card" style="width: 18rem;">
                    <img src="img/ikaro.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $Ikaro->nome; ?></h3>
                        <h5 class="card-title"><?php echo $Ikaro->idade; ?> Anos </h5>
                        <p class="card-text"><?php echo $Ikaro->descricao; ?></p>
                        <a href="#" class="btn btn-primary"><?php echo $Ikaro->email; ?></a>
                    </div>
                </div>
            </div>
            <div class="col">
                        <div class="card" style="width: 18rem;">
                    <img src="img/gabe.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $Gabriel->nome; ?></h3>
                        <h5 class="card-title"><?php echo $Gabriel->idade; ?> Anos </h5>
                        <p class="card-text"><?php echo $Gabriel->descricao; ?></p>
                        <a href="#" class="btn btn-primary"><?php echo $Gabriel->email; ?></a>
                    </div>
                </div>
            </div>
            <div class="col">
            <div class="card" style="width: 18rem;">
                    <img src="img/carlinhos.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $Carlos->nome; ?></h3>
                        <h5 class="card-title"><?php echo $Carlos->idade; ?> Anos </h5>
                        <p class="card-text"><?php echo $Carlos->descricao; ?></p>
                        <a href="#" class="btn btn-primary"><?php echo $Carlos->email; ?></a>
                    </div>
                </div>
            </div>
            <div class="col">
            <div class="card" style="width: 18rem;">
                    <img src="img/herica.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $herica->nome; ?></h3>
                        <h5 class="card-title"><?php echo $herica->idade; ?> Anos </h5>
                        <p class="card-text"><?php echo $herica->descricao; ?></p>
                        <a href="#" class="btn btn-primary"><?php echo $herica->email; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    </center>

    <div style="text-align: left; margin-top: 40px; margin-left: 300px">
            <a href="index.html" type="button" class="btn btn-primary"> Voltar </a>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>