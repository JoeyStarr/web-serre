@extends('layout')

@section('content') 
<div class="content">
      <div class="container-fluid">
        <div >
          
            
             

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
                  
                    
                    <th>Id Serre</th>
                    
                    <th>culture Actuelle</th>
                    <th>humidité du sol</th>
                    <th>humidité du l'air</th>
                    <th>temperature</th>
                    <th>Ph</th>
                    <th>CO2</th>
                    <th>Niveau d'eau</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($datas as $data1)
                        <tr>
                        @foreach($data1 as $data)
                                    
                                    <td>  {{ $data['id'] }}

                                    </td>
                                    
                                    <td>
                                    {{$data["kultSerre"] }}
                                    </td>
                                    
                                    <td>
                                    
                                    {{$data["dataSerre"]["sol"] }}
                                    </td>
                                    <td>
                                    {{$data["dataSerre"]["hm"] }}
                                    </td>
                                    <td>
                                    {{$data["dataSerre"]["tmp"] }} °
                                    </td>
                                    <td>
                                    {{$data["dataSerre"]["ph"] }} 
                                    </td>
                                    <td>
                                    {{$data["dataSerre"]["co2"] }}
                                  
                                    </td>
                                    <td>
                                    
                                    {{$data["dataSerre"]["niv"] }}
                                    </td>

                                    @endforeach   
                                    
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
  