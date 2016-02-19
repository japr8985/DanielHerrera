function getURLParameter(name) {
  return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search)||[,""])[1].replace(/\+/g, '%20'))||null
}

var msj = getURLParameter('msj');
if (msj==2) {console.log('Existia una sesion anterior, la cual ha sido cerrada, por favor inicie sesion nuevamente')};
if (msj==1) {console.log('Usuario o password no validos')};