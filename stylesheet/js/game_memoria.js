//funcion para capturar parametro desde URL
/*function getURLParameter(name) {
  return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search)||[,""])[1].replace(/\+/g, '%20'))||null
}*/
/*--------------------------------------------*/
// nivel 1
// **				2 imagenes
// **
// nivel 2
// ****
// ****				6 imagenes
// ****
// nivel 3			Generar matriz [nivel+1][nivel+1]
// ****
// ****
// ****				9
// ****
// nivel 4
// *****
// *****
// *****			12
// *****
// *****
/*--------------------------------------------*/

var memory_array = ['../stylesheet/images/memory/car.jpg'		,'../stylesheet/images/memory/car.jpg',//1
						'../stylesheet/images/memory/tree.jpg'		,'../stylesheet/images/memory/tree.jpg',//2
						'../stylesheet/images/memory/house.png'		,'../stylesheet/images/memory/house.png',//3
						'../stylesheet/images/memory/cookie.jpg'	,'../stylesheet/images/memory/cookie.jpg',//4
						'../stylesheet/images/memory/bike.jpg'		,'../stylesheet/images/memory/bike.jpg',//5
						'../stylesheet/images/memory/dog.jpg'		,'../stylesheet/images/memory/dog.jpg'];//6
var score = 0;
var memory_values = [];
var memory_tile_ids = [];
var tiles_flipped = 0;
Array.prototype.memory_tile_shuffle = function(){
    var i = this.length, j, temp;
    while(--i > 0){
        j = Math.floor(Math.random() * (i+1));
        temp = this[j];
        this[j] = this[i];
        this[i] = temp;
    }
}
//crea tablero
function newBoard(){
	tiles_flipped = 0;
	var output = '';
    memory_array.memory_tile_shuffle();
	for(var i = 0; i < memory_array.length; i++){
		output += '<div class="col-xs-9" id="tile_'+i+'" style="background: url(../stylesheet/images/back/memory_bg.jpg);" onclick="memoryFlipTile(this,\''+memory_array[i]+'\')" ></div>';
	}
	document.getElementById('memory_board').innerHTML = output;
}


//giro y comprobacion
function memoryFlipTile(tile,val){
	if(tile.innerHTML == "" && memory_values.length < 2){
		//fondo de imagen a mostrar
		tile.style.background = '#FFF';
		//seleccionando imagen a mostrar
		tile.style.backgroundImage = 'url('+val+')';
		//no se repita el fondo
		tile.style.backgroundRepeat = 'no-repeat';
		if(memory_values.length == 0){
			memory_values.push(val);
			memory_tile_ids.push(tile.id);
		} else if(memory_values.length == 1){
			memory_values.push(val);
			memory_tile_ids.push(tile.id);
			//si el primer cuadro es igual al segundo
			if(memory_values[0] == memory_values[1]){
				tiles_flipped += 2;
				// Clear both arrays
				memory_values = [];
            	memory_tile_ids = [];
            	//val viene con la extension y ruta
            	//se debe obtener solo el nombre del archivo
            	var filename = val.replace(/^.*[\\\/]/, '');
            	filename = filename.split(".");
            	//[nombre_del_archivo,extension]
            	var file = filename[0];
            	//alert('find it'); si son iguales reproducir audio correspondiente
            	var audio = new Audio('../stylesheet/audio/'+file+'.mp3');
            	audio.play();
				// Check to see if the whole board is cleared
				if(tiles_flipped == memory_array.length){
					alert("Board cleared... generating new board");
					document.getElementById('memory_board').innerHTML = "";
					newBoard();
					//document.getElementById('score').value ="";
				}
			}
			else{
				function flip2Back(){
				    // Flip the 2 tiles back over
				    var tile_1 = document.getElementById(memory_tile_ids[0]);
				    var tile_2 = document.getElementById(memory_tile_ids[1]);
				    tile_1.style.background = 'url(../stylesheet/images/back/memory_bg.jpg) no-repeat';
            	    tile_1.innerHTML = "";
				    tile_2.style.background = 'url(../stylesheet/images/back/memory_bg.jpg) no-repeat';
            	    tile_2.innerHTML = "";
				    // Clear both arrays
				    memory_values = [];
            	    memory_tile_ids = [];
				}
				setTimeout(flip2Back, 500);
			}
		}
	}
}

$(function () {
    $('.navbar-toggle').click(function () {
        $('.navbar-nav').toggleClass('slide-in');
        $('.side-body').toggleClass('body-slide-in');
        $('#search').removeClass('in').addClass('collapse').slideUp(200);

        /// uncomment code for absolute positioning tweek see top comment in css
        //$('.absolute-wrapper').toggleClass('slide-in');
        
    });
   
   // Remove menu for searching
   $('#search-trigger').click(function () {
        $('.navbar-nav').removeClass('slide-in');
        $('.side-body').removeClass('body-slide-in');

        /// uncomment code for absolute positioning tweek see top comment in css
        //$('.absolute-wrapper').removeClass('slide-in');

    });
});