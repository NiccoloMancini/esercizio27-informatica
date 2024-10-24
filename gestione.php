<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <?php
        $nome = $_POST["nomeProdotto"];
        $costo = $_POST["costo"];
        $quantita = $_POST["quantita"];
        $usato = (isset($_POST["usato"]) ? $_POST["usato"] : "oggetto nuovo") ;
        $pagamento = $_POST["pagamento"];

    ?>
    <ul>
        <li>Nome prodotto: <?php echo $nome;?></li>
        <li>Costo:<?php echo $costo;?></li>
        <li>Quantità: <?php echo $quantita;?></li>
        <li>Stato: <?php echo $usato;?></li>
        <li>Metodo di pagamento: <?php echo $pagamento;?></li>
        <li>Totale: <?php
        $prezzoTotale = $costo * $quantita;
        if (isset($_POST["usato"])) {
            $prezzoTotale -= ($prezzoTotale * 0.2);
        }
        if ($pagamento == "carta") {
            $prezzoTotale += 2;
        }
        echo $prezzoTotale;
        ?></li>
    </ul>
    </ul>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>