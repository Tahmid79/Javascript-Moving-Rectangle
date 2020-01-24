var pos = 0 ;
var box = document.getElementById("box");
var y  = document.getElementById("btn") ;

y.onclick = function () {
    var t = setInterval(move , 50) ;
}

var rst = document.getElementById("res");

rst.onclick = function () {
    box.style.left =" 0";
    pos = 0;
    var t = setInterval(move,50) ;
}

function move() {
    if( pos>= 897){
        clearInterval(t);
    }
    else
    {
        pos = pos +5 ;
        box.style.left = pos + "px" ;
    }
}

var cnt = document.getElementById("container");

box.addEventListener("mouseenter",hover);
cnt.addEventListener("mouseenter",hover);

function hover() {


    box.onmouseenter = function () {

        box.style.boxShadow = "inset 0 0 30px #ff1cb2";
        box.style.opacity = "0.7";
        box.style.cursor = "pointer";

    }


    cnt.onmouseenter = function () {
        cnt.style.opacity = "0.5";
        cnt.style.boxShadow = "inset 0 0 30px #2c55ff";
        cnt.style.cursor = "pointer";

    }

    cnt.onmouseout = function() {
        cnt.style.opacity = "";
        cnt.style.boxShadow = "";
        cnt.style.cursor = "";
    }

    box.onmouseout = function () {

        box.style.boxShadow = "";
        box.style.opacity = "";
        box.style.cursor = "";

    }

}





















