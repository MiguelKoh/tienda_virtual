seccionProductos = document.getElementById("productos")

const obtenerDatos = async () => {
  try {
    const respuestaProductos = await fetch("http://localhost/carrito/obtener_datos_producto.php");
    const productos = await respuestaProductos.json();
    console.log(productos);
      let contador = 0;
      let seccion = '';

      productos.forEach(producto => {
        contador++;
        seccion += `
          <div class="row">
          <div class= "col-3 mt-4"> 
          <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="tienda/${producto.rutaimagen}" alt="Card image cap">
              <div class="card-body">
              <h5 class="card-title">${producto.nombre}</h5>
              <p class="card-text">${producto.precio}</p>
              <p class="card-text">Tallas: ${producto.tallas}</p>
              <a href="#" class="btn btn-primary">Agregar al carrito </a>
              </div>
            </div>
          </div>`
          
        if (contador % 3 === 0) {
          seccion += `</div>`;
        }
        
        seccionProductos.innerHTML = seccion;
      });
  
  } catch (error) {
    console.error(error);
  }
};

document.addEventListener("DOMContentLoaded", obtenerDatos);
