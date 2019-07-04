<?php
########################################################################################################################################
/*
 * ------------------------------------------------- Partie modifiable -----------------------------------------------------------------
 */
########################################################################################################################################

// Todo si besoin
# Le tableau de TOUTES les données du formulaire
# A gauche le label qui sera utilisé dans le PDF
# A droite reprendre tel quel, et mettre en clé la valeur name="" du formulaire
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
];
?>
    <style>

        /* Todo style ici pas moyen autrement sorry ;) */
    </style>
    <div class="container">
        <?php foreach ($array as $key => $value)  : ?>
            <!-- Todo ton html si ce format va pas bien-->
            <div class="row">
                <div class="col-4"><?php echo $key; ?></div>
                <div class="col-8"><?php echo (is_array($value)) ? implode(', ', $value) : $value; ?></div>
            </div>
        <?php endforeach; ?>
    </div>
<?php
########################################################################################################################################
/*
 * ------------------------------------------------- Fin partie modifiable -------------------------------------------------------------
 */
########################################################################################################################################