<?php
include_once 'webmenu.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arman Elektronik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<body>
    <div style="text-align: center; background-color: khaki; color: white">
        <h1 align='center'>Arman Elektronik</h1>
        <?php
            foreach ($menu_atas as $key => $value) {
                echo "<a href='index.php?hal=$key'>$value</a> | ";
            }
        ?>
    </div>