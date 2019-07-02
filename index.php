<!DOCTYPE html>
<html lang="fr">
<head>
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
    <div class="row">
        <div class="col">
            <h1>Bon de travail</h1>
        </div>
    </div>
    <form method="post" action="controller.php">
        <div class="form-group">
            <label for="client">Client</label>
            <input type="text" class="form-control" id="client" name="client" placeholder="Entrer le nom du client" value="">
        </div>
        <div class="form-group">
            <label for="marque">Marque</label>
            <input type="text" class="form-control" id="marque" name="marque" placeholder="Entrer la marque du véhicule" value="">
        </div>
        <div class="form-group">
            <label for="marque">Modèle</label>
            <input type="text" class="form-control" id="modele" name="modele" placeholder="Entrer le modèle du véhicule" value="">
        </div>
        <div class="form-group">
            <label for="marque">Immatriculation</label>
            <input type="text" class="form-control" id="immatriculation" name="immatriculation" placeholder="Entrer l'immatriculation du véhicule" value="">
        </div>
        <div class="form-group">
            <label for="marque">Kilométrage</label>
            <input type="number" class="form-control" id="kilometrage" name="kilometrage" placeholder="Entrer le kilométrage du véhicule" value="">
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Véhicule léger" name="type">
                <label class="form-check-label" for="defaultCheck1">
                    Véhicule léger
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Utilitaires" name="type">
                <label class="form-check-label" for="defaultCheck1">
                    Utilitaires
                </label>
            </div>
        </div>
        <h3>Pneumatiques</h3>
        <div class="form-group">
            <label for="dimension">Dimension des pneumatiques</label>
            <input type="text" class="form-control" id="dimension" name="dimensions" placeholder="Entrer la dimension des pneus">
        </div>
        <h4>Interventions :</h4>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Dépose/Pose" name="interventions[]">
                <label class="form-check-label" for="defaultCheck1">
                    Dépose/Pose
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Forfait montage / équilibrage / valve" name="interventions[]">
                <label class="form-check-label" for="defaultCheck1">
                    Forfait montage / équilibrage / valve
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Réparation mèche" name="interventions[]">
                <label class="form-check-label" for="defaultCheck1">
                    Réparation mèche
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Réparation champignon" name="interventions[]">
                <label class="form-check-label" for="defaultCheck1">
                    Réparation champignon
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Réparation à chaud" name="interventions[]">
                <label class="form-check-label" for="defaultCheck1">
                    Réparation à chaud
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Equilibrage roue tôle" name="interventions[]">
                <label class="form-check-label" for="defaultCheck1">
                    Equilibrage roue tôle
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Equilibrage roue alu" name="interventions[]">
                <label class="form-check-label" for="defaultCheck1">
                    Equilibrage roue alu
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Changement valve" name="interventions[]">
                <label class="form-check-label" for="defaultCheck1">
                    Changement valve
                </label>
            </div>
        </div>
        <h4>Position des pneumatiques :</h4>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Avant gauche" name="positions[]">
                <label class="form-check-label" for="defaultCheck1">
                    Avant gauche
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Avant droit" name="positions[]">
                <label class="form-check-label" for="defaultCheck1">
                    Avant droit
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Arrière gauche" name="positions[]">
                <label class="form-check-label" for="defaultCheck1">
                    Arrière gauche
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Arrière gauche" name="positions[]">
                <label class="form-check-label" for="defaultCheck1">
                    Arrière gauche
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Arrière intérieur gauche" name="positions[]">
                <label class="form-check-label" for="defaultCheck1">
                    Arrière intérieur gauche
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Arrière intérieur droit" name="positions[]">
                <label class="form-check-label" for="defaultCheck1">
                    Arrière intérieur droit
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Arrière exterieur gauche" name="positions[]">
                <label class="form-check-label" for="defaultCheck1">
                    Arrière exterieur gauche
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Arrière exterieur droit" name="positions[]">
                <label class="form-check-label" for="defaultCheck1">
                    Arrière exterieur droit
                </label>
            </div>
        </div>
        <h3>Géométrie du véhicule</h3>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Contrôle de la géométrie" name="geometrie[]">
                <label class="form-check-label" for="defaultCheck1">
                    Contrôle de la géométrie
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Réglage parallélisme du train AV" name="geometrie[]">
                <label class="form-check-label" for="defaultCheck1">
                    Réglage parallélisme du train AV
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Réglage géométrie du train AV" name="geometrie[]">
                <label class="form-check-label" for="defaultCheck1">
                    Réglage géométrie du train AV
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Réglage du parallélisme du train AR" name="geometrie[]">
                <label class="form-check-label" for="defaultCheck1">
                    Réglage du parallélisme du train AR
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Réglage géométrie du train AR" name="geometrie[]">
                <label class="form-check-label" for="defaultCheck1">
                    Réglage géométrie du train AR
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer la sauce</button>
    </form>
</div>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/tether/dist/js/tether.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>