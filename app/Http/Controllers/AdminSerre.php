<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Database; 
use Kreait\Firebase\ServiceAccount;
use \Kreait\Firebase\Contract\Auth;
use \Kreait\Laravel\Firebase\Facades\Firestore;
use Google\Cloud\Firestore\DocumentSnapshot;
use Google\Cloud\Firestore\FirestoreClient;
class AdminSerre extends Controller
{
    public function pagereglage()
    { 
        return view ('reglage');
    }
    public function pagecommande()
    {   
        $firestore = app('firebase.firestore')->database()->collection('commande');
        $documents = $firestore->documents();
        $data=array();
        foreach ($documents as $document) {
            array_push($data,$document->data());
       }
        return view ('commandes',['commandes' => $data]);
    }
}
