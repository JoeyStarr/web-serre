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
    @if (\Session::has('success'))
            <div class="alert alert-light">
                <ul>
                    {!! \Session::get('success') !!}
                </ul>
            </div>
    @endif
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter" style="margin-bottom: 50px;">
  Creer une nouvelle serre
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"  >Creer une nouvelle serre</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action=" {{route('serre')}} "method="post">
      @csrf
      <div class="modal-body">
    
        Voulez Vous vraiment Creer une nouvelle serre
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-outline-danger" data-dismiss="modal" >rafrachir</button>
        <button type="submit" class="btn btn-outline-success">Creer</button>
        
      </div>
    </div>
</form>
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
                    <th>Id Serre</th>
                    <th>Hash </th>
                    <th>culture Actuelle</th>
                    <th>humidité du sol</th>
                    <th>humidité du l'air</th>
                    <th>temperature</th>
                    <th>Ph</th>
                    <th>CO2</th>
                    <th>niveau d'eau</th>
                    
                  </tr>
                  </thead>
                  <tbody id="myTable">
                    @foreach($datas as $data)
                        
                    
                             
                        <tr>
                       
                              
                                    <td>
                                    
                                  
                                    </td>
                                    <td> {{ $data['id'] }}

                                    </td>
                                    
                                    <td>
                                    {{ $data['hashSerre'] }}
                                   
                                    </td>
                                    <td>
                                    {{ $data['culture'] }}
                                    </td>
                                      <?php 
                                           
                                      if ($isEmpty = empty($data['dataSerre'])){
                                        
                                        echo "<td></td>";
                                      }else {
                                        $sol=$data['dataSerre']['sol'];
                                        echo "<td>$sol</td>";
                                      };
                                      
                                      ?> 
                                      <?php 
                                           
                                           if ($isEmpty = empty($data['dataSerre'])){
                                             
                                             echo "<td></td>";
                                           }else {
                                             $ph=$data['dataSerre']['ph'];
                                             echo "<td>$ph</td>";
                                           };
                                           
                                           ?> 
                                       
                                            <?php 
                                           
                                           if ($isEmpty = empty($data['dataSerre'])){
                                             
                                             echo "<td></td>";
                                           }else {
                                             $tmp=$data['dataSerre']['tmp'];
                                             echo "<td>$tmp</td>";
                                           };
                                           
                                           ?> 
                                            <?php 
                                           
                                           if ($isEmpty = empty($data['dataSerre'])){
                                             
                                             echo "<td></td>";
                                           }else {
                                             $ph=$data['dataSerre']['ph'];
                                             echo "<td>$ph</td>";
                                           };
                                           
                                           ?> 
                                            <?php 
                                           
                                           if ($isEmpty = empty($data['dataSerre'])){
                                             
                                             echo "<td></td>";
                                           }else {
                                             $co2=$data['dataSerre']['co2'];
                                             echo "<td>$co2</td>";
                                           };
                                           
                                           ?> 
                                            <?php 
                                           
                                           if ($isEmpty = empty($data['dataSerre'])){
                                             
                                             echo "<td></td>";
                                           }else {
                                             $niv=$data['dataSerre']['niv'];
                                             echo "<td>$niv</td>";
                                           };
                                           
                                           ?> 
                                      
                                    
                                    
                                    
                                    
                                     
                                    
                                            
                                     
                                             
                          
                      
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
  