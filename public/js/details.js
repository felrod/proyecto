window.onload=function() {


  let checkout = document.querySelector('#check');
  // console.log(checkout);

  checkout.addEventListener('click',(event)=>{
    event.preventDefault();
    let id = checkout.getAttribute('data-id');
    let name = checkout.getAttribute('data-name');
    // // console.log(id);
    let carrito = {
      productos: []
    };

    if (leerCookie('carrito')) {
        //console.log('entroo');
        carrito= JSON.parse(leerCookie('carrito'));
        carrito.productos.push(id);
        //console.log(carrito);
        guardarCookie('carrito',carrito);
        console.log(JSON.parse(leerCookie('carrito')));
    }else {

      carrito.productos.push(id);
      //console.log(carrito);
      guardarCookie('carrito',carrito);
    }
    //console.log(name);
    swal({
    title: name,
    text: "Fue agregado a tu carrito de compras",
    icon: "success",
    button: "Continuar con mis compras",
  });

  // swal("name", "fue agregado a tu carrito", "success");
});




function guardarCookie(clave,valor){

  let json= JSON.stringify(valor);
  document.cookie =""+clave+"="+json+"; max-age=3600; path=/";

}

function leerCookie(clave) {

 let lista = document.cookie.split(";");
 let micookie= null;
 for (i in lista) {
     let busca = lista[i].search(clave);
     if (busca > -1) { micookie=lista[i];}
   }
  if (micookie == null) {
      return false;
   }else {
     let igual = micookie.indexOf("=");
     let valor = micookie.substring(igual+1);
     return valor;
   }

 }


};


//document.cookie = "nombrecookie=valorcookie; max-age=3600; path=/";
