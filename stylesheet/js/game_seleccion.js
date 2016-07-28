// Convert numbers to words
// copyright 25th July 2006, by Stephen Chapman http://javascript.about.com
// permission to use this Javascript on your web page is granted
// provided that all of the code (including this copyright notice) is
// used exactly as shown (you can change the numbering system if you wish)

// American Numbering System
var th = ['','thousand','million', 'billion','trillion'];
// uncomment this line for English Number System
// var th = ['','thousand','million', 'milliard','billion'];

var dg = ['zero','one','two','three','four', 'five','six','seven','eight','nine']; 
var tn = ['ten','eleven','twelve','thirteen', 'fourteen','fifteen','sixteen', 'seventeen','eighteen','nineteen']; 
var tw = ['twenty','thirty','forty','fifty', 'sixty','seventy','eighty','ninety']; 

function toWords(s){
    s = s.toString(); s = s.replace(/[\, ]/g,''); 
    if (s != parseFloat(s)) 
        return 'not a number'; 
    var x = s.indexOf('.'); 
    if (x == -1) 
        x = s.length; 
    if (x > 15) 
        return 'too big'; 
    var n = s.split(''); 
    var str = ''; 
    var sk = 0; 
    for (var i=0; i < x; i++){
        if ((x-i)%3==2) {
            if (n[i] == '1'){
                str += tn[Number(n[i+1])] + ' '; 
                i++; sk=1;
            }else if (n[i]!=0){
                str += tw[n[i]-2] + ' ';
                sk=1;
            }
        } else if (n[i]!=0){
            str += dg[n[i]] +' '; 
            if ((x-i)%3==0) 
                str += 'hundred ';
            sk=1;
        } if ((x-i)%3==1) {if (sk) str += th[(x-i-1)/3] + ' ';
        sk=0;
        }
    } if (x != s.length) {
    var y = s.length; 
    str += 'point '; 
        for (var i=x+1; i<y; i++) str += dg[n[i]] +' ';
    } 
    return str.replace(/\s+/g,' ');
    }


function shuffle(o){
    for(var j, x, i = o.length; i; j = Math.floor(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
    return o;
}
//generando numeros random
   

function init(){
    //iniciando valores
    var num = Math.floor(Math.random() * 10) + 1;
    var words = toWords(num);
    var opc1 = Math.floor(Math.random() * 10) + 1;
    var opc2 = Math.floor(Math.random() * 10) + 1 ;  
    var opc3 = Math.floor(Math.random() * 10) + 1 ;
    var nums = [num,opc1,opc2,opc3];
    var r = shuffle(nums); 
    //habilitando botones,
    document.getElementById("op_1").disabled = false;
    document.getElementById("op_2").disabled = false;
    document.getElementById("op_3").disabled = false;
    document.getElementById("op_4").disabled = false;     
        if ((num != opc1) && (num!= opc2) && (opc1!=opc2)&&(opc3!=opc1)&&(opc3!=opc2)&&(num!=opc3)){
        var x = document.getElementById("Number_to_Show");
        x.innerHTML = num;
        for (var i = btns.length - 1; i >= 0; i--) {
            btns[i].value = r[i];
            btns[i].innerHTML=toWords(r[i]);
            };
        }
        else{init();}
    }

function setScore(n){
    document.getElementById('score').innerHTML = n;
}

/*--------------------------------------------------------------------*/
/*---------------------Verificar que el valor del boton sea-----------*/
/*---------------------------igual al numero--------------------------*/

function verificar(val){
    
    var a = document.getElementById(val.id).value;
    var b = document.getElementById("Number_to_Show").innerHTML;
    if (a==b) {
        alert('Good');
        var aud = new Audio('../audio/Grabacion.m4a');
        aud.play();
        //console.log(aud);
        $("#panel").load(location.href + " #panel");
        setScore(score);
        location.reload();
    }
    else{
        //si los valores son diferentes
        //activa la propiedad disabled 
        score = score-25;
        document.getElementById(val.id).disabled = true;
        }
    }
