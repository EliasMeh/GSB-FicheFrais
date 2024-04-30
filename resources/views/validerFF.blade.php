<!DOCTYPE html>
<html>
<head>
    <title>Page de validation</title>
</head>
<body>
    <h1>Page de validation de fiche de frais</h1>
    
    <form method="POST" action="{{ route('RecupFF') }}">
        @csrf
        <label for="mois">Mois:</label>
        <input type="text" name="mois" id="mois">
        <label for="annee">Année:</label>
        <input type="text" name="annee" id="annee">
        <label for="idVisiteur">ID Visiteur:</label>
        <input type="text" name="idVisiteur" id="idVisiteur">
        <button type="submit">Search</button>
    </form>
    <p>{{ $ficheFrais ?? '' }}</p>
    @if(isset($ficheFrais) && count($ficheFrais) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>ID Visiteur</th>
                    <th>Montant validé</th>
                    <th>Etat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ficheFrais as $fiche)
                    @if($fiche->idEtat === 'CL' || $fiche->idEtat === 'CR')
                        <tr>
                            <td>{{ $fiche->moisannee }}</td>
                            <td>{{ $fiche->idVisiteur }}</td>
                            <td>{{ $fiche->montantValide }}</td>
                            <td>{{ $fiche->idEtat }}</td>
                            <td>
                                <form action="{{ route('validation') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="idVisiteur" value="{{ $fiche->idVisiteur }}">
                                    <input type="hidden" name="moisannee" value="{{ $fiche->moisannee }}">
                                    <button type="submit">Validate</button>
                                </form>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    @else
        <p>No ficheFrais available.</p>
    @endif
</body>
</html>