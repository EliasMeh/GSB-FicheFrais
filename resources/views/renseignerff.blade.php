<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renseigner la Fiche de Frais</title>
</head>
<body>
    <h1>Renseigner la Fiche de Frais</h1>
    <form action="/submit-renseignerff" method="POST">
        @csrf
        <h2>Saisie :</h2>
        <label for="month">Mois:</label>
        <input type="text" id="month" name="month" value="{{ date('m') }}" required><br><br>

        <label for="year">Année:</label>
        <input type="text" id="year" name="year" value="{{ date('Y') }}" required><br><br>

        <h2>Frais au forfait :</h2>
        <label for="repas_midi">Nombre de Repas Midi:</label>
        <input type="number" id="repas_midi" name="repas_midi" ><br><br>

        <label for="nuitees">Nombre de Nuitées:</label>
        <input type="number" id="nuitees" name="nuitees" ><br><br>

        <label for="etape">Nombre d'Étapes:</label>
        <input type="number" id="etape" name="etape" ><br><br>

        <label for="km">Kilomètres:</label>
        <input type="number" id="km" name="km" ><br><br>

        <h2>Hors Forfait :</h2>
        <label for="date_hf">Date:</label>
        <input type="date" id="date_hf" name="date_hf" ><br><br>

        <label for="libelle_hf">Libellé:</label>
        <input type="text" id="libelle_hf" name="libelle_hf" ><br><br>

        <label for="quantite_hf">Montant:</label>
        <input type="number" id="quantite_hf" name="quantite_hf" ><br><br>

        <h2>Hors classification:</h2>
        <label for="nbJustificatifs">Nombre de Justificatifs:</label>
        <input type="number" id="nbJustificatifs" name="nbJustificatifs" value="0" required><br><br>

        <label for='montantValide'>Montant validé:</label>
        <input type="number" id='montantValide' name='montantValide' value="0" required><br><br>

        <input type="submit" value="Soumettre">
    </form>
</body>
</html>
