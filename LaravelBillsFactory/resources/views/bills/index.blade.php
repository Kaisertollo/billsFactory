@extends('layouts.app')
@section('content')
    <!--<div class="jumbotron text-center">
        <h1>Welcome to Laravel</h1>
        <p>This is laravel tutrial from traversy media</p>
        <p><a class="btn btn-primary btn-lg"  href="#" role="button">ajouter un nouvel abonnement</a></p>
        
    </div>-->
   
    @if (count($abonnements)>0)
    <main role="main" class="inner cover">
            <h1 class="cover-heading">Bills Factory</h1>
            <p class="lead">Cliquez pour creer un nouveau abonnement Vous pouvez aussi gerer les abonnement dejà créés</p>
            <p class="lead">
                <a href="/create" class="btn btn-lg btn-secondary">Nouvel abonnement</a>
            </p>
        </main>
    <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">NumeroCompteur</th>
            <th scope="col">#abonnemt</th>
            <th scope="col">CumulAnc</th>
            <th scope="col">CumulNew</th>
            
          </tr>
        </thead>
        <tbody>
            @foreach ($abonnements as $abonnement)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$abonnement->compteur->numCompteur}}</td>
                    <td>{{$abonnement->id}}</td>
                    <td>{{$abonnement->cumulAnc}}</td>
                    <td>{{$abonnement->cumulNew}}</td>
                <td><a class="btn btn-success"  href="/facture/create/{{$abonnement->id}}" role="button">NouvelleFacture</a></td>
                    <td><a class="btn btn-primary"  href="/facture/showall/{{$abonnement->id}}" role="button">Voir Factures</a></td>
                </tr>    
            @endforeach
          
          
        </tbody>
      </table>
      
      
    @else
    <div class="jumbotron text-center">
            <h1>Pas D'abonnement pour l'instant</h1>
            
            <p><a class="btn btn-primary btn-lg"  href="/create" role="button">ajouter un nouvel abonnement</a></p>
            
        </div>
    @endif
@endsection