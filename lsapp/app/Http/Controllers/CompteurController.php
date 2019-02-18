<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compteur;
use App\abonnement;
class CompteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        /*$compteur=new Compteur;
        $compteur->numCompteur = '';
        $compteur->save();
        $compteur=Compteur::orderby('created_at','desc')->first();
        $compteur->numCompteur = "numero".$compteur->id;
        $compteur->save();
        $abonnement=new abonnement;
        $abonnement->cumulAnc=0;
        $abonnement->cumulNew=0;
        $abonnement->compteur()->associate($compteur)->save();*/
        $abonnements=abonnement::with('compteur')->get();
        return view('bills.index')->with('abonnements',$abonnements);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $compteur=new Compteur;
        $compteur->numCompteur = '';
        $compteur->save();
        $compteur=Compteur::orderby('created_at','desc')->first();
        $compteur->numCompteur = "numero".$compteur->id;
        $compteur->save();
        $abonnement=new abonnement;
        $abonnement->cumulAnc=0;
        $abonnement->cumulNew=0;
        $abonnement->compteur()->associate($compteur)->save();
        return redirect('/')->with('success','Nouvel Abonnement ajouté');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
