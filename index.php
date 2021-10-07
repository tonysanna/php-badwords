<?php
    $text = 'Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.';
    $word = $_GET['parola'];
    $censure = '***';
?>

<h1>Paragrafo</h1>

<p><?php echo str_replace($word, $censure, $text) ?></p>

<h2>Lunghezza Paragrafo: <?php echo strlen($text) ?></h2>