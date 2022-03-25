<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>

<body>


    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper teal darken-1">
                <a href="#!" class="brand-logo">&nbsp; Ex 1 - aula </a>
            </div>
        </nav>
    </div>

    <?php
    session_start();
    if(isset($_SESSION['msg']) && !empty($_SESSION['msg'])){
        ?>
        <center>
        <P style="background-color: red; color:white; align-content:center"> <?php echo $_SESSION['msg'];?> </P>
        </center>
        <?php
    }
    session_destroy();
    ?>



    <div class="container" style="margin-top: 40px;">
        <div class="row">
            <form class="col s12" action="exercicio1.php" method="post" onsubmit="validar()">
                <div class="row">
                    <div class="input-field col s6">
                        <input name="nome" type="text" class="validate">
                        <label for="first_name">Nome</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="last_name" type="text" name="sobrenome" class="validate">
                        <label for="last_name">Sobrenome</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="ra" type="number" class="validate">
                        <label>RA</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <select name="curso">
                            <option selected value="#"> Escolha um curso</option>
                            <option value="SI">SI</option>
                            <option value="ADM">ADM</option>
                            <option value="Odontologia">Odontologia</option>
                        </select>
                        <label>Selecione seu curso</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="ma1" name="ma1" type="number" class="validate">
                        <label for="first_name">ma1</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="mb1" type="number" name="mb1" class="validate">
                        <label for="last_name">mb1</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input name="p1" id="p1" type="number" class="validate">
                        <label>Nota P1</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <input id="ma2" name="ma2" type="number" class="validate">
                        <label for="first_name">ma2</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="mb2" type="number" name="mb2" class="validate">
                        <label for="last_name">mb2</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input name="p2" id="p2" type="number" class="validate">
                        <label>Nota P2</label>
                    </div>
                </div>

                <div class="row">
                    
                    <div class="input-field col s3">
                      
                        <select name="bonus">
                            <option value="nao">não</option>
                            <option value="sim">sim</option>    
                        </select>

                        <label> Possui bonus: </label>
                    </div>

                    <div class="input-field col s2">
                        <input name="presenca" type="number" class="validate">
                        <label>Insira sua presença %</label>
                    </div>

                    &nbsp; &nbsp;
                    <br>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                        <i class="material-icons right"></i>
                    </button>
                    <button class="btn waves-effect red darken-1" type="reset" name="action">Recomeçar
                        <i class="material-icons right"></i>
                    </button>
                </div>
     

        
           
            </form>
        </div>
    </div>






    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.4.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript">//<![CDATA[
        $(document).ready(function () {
            $('select').formSelect();
        });

    </script>


</body>

</html>