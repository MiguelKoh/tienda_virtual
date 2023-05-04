
fetch('http://localhost/carrito/ajax_productos2.php')
  .then(response => response.json())
  .then(productos => console.log(productos))
  .catch(error => {
    console.error('Error al recuperar el JSON:', error);
  });




