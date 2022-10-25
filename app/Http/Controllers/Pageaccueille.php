<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Database; 
use Kreait\Firebase\ServiceAccount;
use \Kreait\Firebase\Contract\Auth;
use \Kreait\Laravel\Firebase\Facades\Firestore;
use App\User; 
use Session;
use Google\Cloud\Firestore\FirestoreClient;



class Pageaccueille extends Controller
{
    public function index()
    {   
        
        
        return view ('welcome');
    }
    public function contact()
    {   
        
        
        return view ('contact');
    }
    public function authentification(Request $request)
    {
        
        
        $auth = app('firebase.auth');
        
         
        $email= $request['email'];
        $clearTextPassword= $request['password'];

        if($request['role']=="utilisateur"){
            try {
                $resulatat=$auth->signInWithEmailAndPassword($email, $clearTextPassword);
                $firebaseId=$resulatat->firebaseUserId();
               Session::put('user_email', $email);
               Session::put('firebaseId', $firebaseId);
               
               return redirect('/dashboard');
           } catch (\Kreait\Firebase\Exception\Auth\InvalidPassword | \Kreait\Firebase\Exception\InvalidArgumentException | \Kreait\Firebase\Auth\SignIn\FailedToSignIn $e) {
               $message = $e->getMessage();
               Session::put('message', $message);
               return redirect('/')->withErrors(['msg' => $message]);
           }
       }
       else if($request['role']=="administateur"){
        try { 
            //$auth->signInWithEmailAndPassword($email, $clearTextPassword);
            
          //Session::put('user_email', $email);
           
           return redirect('/dashboardadmin');
       } catch (\Kreait\Firebase\Exception\Auth\InvalidPassword | \Kreait\Firebase\Exception\InvalidArgumentException | \Kreait\Firebase\Auth\SignIn\FailedToSignIn $e) {
           $message = $e->getMessage();
           Session::put('message', $message);
           return redirect('/')->withErrors(['msg' => $message]);
       }
   }
        
        // $signInResult = $auth->signInWithEmailAndPassword($email, $clearTextPassword);
        // return view('accueil');  
    }
    public function logout()
    {   
        $auth = app('firebase.auth');
        
        return view ('contact');
    }
    public function commande(Request $request)
    {
        
        
        try {
            $factory= (new Factory)->withServiceAccount(__DIR__.'/serre-13d47-firebase-adminsdk-47gw9-025f47c78f.json');
            $firestore=$factory->createFirestore();
            $database=$firestore->database();
            $commandeRef=$database->collection('CommandeSerre')->newDocument();
            $commandeRef->set([
                "Email"=> $request['email'],
                "Nom"=> $request['nom'],
                "Lieu"=> $request['lieu'],
                "Taille"=> $request['Taille'],
            ]);
          
            return redirect('/#commande')->with('success', 'Votre commande a été effectuée');
           
       } catch (FirebaseException $e) {
           $message = $e->getMessage();
          
           return redirect('/#commande')->with('erreur', $message);
       }
       
    }
    public function MesMessage(Request $request)
    {
          
          
        try {
            $factory= (new Factory)->withServiceAccount(__DIR__.'/serre-13d47-firebase-adminsdk-47gw9-025f47c78f.json');
            $firestore=$factory->createFirestore();
            $database=$firestore->database();
            $commandeRef=$database->collection('Contact')->newDocument();
            $commandeRef->set([
                "Email"=> $request['email'],
                "Nom"=> $request['nom'],
                "Numero"=> $request['numero'],
                "Sujet"=> $request['sujet'],
            ]);
            return redirect('/contact')->with('success', 'Message envoyé');
           
       } catch (FirebaseException $e) {
           $message = $e->getMessage();
          
           return redirect('/contact')->wwith('erreur', $message);
       }
       
    }
    
}
