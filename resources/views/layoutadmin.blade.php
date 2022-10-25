<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SERRESON ESPACE ADMIN </title>
  <link rel="shortcut icon" href="/serreson.ico" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
 
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/style.css">

 
 

  <link rel="stylesheet" href="dist/css/adminlte.min.css"> 
</head>

<body class="sidebar-mini" >
<div class="wrapper">
 
  <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
   
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
      
      
      
    </ul>

   
    <ul class="navbar-nav ml-auto">
   
      
      
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
         
      </li>
      <li class="nav-item ">
        
        <a class="nav-link"  href="/">
        
        <i class="fa-solid fa-right-from-bracket" style="color:green"></i>
        
        </a>
        
      </li>
      
      
    </ul>
  </nav>
 
  <aside class="main-sidebar sidebar-dark-primary elevation-4" >
    
    <a href="#" class="brand-link">
      <img src="assets/images/serreson.png" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SERRESON ADMIN</span>
    </a>

    
    <div class="sidebar">
      
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         
          <li class="nav-item">
            <a href="/dashboardadmin" class="nav-link ">
            <i class="fa fa-home" aria-hidden="true" style="color:green"></i>
              <p>
                Dashboard 
               
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="/commandeadmin" class="nav-link">
              <i class="nav-icon fas fa-th"style="color:green"></i>
              <p>
              Mes Commandes 
                
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="/listeCommande" class="nav-link">
              <i class="nav-icon fas fa-th"style="color:green"></i>
              <p>
              Commandes de serre
                
              </p>
            </a>
          </li>
          
          
         
          
   
        </ul>
        
      </nav>
     
      
    </div>
    
    

  </aside>
    
  
  <div class="content-wrapper">
    
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6" style="border-raduis =1px">
            <h1 class="m-0" style="align-self:center">SERRESON ADMINISTRATEUR</h1>
          </div>
          
        </div>
      </div>
    </div>
   
        @yield('content')
   
  </div>
  
  <aside class="control-sidebar control-sidebar-dark">
   
  </aside>
  
  
</div>

<script src="plugins/jquery/jquery.min.js"></script>

<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="dist/js/adminlte.js"></script>




<script src="dist/js/demo.js"></script>

<script src="dist/js/pages/dashboard3.js"></script>
</body>
</html>
