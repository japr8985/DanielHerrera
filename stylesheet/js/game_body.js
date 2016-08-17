function bodyPart(name){
	//se trabaja con el id de la etiqueta
	var part = name.id; //identifica cual parte del cuerpo se toco
	rutaAudio = '../stylesheet/audio/Body/'+part+'.mp3';//crea la ruta de audio *
	var show = name.id.toUpperCase();//hace uppercase a la parte del cuerpo que se toco
	document.getElementById("bodypart").value = show;//setea en el input para mostrar el texto
	var audio = new Audio(rutaAudio);//crea el objeto de audio con la ruta previamente creada *
	audio.play();//reproduce el audio
	audio.addEventListener("ended", function(){
		//evento para cuando finalice el audio 
		audio.currentTime = 0;
		//recargue la pagina
		//window.location.reload(); 
		});
}