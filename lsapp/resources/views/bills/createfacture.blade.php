@extends('layouts.app')
@section('content')
    <div class="card text-center bg-dark">
        <div class="card-header">
                <h1 class="display-4">abonnement numero:{{$abonnement->id}}</h1>      
        </div>
        <div class="card-body">
                <form method="POST" action="/facture/store">
                    @csrf
                    <div class="form-group">
                        {{Form::label('observation', 'Observation')}}
                        {{Form::number('observation','',['class' => 'form-control',
                        'placeholder' =>'saisir la valeur afficher sur le compteur','step'=>'0.01'])}}
                        <input name="id" type="hidden" value="{{$abonnement->id}}">
                        
                    </div>
                    {{Form::submit('submit',['class' => 'btn btn-success'])}}
                </form>
                
        </div>
            
    </div>
@endsection