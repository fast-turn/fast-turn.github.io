function ActualizarHora(){
    var fecha = new Date();
    var segundos = fecha.getSeconds();
    var minutos = fecha.getMinutes();
    var horas = fecha.getHours();

    var elementoHoras = document.getElementById("pHoras"); 
     var elementoMinutos = document.getElementById("pMinutos");
    var elementoSegundos = document.getElementById("pSegundos");

// elementoHoras.textContent = horas;
  //  elementoMinutos.textContent = minutos;
   // elementoSegundos.textContent = segundos;
}   