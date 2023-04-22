<?php
class Arma
{
    public function disparar()
    {
        echo "disparar";
    }
    public function recargar()
    {
        echo "recargar";
    }
}

class ArmaAssault extends Arma{
  
  public $disparos;
  public function __construct($disparos)
  {
    $this->disparos = $disparos;
  }
  public function disparar(){
      if ($this->disparos == 0) {
        echo "¡Debes Recargar!";
      }else{
        $this->disparos--; 
      }
  }
  public function recargar(){
     $this->disparos = 32;    
  }  
}

$arma1 = new ArmaAssault(0);


?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body class="bg-dark">
    <?php include("../includes/menu.php"); ?>

    <div class="container">
        <form action="index.php" method="post">
            <div class="row">
                <div class="col-3">
                    <h1 class="text-white">arma 1</h1>
                    <div class="row">
                        <div class="col-6" style="height: 200px;">
                            <img src="../img/arma1.png" style="width:200px" alt="">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary" name="recargarA1">Recargar</button>
                            <input type="hidden" name="CantidadBalasA1" value="32">
                            <button type="submit" class="btn btn-primary" name="dispararA1">Disparar</button>
                            <p class="text-white">balas Restantes : 
                            <?php
                            if (isset($_POST["recargarA1"])) {
                                $arma1->recargar();                            
                            }else if(isset($_POST["dispararA1"])){
                                $arma1->disparar();
                            }
                            ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <h1 class="text-white">arma 1</h1>
                    <div class="row">
                        <div class="col-6" style="height: 200px;">
                            <img src="../img/arma2.png" style="width:200px" alt="">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary" name="recargarA2">Recargar</button>
                            <button type="submit" class="btn btn-primary" name="dispararA2">Disparar</button>
                            <p class="text-white">balas Restantes : </p>
                            <p class="text-white">0</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <h1 class="text-white">arma 1</h1>
                    <div class="row">
                        <div class="col-6" style="height: 200px;">
                            <img src="../img/arma3.png" style="width:200px" alt="">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary" name="recargarA3">Recargar</button>
                            <button type="submit" class="btn btn-primary" name="dispararA3">Disparar</button>
                            <p class="text-white">balas Restantes : </p>
                            <p class="text-white">0</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <h1 class="text-white">arma 1</h1>
                    <div class="row">
                        <div class="col-6" style="height: 200px;">
                            <img src="../img/arma4.png" style="width:200px" alt="">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary" name="recargarA4">Recargar</button>
                            <button type="submit" class="btn btn-primary" name="dispararA4">Disparar</button>
                            <p class="text-white">balas Restantes : </p>
                            <p class="text-white">0</p>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>

