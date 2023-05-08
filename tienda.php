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
       <div class="w-100 d-flex justify-content-center py-3">
       <img src="imagenes/logo-uady-blanco.png" alt="Mountain View" class="logoUady d-none d-xl-block d-lg-block d-md-block img-fluid">
      </div>
      <ul>
      
        <li>Escolares</li>
        <li>Deportivos</li>
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
      
    <div class="col-lg-10 col-md-10 col-sm-12">
        
         <div class="row">
            <div class="col-12 px-0"> 
                <img src="imagenes/banner.png" class="img-fluid" width="100%">
            </div>
        
        </div>
      
        

        <div class="row fondo">
          <div class="col-12 d-flex justify-content-center align-items-center fondoProductos">
              <h4 class="text-white my-2 fuenteTitulo">Productos</h4>
           
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

    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="script.js"></script>
    
  </body>
</html>
