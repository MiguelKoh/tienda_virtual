
fetch('http://localhost/carrito/ajax_productos.php')
  .then(response => response.json())
  .then(data => {
    console.log(data);
    // Hacer algo con los datos del JSON, como mostrarlos en una tabla o en un gráfico
  })
  .catch(error => {
    console.error('Error al recuperar el JSON:', error);
  });
