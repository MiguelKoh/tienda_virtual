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
      if (contador % 4 === 1) {
        seccion += '<div class="row">';
      }
      seccion += `
        <div class="col-lg-3 col-md-4 col-12 mt-5 d-flex justify-content-center"> 
          <div class="card" style="width: 18rem;">
            <div class="d-flex justify-content-center mt-3"><img class="w-75" src="tienda/${producto.rutaimagen}" alt="Card image cap"></div>
            <div class="card-body">
              <h5 class="card-title">${producto.nombre}</h5>
              <p class="card-text">${producto.precio}</p>
              <p class="card-text">Tallas: ${producto.tallas}</p>
              <a href="#" class="btn btn-primary">Agregar al carrito </a>
            </div>
          </div>
        </div>
      `;
      if (contador % 4 === 0 || contador === productos.length) {
        seccion += '</div>';
      }
    });

    seccionProductos.innerHTML = seccion;
  
  } catch (error) {
    console.error(error);
  }
};

document.addEventListener("DOMContentLoaded", obtenerDatos);
