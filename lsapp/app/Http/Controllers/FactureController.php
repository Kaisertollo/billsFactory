<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\abonnement;
use App\facture;

class FactureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $abonnement=abonnement::find($id);
        return view('bills.factureindex')->with('factures',$abonnement);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //$post=post::where('title','Post two')->get();
        $abonnement=abonnement::find($id);
        
        return view('bills.createfacture')->with('abonnement',$abonnement);
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
        $this->validate($request,[
            'observation' => 'required',
        ]);
        $abonnement=abonnement::find($request->input('id'));
        if ($abonnement->cumulNew >= $request->input('observation')) 
        {
            $error = \Illuminate\Validation\ValidationException::withMessages([
                'observation' => ['valeur erroné'],
                
             ]);
             throw $error;
        }
        
         
        $abonnement->cumulAnc=$abonnement->cumulNew;
        $abonnement->cumulNew=$request->input('observation');
        $abonnement->save();
        $abonnement=abonnement::find($request->input('id'));
        $facture=new facture;
        $facture->consomation=($abonnement->cumulNew)-($abonnement->cumulAnc);
        $facture->prix=100*($facture->consomation);
        $facture->mois="".date('M');
        $bool=true;
        //$facure->reglement=$bool; 
        $facture->abonnement()->associate($abonnement)->save();
        $facture=facture::orderby('created_at','desc')->take(1)->get();
        //return $facture[0];
        return view('bills.showfacture')->with('facture',$facture[0]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $abonnement=abonnement::all();
        return ($abonnement);
    }
    public function showall($id)
    {
        $abonnement=abonnement::find($id);
        return view('bills.showall')->with('abonnement',$abonnement);
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
    public function payer($id)
    {
        //
        $facture=facture::find($id);
        $facture->reglement=1;
        $facture->save();
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
