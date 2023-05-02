
fetch('http://localhost/carrito/ajax_productos.php')
  .then(response => response.json())
  .then(productos => {
  
     productos.forEach((producto) => {
      console.log(producto);
    });
  })
  .catch(error => {
    console.error('Error al recuperar el JSON:', error);
  });




