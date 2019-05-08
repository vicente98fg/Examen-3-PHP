function comprobarCampos(){
  let nombre=document.getElementById('nombre').value;
  let apellidos=document.getElementById('apellidos').value;
  let preciohoras=document.getElementById('precio_hora').value;
  let error=false;

  if(nombre==""){
    alert("No has introducido el nombre");
    error=true;
  }
  if (apellidos=="") {
    alert("No has introducido los apellidos")
    error=true;
  }
  if (preciohoras=="") {
    alert("No has introducido el precio hora");
    error=true;
  }
  if (error===true) {
    return true;
  }
}