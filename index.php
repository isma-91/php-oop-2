<!-- 
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
  - L'e-commerce vende prodotti per gli animali.
  - I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
  - L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
  - Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).
-->

<?php

include_once __DIR__ . '/Product.php';
include_once __DIR__ . '/Toy.php';
include_once __DIR__ . '/Kennel.php';
include_once __DIR__ . '/Food.php';
include_once __DIR__ . '/User.php';
include_once __DIR__ . '/Registered.php';
include_once __DIR__ . '/CreditCard.php';
include_once __DIR__ . '/CreditCardExpiration.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-oop2</title>
</head>
<body>
  <h1>Biscotti</h1>
  <?php
    $biscotti = new Food ('biscotti', 'biscotti per cani', 38, ['farina', 'lievito', 'dolcificante', 'aromi']);
    var_dump($biscotti);
    echo $biscotti->getIngredients();
  ?>

  <h2>Nuovo utente</h2>
  <?php
    $reg = new Registered('Andrea', 'Rossi', '123456789012');
    var_dump($reg);
  ?>

  <h2>Date</h2>
  <?php
    $exp = new CreditCardExpiration (10, 2025);
    $sfag = new CreditCard('112345675', '333', $exp);
    $sfag->is_valid();
  ?>

</body>
</html>