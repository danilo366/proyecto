
//CONVERIT A MAYUSCULAS TODOS LOS INPUT
$(function() { 
  $('input').keyup(function(e) {
     this.value = this.value.toLocaleUpperCase();
    }); 
  });

//funcion para calcular la edad de un usuario
function agregarTexto(){    
    const fecha_nacimiento = document.getElementById('fec_nacimiento').value.substr(0,4);
    console.log(fecha_nacimiento);
    let year = new Date();
    let actual = year.getFullYear();
    let edad_usuario = actual - fecha_nacimiento;
    console.log(edad_usuario);
    document.getElementById('edad').value = edad_usuario;
}

