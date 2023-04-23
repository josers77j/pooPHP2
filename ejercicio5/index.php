<?php


class Arma
{
    protected $bala;

    public function decrementar()
    {
        if ($this->bala > 0) {
            $this->bala--;
        }
    }

    public function reiniciar()
    {
        $this->bala = 8;
    }

    public function getBalas()
    {
        return $this->bala;
    }
}

class ArmaAssault extends Arma
{
    public function __construct($bala)
    {
        $this->bala = $bala;
    }
}

class ArmaSecondary extends Arma
{
    public function __construct($bala)
    {
        $this->bala = $bala;
    }
}

session_start();

// para la primer arma
if (!isset($_SESSION['balasA1'])) {
    $_SESSION['balasA1'] = new ArmaAssault(8);
}

if (isset($_POST['decrementarA1'])) {
    if ($_SESSION['balasA1']->getBalas() > 0) {
        $_SESSION['balasA1']->decrementar();
    }
}

if (isset($_POST['reiniciarA1'])) {
    if ($_SESSION['balasA1']->getBalas() == 0) {
        $_SESSION['balasA1']->reiniciar();
    }
}

//para la segunda arma
if (!isset($_SESSION['balasA2'])) {
    $_SESSION['balasA2'] = new ArmaSecondary(8);
}

if (isset($_POST['decrementarA2'])) {
    if ($_SESSION['balasA2']->getBalas() > 0) {
        $_SESSION['balasA2']->decrementar();
    }
}

if (isset($_POST['reiniciarA2'])) {
    if ($_SESSION['balasA2']->getBalas() == 0) {
        $_SESSION['balasA2']->reiniciar();
    }
}

//para la tercer arma
if (!isset($_SESSION['balasA3'])) {
    $_SESSION['balasA3'] = new ArmaSecondary(8);
}

if (isset($_POST['decrementarA3'])) {
    if ($_SESSION['balasA3']->getBalas() > 0) {
        $_SESSION['balasA3']->decrementar();
    }
}

if (isset($_POST['reiniciarA3'])) {
    if ($_SESSION['balasA3']->getBalas() == 0) {
        $_SESSION['balasA3']->reiniciar();
    }
}

//para la cuarta arma
if (!isset($_SESSION['balasA4'])) {
    $_SESSION['balasA4'] = new ArmaSecondary(8);
}

if (isset($_POST['decrementarA4'])) {
    if ($_SESSION['balasA4']->getBalas() > 0) {
        $_SESSION['balasA4']->decrementar();
    }
}

if (isset($_POST['reiniciarA4'])) {
    if ($_SESSION['balasA4']->getBalas() == 0) {
        $_SESSION['balasA4']->reiniciar();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contador</title>

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <?php include("../includes/menu.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col-3" style="height: 100px;">
                <img src="../img/arma1.png" style="width: 300px;" alt="">
                <h1>Balas: <?php echo $_SESSION['balasA1']->getBalas(); ?></h1>
                <?php if ($_SESSION['balasA1']->getBalas() > 0) : ?>
                    <form action="index.php" method="post">
                        <input type="submit" name="decrementarA1" value="Disparar" class="btn btn-primary">
                    </form>
                <?php endif; ?>
                <?php if ($_SESSION['balasA1']->getBalas() == 0) : ?>
                    <form action="index.php" method="post">
                        <input type="submit" name="reiniciarA1" value="Recargar" class="btn btn-success">
                    </form>
                <?php endif; ?>
            </div>

            <div class="col-3" style="height: 100px;">
            <img src="../img/arma2.png" style="width: 200px; height:200px;" alt="">              
                <h1>Contador: <?php echo $_SESSION['balasA2']->getBalas(); ?></h1>
                <?php if ($_SESSION['balasA2']->getBalas() > 0) : ?>
                    <form action="index.php" method="post">
                        <input type="submit" name="decrementarA2" value="Disparar" class="btn btn-primary">
                    </form>
                <?php endif; ?>

                <?php if ($_SESSION['balasA2']->getBalas() == 0) : ?>
                    <form action="index.php" method="post">
                        <input type="submit" name="reiniciarA2" value="Recargar" class="btn btn-success">
                    </form>
                <?php endif; ?>
            </div>

            <div class="col-3" style="height: 100px;">
            <img src="../img/arma3.png" style="width: 200px; height:200px;" alt="">              
                <h1>Contador: <?php echo $_SESSION['balasA3']->getBalas(); ?></h1>
                <?php if ($_SESSION['balasA3']->getBalas() > 0) : ?>
                    <form action="index.php" method="post">
                        <input type="submit" name="decrementarA3" value="Disparar" class="btn btn-primary">
                    </form>
                <?php endif; ?>

                <?php if ($_SESSION['balasA3']->getBalas() == 0) : ?>
                    <form action="index.php" method="post">
                        <input type="submit" name="reiniciarA3" value="Recargar" class="btn btn-success">
                    </form>
                <?php endif; ?>
            </div>

            <div class="col-3" style="height: 100px;">
            <img src="../img/arma4.png" style="width: 200px; height:200px;" alt="">              
                <h1>Contador: <?php echo $_SESSION['balasA4']->getBalas(); ?></h1>
                <?php if ($_SESSION['balasA4']->getBalas() > 0) : ?>
                    <form action="index.php" method="post">
                        <input type="submit" name="decrementarA4" value="Disparar" class="btn btn-primary">
                    </form>
                <?php endif; ?>

                <?php if ($_SESSION['balasA4']->getBalas() == 0) : ?>
                    <form action="index.php" method="post">
                        <input type="submit" name="reiniciarA4" value="Recargar" class="btn btn-success">
                    </form>
                <?php endif; ?>
            </div>
            

        </div>
    </div>

    <!-- Bootstrap JS v5.2.1 -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>