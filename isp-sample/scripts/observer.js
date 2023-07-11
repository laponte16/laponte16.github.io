const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        /*Aqui se especifica quien es el blanco de interes*/
        if(entry.target.classList.contains('shaky') === true)
        {
            /*Aqui se pregunta si el blanco esta interceptando la vista*/
            if (entry.isIntersecting) {
                entry.target.classList.add('shakyA');  
              }
              /*Aqui se elimina la clase agregada al salir de la vista*/ 
              else{
                entry.target.classList.remove('shakyA');
              }
        }
        if(entry.target.classList.contains('about') === true)
        {
            /*Aqui se pregunta si el blanco esta interceptando la vista*/
            if (entry.isIntersecting) {
              entry.target.classList.add('bob-side');
              }
              /*Aqui se elimina la clase agregada al salir de la vista*/ 
              else{
                entry.target.classList.remove('bob-side');
              }
        }
        if(entry.target.classList.contains('about2') === true)
        {
            /*Aqui se pregunta si el blanco esta interceptando la vista*/
            if (entry.isIntersecting) {
              entry.target.classList.add('bob-side2');
              }
              /*Aqui se elimina la clase agregada al salir de la vista*/ 
              else{
                entry.target.classList.remove('bob-side2');
              }
        }    
    });
  });
  /*Aqui se elige quienes son los elementos a observar. En este caso, se uso un forEach para tomar todos los que existan, tomados como un array. De lo contrario, se pudo usar querySelector solamente, el cual retorna el primer elemento con el nombre pedido*/
  document.querySelectorAll('.shaky').forEach(
    Element => observer.observe(Element));
  document.querySelectorAll('.about').forEach(
    Element => observer.observe(Element));
  document.querySelectorAll('.about2').forEach(
    Element => observer.observe(Element));
