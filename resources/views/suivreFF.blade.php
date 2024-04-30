<!DOCTYPE html>
<html>
<head>
    <title>Page de suivi de fiche de frais</title>
</head>
<body>
    <h1>Page de suivi de fiche de frais</h1>
    <table>
        <thead>
            <tr>
                <th>ID Visiteur</th>
                <th>Mois et Année</th>
                <th>Nombre de Justificatifs</th>
                <th>Montant Validé</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ficheFrais as $fiche)
                @if($fiche->idEtat === 'VA')
                    <tr>
                        <td>{{ $fiche->idVisiteur }}</td>
                        <td>{{ $fiche->moisannee }}</td>
                        <td>{{ $fiche->nbJustificatifs }}</td>
                        <td>{{ $fiche->montantValide }}</td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
</body>
</html>