@extends('layoutadmin')

@section('content') 
<div class="content">
      <div class="container-fluid">
        <div >
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
              <h3>{{ $nbSerre }}</h3>
                <p>Serre Enregistré</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
              
            </div>
           
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
              <h3>{{ $nbCommande}}</h3>

                <p>Nombre de Commande</p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
              <h3>{{ $nbSerreNon }}</h3>


                <p>Serres pas attribuées</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-times"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>6</h3>

                <p>Differentes cultures sans les Serres</p>
              </div>
              <div class="icon">
                <i class="fa fa-leaf"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
        </div>
   <section class="content" style="padding-bottom: 50px;">
        
        <div class="container-fluid">
            <h2 class="text-center display-4">Recherche</h2>
            <div class="row">
                
                <div class="col-md-8 offset-md-2">
                
                    
                        <div class="input-group">
                        
                            <input type="search" id="myInput" class="form-control form-control-lg" placeholder="Recherche">
                            <div class="input-group-append">
                                
                            </div>
                        </div>
                  
                    
                </div>
            </div>
        </div>
    </section>
    

<!-- Modal -->

  </div>
</div>
            
             

            <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title"> </h3>
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
                  
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Lieu</th>
                    <th>Taille</th>
                    
                    
                  </tr>
                  </thead>
                  <tbody id="myTable">
                @foreach($commandesSerre as $document)
                   
                    <tr>
                                        
                            
                                        <td>
                                        {{ $document["Nom"]}}
                                        
                                       
                                        </td>
                                        <td>  {{ $document["Email"]}}

                                        </td>
                                        
                                        <td>  {{ $document["Lieu"]}}
                                        </td>
                                        <td>
                                        {{ $document["Taille"]}}
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
    <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
@endsection
  