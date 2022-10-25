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
use Google\Cloud\Firestore\DocumentSnapshot;
use Google\Cloud\Firestore\FirestoreClient;
use Session;
class AdminSerre extends Controller
{
    public function pagereglage()
    { 
        $data=array();
        $value = Session::get('user_email');
        $valapi=Http::get("http://192.168.252.15:8000/listpers/")->Json();
        foreach ($valapi as $document) {
            $user=$document['email'];
            
            if($user==$value){ 
                $data=$document['serrepers'];
                
               // dd($data);
                
            }
       }
         
        return view ('reglage',['datas' => $data]);
    
        
    }
    public function modifReglage(Request $request)
    { 
        $data=array();
        $valapi=Http::get("http://192.168.252.15:8000/listpers/")->Json();
        foreach ($valapi as $document) {
            $user=$document['email'];
            
            if($user==$value){ 
                $data=$document['serrepers'];
                
                
            }
       }
         
        return redirect ('/reglage',['datas' => $data]);
    
        
    }
    public function pagecommande()
    {   
        $firestore = app('firebase.firestore')->database()->collection('commande');
        $value = Session::get('user_email');
        $firebaseId = Session::get('firebaseId');
       
        $documents = $firestore->documents();
        //dd($documents);
        $data=array();
        foreach ($documents as $document) {
            $ok=$document->data();
           
            $id=$ok['idSeller'];
            
            
            if($id==$firebaseId){ 
               
                array_push($data,$document->data());
            }
            
       }
        return view ('commandes',['commandes' => $data]);
    }
    
        
}
