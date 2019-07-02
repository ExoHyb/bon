<?php

$array = [
    'Client'                     => isset($_REQUEST['client']) ? $_REQUEST['client'] : false,
    'Marque'                     => isset($_REQUEST['marque']) ? $_REQUEST['marque'] : false,
    'Modèle'                     => isset($_REQUEST['modele']) ? $_REQUEST['modele'] : false,
    'Immatriculation'            => isset($_REQUEST['immatriculation']) ? $_REQUEST['immatriculation'] : false,
    'Kilométrage'                => isset($_REQUEST['kilometrage']) ? $_REQUEST['kilometrage'] : false,
    'Type véhicule'              => isset($_REQUEST['type']) ? $_REQUEST['type'] : false,
    'Dimension des pneumatiques' => isset($_REQUEST['dimensions']) ? $_REQUEST['dimensions'] : false,
    'Interventions'              => isset($_REQUEST['interventions']) ? $_REQUEST['interventions'] : false,
    'Position des pneumatiques'  => isset($_REQUEST['positions']) ? $_REQUEST['positions'] : false,
    'Géométrie du véhicule'      => isset($_REQUEST['geometrie']) ? $_REQUEST['geometrie'] : false
]

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Bon de travail - <?php echo date('d/m/Y H:i:s'); ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="container">
    <?php foreach ($array as $key => $value)  : ?>
        <div class="row">
            <div class="col-4"><?php echo $key; ?></div>
            <div class="col-8"><?php echo (is_array($value)) ? implode(', ', $value) : $value; ?></div>
        </div>
    <?php endforeach; ?>
</div>
</body>
</html>