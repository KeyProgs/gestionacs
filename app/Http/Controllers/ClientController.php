<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Sinistre;
use App\Models\Voiture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //
    }
    public function getClients()
    {
        $clients=Client::paginate(5);
        return view('clients.clientslist',['clients'=> $clients]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //
        //
    }
    public function getClient( $id ){
        $client=Client::find($id);
        $voiture=Voiture::where('client_id',$id)->get();

        if( !isset($voiture[0]->id))$voiture=new Voiture();else $voiture=$voiture[0];
//        dd($voiture);
        $sinistres=Sinistre::where('voiture_id',$voiture->id)->get();
        if( $sinistres == null)$sinistres=new Sinistre();else $sinistres=$sinistres;
//        dd($voiture,$sinistres);
//
        return view('clients.client',['client'=> $client, 'voiture'=> $voiture, 'sinistres'=> $sinistres]);
    }


    public function sinistresAdd(Request  $request){

        $objet=$request->all();
//        dd($objet);
//        $voiture= Sinistre::where('voiture_id',$objet['voiture_id'])->get()[0];
        $sinistre=new Sinistre();
        $sinistre->sinistre_id=$objet['sinistre_id'];
        $sinistre->sinistre_date=$objet['sinistre_date'];
        $sinistre->voiture_id=$objet['voiture_id'];

        $sinistre->save();
        return redirect('client/c-'  .  Client::find(Voiture::find($sinistre->voiture_id)->client_id)->id);
        return redirect()->back();
//        {{ url()->previous() }}

    }
        //


    /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */

    public function clientAddForm( Request $request){
        if ($request->isMethod('post')) {
            $dataFormClient=$request->all();
            $columns = Schema::getColumnListing('clients');
            $client=null;

            $client=new Client();
            foreach ($columns as $key => $column )
                if (array_key_exists($column , $dataFormClient)) $client->$column=$dataFormClient[$column] ;
                $client->user_id=Auth::id();
            $client->save();
//        dd($client);


            $columns = Schema::getColumnListing('voitures');
            $voiture=new Voiture();
            foreach ($columns as $key => $column )
                if (array_key_exists($column , $dataFormClient)) $voiture->$column=$dataFormClient[$column] ;

            $voiture->client_id=$client->id;
            $voiture->save();

            Session::flash('success', 'Client mise à jour avec success.');

        }else{
//            dd($request->method());
                $client=New Client();
                $voiture=New Voiture();

        }
        $sinistres=[];
        return view('clients.client',['client'=>$client , 'voiture'=>$voiture , 'sinistres'=> $sinistres]);


    }

    //Non utilisé code chngé vers clientAddForm @if
    public function add_client(Request $request)
    {
        $dataFormClient=$request->all();
        $columns = Schema::getColumnListing('clients');
        $client=null;

        $client=new Client();
        foreach ($columns as $key => $column )
            if (array_key_exists($column , $dataFormClient)) $client->$column=$dataFormClient[$column] ;
        $client->save();
//        dd($client);


        $columns = Schema::getColumnListing('voitures');
        $voiture=new Voiture();
        foreach ($columns as $key => $column )
            if (array_key_exists($column , $dataFormClient)) $voiture->$column=$dataFormClient[$column] ;

        $voiture->client_id=$client->id;
        $voiture->save();



        Session::flash('success', 'Client mise à jour avec success.');
        return view('clients.client',['client'=> $client, 'voiture'=> $voiture]);








    }


    public function deleteSinistre($id){
//        $sinistre=Sinistre::find($id);
//      dd($sinistre );
        Sinistre::find($id)->delete();
        return redirect()->back();
    }


    public function edit_client( int $id, Request $request  )
    {
        $dataFormClient=$request->all();
        $columns = Schema::getColumnListing('clients');
        $client=null;

        $client=Client::find($id);
        foreach ($columns as $key => $column )
            if (array_key_exists($column , $dataFormClient)) $client->$column=$dataFormClient[$column] ;
        $client->save();


        $columns = Schema::getColumnListing('voitures');
        $voiture=Voiture::where('client_id',$client->id)->get();
        if( !isset($voiture[0]->id))  $voiture=new Voiture();else $voiture=$voiture[0];
        foreach ($columns as $key => $column )
            if (array_key_exists($column , $dataFormClient)) $voiture->$column=$dataFormClient[$column] ;
        $voiture->client_id= $client->id;
        $voiture->save();
//        dd($voiture);

        $sinistres=Sinistre::where('voiture_id',$voiture->id)->get();
        if( $sinistres == null)$sinistres=new Sinistre();else $sinistres=$sinistres;

        Session::flash('success', 'Client mise à jour avec success.');

        return redirect('client/c-'  .  $client->id )->with(['client'=> $client, 'voiture'=> $voiture, 'sinistres'=> $sinistres]);

        return view('clients.client',['client'=> $client, 'voiture'=> $voiture, 'sinistres'=> $sinistres]);




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
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
