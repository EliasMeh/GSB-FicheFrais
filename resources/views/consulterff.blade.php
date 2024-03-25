<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Fiches de Frais</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>Liste des Fiches de Frais</h1>

    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#ficheFrais">Fiche Frais</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#ligneFraisForfait">Ligne Frais Forfait</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#ligneFraisHorsForfait">Ligne Frais Hors Forfait</a>
        </li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane fade show active" id="ficheFrais">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Mois</th>
                        <th scope="col">Montant Valide</th>
                        <th scope="col">Date de Modification</th>
                        <th scope="col">Etat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ficheFrais as $fiche)
                        <tr>
                            <td>{{ $fiche->moisannee }}</td>
                            <td>{{ $fiche->montantValide }}</td>
                            <td>{{ $fiche->dateModif }}</td>
                            <td>{{ $fiche->etat->libelle }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <p>{{$ficheFrais}}</p>

        </div>
        <div class="tab-pane fade" id="ligneFraisForfait">
           <table class="table">
                <thead>
                    <tr>
                        <th scope="col">idVisiteur</th>
                        <th scope="col">Quantite</th>
                        <th scope="col">Libelle</th>
                        <th scope="col">Date</th>
 
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ligneFraisForfait as $lfraisForfait)
                        <tr>
                            <td>{{ $lfraisForfait->idVisiteur }}</td>
                            <td>{{ $lfraisForfait->quantite }}</td>
                            <td>{{ $lfraisForfait->fraisForfait->libelle }}</td>
                            <td>{{ $lfraisForfait->moisannee }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <p>{{$ligneFraisForfait}}</p>

        </div>
        <div class="tab-pane fade" id="ligneFraisHorsForfait">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">idVisiteur</th>
                        <th scope="col">Libelle</th>
                        <th scope="col">Date</th>
                        <th scope="col">Montant</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ligneFraisHorsForfait as $lfraisHorsForfait)
                        <tr>
                            <td>{{ $lfraisHorsForfait->id }}</td>
                            <td>{{ $lfraisHorsForfait->idVisiteur }}</td>
                            <td>{{ $lfraisHorsForfait->libelle }}</td>
                            <td>{{ $lfraisHorsForfait->date }}</td>
                            <td>{{ $lfraisHorsForfait->montant }}</td>
                        </tr>
                    @endforeach
                </tbody>
            
        </div>
        <p>{{$ligneFraisHorsForfait}}</p>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>