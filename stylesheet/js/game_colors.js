//variable global para tener el color que se esta haciendo drag
var colorDrag = '';
//arreglo de images para jugar
//si se desean agregar mas imagenes
//solo debe colocar su ruta
var img = [ '../stylesheet/images/Colors/blue.png',
			'../stylesheet/images/Colors/brown.jpg',
			'../stylesheet/images/Colors/black.jpg',
			'../stylesheet/images/Colors/pink.jpg',
			'../stylesheet/images/Colors/purple.jpg',
			'../stylesheet/images/Colors/red.png',
			'../stylesheet/images/Colors/white.jpg',
			'../stylesheet/images/Colors/yellow.jpg'];
var arrayColors= ['pink','purple','red','white','yellow', 'blue', 'black','brown'];
//funcion para seleccionar aleatoriamente
//una imagen del arreglo
function getImgRandom(img){
	var x = Math.floor((Math.random() * img.length-1) + 1);
	return img[x];
	}
//funcion para obtener el nombre de la imagen
function getColorOfImage(string){
	//la ruta para todas las imagenes es la misma
	//la cadena '../style../images..Colors' posee 28 caracteres
	//por eso el 28
	//y solo se necesita el nombre del archivo
	var colorImg = string.substring(28);
	//eliminando extension .jpg
	colorImg=colorImg.split(".");
	return colorImg[0];
	}
function componentFromStr(numStr, percent) {
    var num = Math.max(0, parseInt(numStr, 10));
    return percent ?
        Math.floor(255 * Math.min(100, num) / 100) : Math.min(255, num);
}
//funcion para transformar de rgb a hexadecimal
function rgbToHex(rgb) {
    var rgbRegex = /^rgb\(\s*(-?\d+)(%?)\s*,\s*(-?\d+)(%?)\s*,\s*(-?\d+)(%?)\s*\)$/;
    var result, r, g, b, hex = "";
    if ( (result = rgbRegex.exec(rgb)) ) {
        r = componentFromStr(result[1], result[2]);
        g = componentFromStr(result[3], result[4]);
        b = componentFromStr(result[5], result[6]);
    
        hex = "#" + (0x1000000 + (r << 16) + (g << 8) + b).toString(16).slice(1);
    	}
    return hex;
	}
