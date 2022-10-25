@extends('layout')

@section('content') 
<div class="content" >
    <div class="container-fluid">
    <div >
          
            
             
            @foreach($datas as $data)
            <div class="card">
              <div class="card-header border-0">
                <h5 > Etat des Capteurs</h5>
                <h2> {{ $data['id'] }}</h2>
                <div class="card-tools">
                  
                  
                </div>
              </div>
              <div class="card-body table-responsive p-0" style= " margin-bottom: 50px ;">
              
                <div class="container mt-6">
  
                <div class="enligne" >
                      <form action="/modifReglage" method="post">
                        @csrf
                        <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="{{ $data['sysSerre']['s1']} " onclick="clickFn(event)" >
                        <label class="form-check-label" for="mySwitch">Lumiere</label>
                        </div>

                        <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="{{ $data['sysSerre']['s2']}" onclick="clickFn(event)"  >
                        <label class="form-check-label" for="mySwitch">fenetre </label>
                        </div>

                        <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="{{ $data['sysSerre']['s3']}" onclick="clickFn(event)" >
                        <label class="form-check-label" for="mySwitch">Autre</label>
                        </div>
                        <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="{{ $data['sysSerre']['s4']}" onclick="clickFn(event)" >
                        <label class="form-check-label" for="mySwitch">fenetre </label>
                        </div>

                        <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="{{ $data['sysSerre']['s5']}" onclick="clickFn(event)" >
                        <label class="form-check-label" for="mySwitch">Autre</label>
                        </div>
                      </form>
                </div>
                
                </div>
            </div>
          @endforeach  
          
          
         
    </div>
    
       
      </div>
     
    </div>
    <script>
              function clickFn(event) {
          const checkbox = event.currentTarget;
          checkbox.value = checkbox.checked 
          event.currentTarget.closest('form').submit()
        }

        
    </script>
@endsection
  