

const imprimirProductos = async (ruta) => {
  try {
    
    const seccionProductos = document.getElementById("productos")
    const respuestaProductos = await fetch(ruta);
    const productos = await respuestaProductos.json();
    /*console.log(productos);*/
    
    let contador = 0;
    let card = '';

    productos.forEach(producto => {
      
      contador++;
      if (contador % 4 === 1) {
        card += '<div class="row mx-3">';
      }
      card += `
        <div class="col-lg-3 col-md-4 col-12 mt-5 d-flex justify-content-center"> 
          <div class="card" style="width: 16rem;">
            <div class="d-flex justify-content-center mt-3"><img class="w-50" src="tienda/${producto.rutaimagen}" alt="Card image cap"></div>
            <div class="card-body">
              <h5 class="card-title" style="cursor:pointer"; onclick="imprimirProducto(${producto.id})">${producto.nombre}</h5>
              <p class="card-text">${producto.precio}</p>
              <p class="card-text">Tallas: ${producto.tallas}</p>
              <div class="d-flex justify-content-center"><a href="product_page.php?id=${producto.id}" class="btn btn-primary"><i class="fas fa-shopping-cart fa-sm"></i>  Agregar al carrito</a></div>
            </div>
          </div>
        </div>
      `;
      if (contador % 4 === 0 || contador === productos.length) {
        card += '</div>';
      }
    });

    seccionProductos.innerHTML = card;
  
  } catch (error) {
    console.error(error);
  }
};//fin de imprimirProductos

const cambiarTitulo = (descripcion)=>{
  tituloPagina = document.getElementById("titulo")
  
  tituloPagina.innerHTML = descripcion;
}


//Uniformes escolares
rutaUniformesEscolares = "http://localhost/carrito/obtenerUniformesEscolares.php"
document.addEventListener("DOMContentLoaded", imprimirProductos(rutaUniformesEscolares));
listaEscolares = document.getElementById("escolares")
listaEscolares.addEventListener('click',()=>{
  cambiarTitulo("Productos Escolares")
  imprimirProductos(rutaUniformesEscolares)
 })

//Uniformes deportivos
listaDeportivos = document.getElementById("deportivos")
rutaUniformesDeportivos = "http://localhost/carrito/obtenerUniformesDeportivos.php"

listaDeportivos.addEventListener('click',()=>{
  cambiarTitulo("Productos Deportivos")
  imprimirProductos(rutaUniformesDeportivos)
 })

bontonSidebar = document.getElementById("btn-sidebar");
contenido = document.getElementById("contenido");
sidebar = document.getElementById("sidebar")

bontonSidebar.addEventListener('click', ()=>{

  /*document.getElementById('sidebar').classList.toggle('active');*/
  sidebar.style.display="none";
  contenido.classList.remove("col-lg-10");
  contenido.classList.add("col-lg-12");
  /*sidebar.classList.toggle('active');*/

});


const imprimirProducto = async (id)=>{
  
  const seccionProductos = document.getElementById("productos")
  const respuestaProducto = await fetch(`http://localhost/carrito/obtenerProducto.php?id=${id}`)
  const producto = await respuestaProducto.json()
  console.log(producto[0].nombre)
  
  productoAtributos =
  `
  <div class="row mx-3">
    <div class="col-12 bg-light mt-5 d-flex justify-content-center"> 
      <p>${producto[0].nombre}</p>
      <p>${producto[0].precio}</p>
      <p>${producto[0].tallas}</p>
    </div>
  
  </div>
  
    `

    seccionProductos.innerHTML = productoAtributos

}
