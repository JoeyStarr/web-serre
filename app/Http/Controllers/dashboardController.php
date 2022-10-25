<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Database; 
use Kreait\Firebase\ServiceAccount;
use \Kreait\Firebase\Contract\Auth;
use \Kreait\Laravel\Firebase\Facades\Firestore;
use App\User; 
use Session;
use Illuminate\Support\Facades\Hash;
use Google\Cloud\Firestore\FirestoreClient;
class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas=array();
        $value = Session::get('user_email');
        $firebaseId = Session::get('firebaseId');
        $valapi=Http::get("http://192.168.252.15:8000/listpers/")->Json();
        
        foreach ($valapi as $document) {
            
            $user=$document['firebaseId'];
            
            
            if($user==$firebaseId){ 
                
                $data=$document['serrepers'];
                array_push($datas,$data);
            }
           //dd($data);
       }
        
        return view ('accueil',['datas' => $datas]);
    }
    public function indexadmin()
    {
        $data=array();
        $value = Session::get('user_email');
        $firestore = app('firebase.firestore')->database()->collection('CommandeSerre');
        
        $commandes = $firestore->documents();
        $nbCommande=0; 
        foreach ($commandes as $commande) {
            //$commande->data();
            $nbCommande=$nbCommande +1;
           
           
         }
        
        $valapi=Http::get("http://192.168.252.15:8000/listserre/")->Json();
        
        $nbSerre=count($valapi);
        $i=0;
        foreach ($valapi as $document) {
          
            if ($isEmpty = empty($document['person'])){
                                             
               $i = $i +1; 
              }
                 
        }
        

        $infoPers=Http::get("http://192.168.252.15:8000/listpers/")->Json();
        
       
        
        return view ('accueiladmin',['datas' => $valapi,'nbSerre'=> $nbSerre, 'infoPers'=> $infoPers, 'nbSerreNon'=> $i, 'nbCommande'=> $nbCommande]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function creerserre(Request $request)
    {

        function getRandomStr($n) { 
            // Stockez toutes les lettres possibles dans une chaîne.
            $str = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
            $randomStr = ''; 
          
            // Générez un index aléatoire de 0 à la longueur de la chaîne -1.
            for ($i = 0; $i < $n; $i++) { 
                $index = rand(0, strlen($str) - 1); 
                $randomStr .= $str[$index]; 
            } 
          
            return $randomStr; 
        } 
        $valapi=Http::get("http://192.168.252.15:8000/listserre/")->Json();
        $listhash=array();
        
        
        foreach ($valapi as $document) {
            $user=$document['hashSerre'];
            array_push($listhash,$user);
            
       }
        $n=12 ; 
        $data=getRandomStr($n);
        $monhash=Hash::make($data);
        
        
        $hashserre= [
            "hashSerre" => $monhash,
           
        ];
        while(in_array($hashserre, $listhash)){
            $n=25;
            $data=getRandomStr($n);
            $hashserre=Hash::make($data);
          }
        
       
        $response=Http::post("http://192.168.252.15:8000/setserre/", $hashserre);
        return redirect("/dashboardadmin")->with('success', 'Une nouvelle serre a été crée');;
       
    }


    public function serreadmin()
    {
        
        $firestore = app('firebase.firestore')->database()->collection('commande');
        $value = Session::get('user_email');
        $documents = $firestore->documents();
    //dd($documents);
    $data=array();
    foreach ($documents as $document) {
        $id=$document->data();
        array_push($data,$id);
       
        
        
        
     }
    return view ('commandeadmin',['commandes' => $data]);
    }
    public function listecommande()
    {
        
        $firestore = app('firebase.firestore')->database()->collection('CommandeSerre');
        $CommandeSerre= array();
        $commandes = $firestore->documents();
        $nbCommande=0; 
        foreach ($commandes as $commande) {
            $val=$commande->data();
            $nbCommande=$nbCommande +1;
            array_push($CommandeSerre,$val);
           
         }
         $valapi=Http::get("http://192.168.252.15:8000/listserre/")->Json();
        
        $nbSerre=count($valapi);
        $i=0;
        foreach ($valapi as $document) {
          
            if ($isEmpty = empty($document['person'])){
                                             
               $i = $i +1; 
              }
                 
        }
    //dd($CommandeSerre);
         
    return view ('ListeCommandeAdmin',['commandesSerre' => $CommandeSerre,'nbSerre'=> $nbSerre,'nbSerreNon'=> $i, 'nbCommande'=> $nbCommande]);
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
