<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="styles.css" type="text/css"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Tienda virtual</title>
    <link rel="shortcut icon" type="image/x-icon" href="imagenes/favicon_uady.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-************" crossorigin="anonymous" />
    
  </head>
  <body class="fondo">
  
    <div class="container-fluid">
     
      
      
       <!-- sidebar y productos-->
    <div class="row">
      

      <div class="col-lg-2 col-md-2 col-sm-12 fondoSidebar" id="sidebar">
       

       <!--fixed --><div class="fixed">
       <div class="row my-5">
        <div class="col-4 d-flex justify-content-center align-items-center px-0 ">
       <div id="btn-sidebar">
        <span class="text-white">&#9776;</span>
      </div>
     </div>
      <div class="col-8 px-0">
       <img src="imagenes/logo-uady-blanco.png" alt="Mountain View" class="d-none d-xl-block d-lg-block d-md-block img-fluid w-75">
       </div>
      </div>
      
      
      
      
      <ul class="">
      
        <li id= "escolares">Escolares</li>
        <li id="deportivos">Deportivos</li>
        <li>
                <div>
                 
                  <div>
                    <span><i class="fas fa-shopping-cart"></i></span>
                    <span>Mi carrito</span>
                  </div>  
                  
                </div> 
            </li>
       <li>
                <div>
                 
                  <div>
                    <span><i class="fas fa-sign-out-alt" aria-hidden="true"></i></span>
                    <span>Salir</span>
                  </div>  
                  
                </div> 
            </li>
        
      

      </ul>
</div>  <!--fixed -->
      </div>
      
    <div class="col-lg-10 col-md-10 col-sm-12" id="contenido">
        
         <div class="row">
            <div class="col-12 px-0"> 
                <img src="imagenes/bannerV3.png" class="img-fluid" width="100%">
            </div>
        
        </div>
      
        

        <div class="row fondo">
          <div class="col-12 d-flex justify-content-center align-items-center fondoProductos">
              <h4 class="text-white my-2 fuenteTitulo" id="titulo">Productos Escolares</h4>
           
          </div>
          
      </div>

         
         <div id="productos"></div>
    
    </div>
     
     </div><!-- sidebar y productos-->
        
     
     
      
       <div class="row mt-5 pb-3" id="footer">
       <div class="col">
        
       </div>

      </div>

</div>  

    

<script src="script.js"></script>
    
  </body>
</html>
