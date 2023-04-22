<?php
class Medir{
    public $centigrados;

    function __construct($centigrados)
    {
        $this->centigrados = $centigrados;
    }
    public function medirTemperatura(){
        if ($this->centigrados <= 0) {
            echo "<h1 class='text-primary'>Tremenda hipotermia, esta haciendo mucho frio<h1>";
        }
        else if($this->centigrados > 0 &&$this->centigrados <= 30){
            echo "<h1 class='text-warning'>Ahi va, temperatura estable, ta bien<h1>";
        }else if($this->centigrados >= 31){
            echo "<h1 class='text-danger'>NO PUEDE HACER TANTO CALOOOOR, temperatura maximamente CALIENTE<h1>";
        }
    }
}
    $medir = new Medir($_POST["centigrados"]);

?>

<!doctype html>
<html lang="en">

<head>
    <title>Resultado</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>

    <?php include("../includes/menu.php"); ?>

  
            <div class="container col-5 shadow p-2 mb-2 mt-3 bg-body rounded">
            <div class="card">
                    <div class="card-header">
                    Centigrados
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Mensaje : </h5>
                        <?php $medir->medirTemperatura(); ?>
                    </div>
                </div>
            </div>
           
 
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>