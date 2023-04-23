<?php
class Rifa
{
    public $numeroRifa;
    public $recargaRifa;
    public function __construct($numeroRifa, $recargaRifa)
    {
        $this->numeroRifa = $numeroRifa;
        $this->recargaRifa = $recargaRifa;
    }

    public function probarSuerte()
    {
        $ganadorAleatorio = rand(1, 100);
        if ($this->numeroRifa == $ganadorAleatorio) {
            echo "numero ganador : " . $ganadorAleatorio . "<br><br>" ;
            switch ($this->recargaRifa) {
                case '1':
                    echo "has ganado $70, alcanza para una cariñosa";
                    break;
                case '2':
                    echo "has ganado $140";                    
                    break;
                case '3':
                    echo "has ganado $210";
                    break;
                case '4':
                    echo "has ganado $280";
                    break;
                case '5':
                    echo "has ganado $350";
                    break;
                case '6':
                    echo "has ganado $420";
                    break;
                case '7':
                    echo "has ganado $490";
                    break;
                case '9':
                    echo "has ganado $560";
                    break;
                case '9':
                    echo "has ganado $630";
                    break;
                case '10':
                    echo "has ganado $700, ya alcanza para un pc gaming vamoooooos";
                    break;
                default:
                    echo "no debio haber pasado esto";
                    break;
            }
        }else{
            echo "numero ganador : ".$ganadorAleatorio . "<br><br>";
            echo "Suerte para la proxima";
        }
    }
}

?>


<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

<?php include("../includes/menu.php"); ?>

<div class="container col-5 shadow p-2 mb-2 mt-3 bg-body rounded">
        <div class="card">
            <div class="card-header">
            Rifa de varo
            </div>
            <div class="card-body">
                <h5 class="card-title">Debes seleccionar un numero de rifa y la cantidad de dinero que deseas recargar para aumentar tus probabilidades de ganar mucho mas</h5>
                <form action="index.php" method="post">
                    <div class="mb-3">
                      <label for="" class="form-label">Numero de rifa (debe estar en el rango del 1 al 100)</label>
                      <input type="number"
                        class="form-control" name="numeroR" min="0" max="100" id="" aria-describedby="helpId" placeholder="" required>
                      <small id="helpId" class="form-text text-muted">Ejemplo : 15</small>
                    </div>

                    <div class="mb-3">
                      <label for="" class="form-label">Costo de compra (puedes adquirir un numero con solo $1 o hasta $10 maximo, mientras mas sea la recarga, mejor sera el premio)</label>
                      <input type="number"
                        class="form-control" name="recargaR" min="0" max="10" id="" aria-describedby="helpId" placeholder="" required>
                      <small id="helpId" class="form-text text-muted">Ejemplo : 3</small>
                    </div>

                    <input name="procesar" id="procesar" class="btn btn-primary" type="submit" value="Probar Suerte">
                </form>
            </div>
        </div>

        <div class="container col-5 shadow p-2 mb-2 mt-3 bg-body rounded">
            <div class="card">
                    <div class="card-header">
                    Rifa de Varo
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Resultado de la Rifa : </h5>
                        <?php 
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $rifa = new Rifa($_POST["numeroR"], $_POST["recargaR"]);
                            $rifa->probarSuerte();
                        }
                          ?>
                    </div>
                </div>
            </div>
    </div>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
  </script>
</body>

</html>