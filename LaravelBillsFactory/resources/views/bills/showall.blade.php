@extends('layouts.app')
@section('content')
@if (count($abonnement->factures)>0)
<main role="main" class="inner cover">
<h1 class="cover-heading">abonnenemt numero:{{$abonnement->id}}</h1>
        <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
        <p class="lead">
                <p>
                    <a class="btn btn-primary btn-lg"  href="/facture/create/{{$abonnement->id}}" role="button">
                        ajouter une nouvel facture
                    </a> 
                    <a class="btn btn-success btn-lg"  href="/" role="button">go back</a></p>
        </p>
    </main>
<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">#NumeroCompteur</th>
        <th scope="col">#facture</th>
        <th scope="col">#consomation</th>
        <th scope="col">Prix</th>
        <th scope="col">etat</th>
        <th scope="col">total</th>
        
      </tr>
    </thead>
    <tbody>
        @foreach ($abonnement->factures as $facture)
            <tr>
                <th scope="row">1</th>
                <td>{{$abonnement->compteur->numCompteur}}</td>
                <td>{{$facture->id}}</td>
                <td>{{$facture->consomation}}</td>
                <td>{{$facture->prix}}</td>
                @if ($facture->reglement==0)
                    <td bgcolor="#FF0000">Impaye</td>
                
                @else
                    <td bgcolor="#00FF00" >paye</td>
                @endif
                <td></td>
            </tr>    
        @endforeach

      <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>{{$abonnement->factures->sum('prix')}}</td>
    </tr>
    </tbody>
  </table>
  
  
@else
<div class="jumbotron text-center">
        <h1>Pas De facture pour l'instant</h1>
        
        <p><a class="btn btn-primary btn-lg"  href="/facture/create/{{$abonnement->id}}" role="button">ajouter une nouvel facture</a> <a class="btn btn-success btn-lg"  href="/" role="button">go back</a></p>
        
    </div>
@endif 
@endsection