@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>List of FicheFrais</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Other Information</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fichefrais as $fiche)
                    @php
                        $ficheId = $fiche->idVisiteur . '-' . $fiche->moisAnnee;
                    @endphp
                    @if ($ficheId == $idVisiteur . '-' . $monthYear)
                        <tr>
                            <td>{{ $ficheId }}</td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