function colourHexToName(colour){
	var x = colour.toLowerCase();
	var colours = [];
	colours["#000000"] = "black";
	colours["#0000ff"] = "blue";
	colours["#a52a2a"] = "brown";
	colours["#008000"] = "green";
	colours["#ffc0cb"] = "pink";
	colours["#800080"] = "purple";
	colours["#ff0000"] = "red";
	colours["#ffffff"] = "white";
	colours["#ffff00"] = "yellow";
	console.log(colours[colour]);
    if (colours[colour] != 'undefined'){
  		return colours[colour];
    	}
    else{
    	return false;
    	}

	//si se quiere mas colores aqui estan solo se tienen que sacar de ese hash y colocarlo
	//en el de arriba invirtiendo el orden
    /*var colours = {"aliceblue":"#f0f8ff","antiquewhite":"#faebd7","aqua":"#00ffff","aquamarine":"#7fffd4","azure":"#f0ffff",
    "beige":"#f5f5dc","bisque":"#ffe4c4",,"blanchedalmond":"#ffebcd",,"blueviolet":"#8a2be2",,"burlywood":"#deb887",
    "cadetblue":"#5f9ea0","chartreuse":"#7fff00","chocolate":"#d2691e","coral":"#ff7f50","cornflowerblue":"#6495ed","cornsilk":"#fff8dc","crimson":"#dc143c","cyan":"#00ffff",
    "darkblue":"#00008b","darkcyan":"#008b8b","darkgoldenrod":"#b8860b","darkgray":"#a9a9a9","darkgreen":"#006400","darkkhaki":"#bdb76b","darkmagenta":"#8b008b","darkolivegreen":"#556b2f",
    "darkorange":"#ff8c00","darkorchid":"#9932cc","darkred":"#8b0000","darksalmon":"#e9967a","darkseagreen":"#8fbc8f","darkslateblue":"#483d8b","darkslategray":"#2f4f4f","darkturquoise":"#00ced1",
    "darkviolet":"#9400d3","deeppink":"#ff1493","deepskyblue":"#00bfff","dimgray":"#696969","dodgerblue":"#1e90ff",
    "firebrick":"#b22222","floralwhite":"#fffaf0","forestgreen":"#228b22","fuchsia":"#ff00ff",
    "gainsboro":"#dcdcdc","ghostwhite":"#f8f8ff","gold":"#ffd700","goldenrod":"#daa520","gray":"#808080",,"greenyellow":"#adff2f",
    "honeydew":"#f0fff0","hotpink":"#ff69b4",
    "indianred ":"#cd5c5c","indigo":"#4b0082","ivory":"#fffff0","khaki":"#f0e68c",
    "lavender":"#e6e6fa","lavenderblush":"#fff0f5","lawngreen":"#7cfc00","lemonchiffon":"#fffacd","lightblue":"#add8e6","lightcoral":"#f08080","lightcyan":"#e0ffff","lightgoldenrodyellow":"#fafad2",
    "lightgrey":"#d3d3d3","lightgreen":"#90ee90","lightpink":"#ffb6c1","lightsalmon":"#ffa07a","lightseagreen":"#20b2aa","lightskyblue":"#87cefa","lightslategray":"#778899","lightsteelblue":"#b0c4de",
    "lightyellow":"#ffffe0","lime":"#00ff00","limegreen":"#32cd32","linen":"#faf0e6",
    "magenta":"#ff00ff","maroon":"#800000","mediumaquamarine":"#66cdaa","mediumblue":"#0000cd","mediumorchid":"#ba55d3","mediumpurple":"#9370d8","mediumseagreen":"#3cb371","mediumslateblue":"#7b68ee",
    "mediumspringgreen":"#00fa9a","mediumturquoise":"#48d1cc","mediumvioletred":"#c71585","midnightblue":"#191970","mintcream":"#f5fffa","mistyrose":"#ffe4e1","moccasin":"#ffe4b5",
    "navajowhite":"#ffdead","navy":"#000080",
    "oldlace":"#fdf5e6","olive":"#808000","olivedrab":"#6b8e23","orange":"#ffa500","orangered":"#ff4500","orchid":"#da70d6",
    "palegoldenrod":"#eee8aa","palegreen":"#98fb98","paleturquoise":"#afeeee","palevioletred":"#d87093","papayawhip":"#ffefd5","peachpuff":"#ffdab9","peru":"#cd853f",,"plum":"#dda0dd","powderblue":"#b0e0e6",,
    ,"rosybrown":"#bc8f8f","royalblue":"#4169e1",
    "saddlebrown":"#8b4513","salmon":"#fa8072","sandybrown":"#f4a460","seagreen":"#2e8b57","seashell":"#fff5ee","sienna":"#a0522d","silver":"#c0c0c0","skyblue":"#87ceeb","slateblue":"#6a5acd","slategray":"#708090","snow":"#fffafa","springgreen":"#00ff7f","steelblue":"#4682b4",
    "tan":"#d2b48c","teal":"#008080","thistle":"#d8bfd8","tomato":"#ff6347","turquoise":"#40e0d0",
    "violet":"#ee82ee",
    "wheat":"#f5deb3",,"whitesmoke":"#f5f5f5",
    ,"yellowgreen":"#9acd32"};*/
    
    	
	}
function drag(opc){
	var drag = $('#opc'+opc).css('background-color');
	colorDrag = drag;
	}
function drop(c,s){
	var colorDrop = rgbToHex(s);
	colorDrop = colourHexToName(colorDrop);
	var str = c+' '+colorDrop;
	str = str.split(' ');
	console.log(str);
	var igualdad = (str[0] == str[1]) ? true : false;
	if (igualdad) {
		$('#div1').css('background-color',c);
		var audio = new Audio('../stylesheet/audio/Colors/'+c+'.mp3');
        audio.play();
        audio.addEventListener("ended", function(){
     	audio.currentTime = 0;
     		console.log("ended");
     		window.location.reload();
			});
        //window.location.reload();
	}//reproduce el audio del color (c)
	else{
		alert('Wrong Color');
	}
		//alert('funciona el evento drop');
	}
function allowDrop(ev) {
    ev.preventDefault();
	}
function shuffle(o){
    for(var j, x, i = o.length; i; j = Math.floor(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
    return o;
	}
function randomOpc(opc){
	//se toma el arreglo global de colores
	//se le hace shuffle
	var c = shuffle(arrayColors);
	//arreglo aux 
	var opcColors =[];//arreglo de colores para mostrar en pantalla
	//se dispone de 4 casillas
	//de las cuales 1 es la correcta
	var i = 0;
	while(opcColors.length < 3){
		if (c[i]!=opc) {
			opcColors.push(c[i]);
		}
		i++;
		console.log(i);
	}
	//la ultima casilla sera para la opcion correct
	opcColors.push(opc);
	console.log(opcColors);
	//se vuelve a mezclar el arreglo
	return shuffle(opcColors);
	}