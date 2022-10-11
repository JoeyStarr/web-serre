@extends('layout')

@section('content') 
<div class="content">
      <div class="container-fluid">
        <div >
            <div class="card">
              <div class="card-header border-0">
                <h3 > Mes Commandes</h3>
                <div class="card-tools">
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-download"></i>
                  </a>
                  
                </div>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                  <th>Id</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    
                    <th>Produit</th>
                    <th>Prix</th>
                    <th>Numero</th>
                    
                    <th>Lieu de livraison</th>
                    <th>Etat</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                @foreach($commandes as $document)
                   
                    <tr>
                                        <td>1</td>
                            
                                        <td>
                                        {{ $document["Nom"]}}
                                        
                                       
                                        </td>
                                        <td>  {{ $document["Prenom"]}}

                                        </td>
                                        
                                        <td>  {{ $document["Product"]}}
                                        </td>
                                        <td>
                                        {{ $document["Price"]}}
                                        </td>
                                    
                                        <td>
                                        {{ $document["Numero"]}}
                                        </td>
                                        <td>
                                        {{ $document["LieuLivraison"]}}
                                        </td>
                                        <td>
                                        <i class="fa-solid fa-check"></i>
                                        Non traité
                                        </td>
                                        
                                        
                                    
                            </tr>
                @endforeach
                        
                        
                        
                        
                  </tbody>
                </table>
              </div>
            </div>
          
          
         
        </div>
       
      </div>
     
    </div>
@endsection
  