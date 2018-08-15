var slideItem = 0;
var slide = 0;
window.onload = function() {
	setInterval(passarSlide, 2000);
}

function passarSlide() {
	var slidewidth = document.getElementById("slideshow").offsetWidth;

	if(slideItem >= 2){
		slideItem = 0;
	} else{
		slideItem++;
	}
	document.getElementsByClassName("slideshow-area")[0].style.marginLeft = "-"+(slidewidth * slideItem)+"px";
	corBolinhas();
}
function mudarSlide(pos) {
	slideItem = pos;
	var slidewidth = document.getElementById("slideshow").offsetWidth;
	document.getElementsByClassName("slideshow-area")[0].style.marginLeft = "-"+(slidewidth * slideItem)+"px";
	corBolinhas();
}
function mudarMinimg(pos) {
	slideItem = pos;
	var slidewidth = document.getElementById("galeria").offsetWidth;
	document.getElementsByClassName("galeria-area")[0].style.marginLeft = "-"+(slidewidth * slideItem)+"px";
}
function mudaResp(pos) {
	slideItem = pos;
	var slidewidth = document.getElementById("espshow2").offsetWidth;
	document.getElementsByClassName("espshow-area2")[0].style.marginLeft = "-"+(slidewidth * slideItem)+"px";
	espHover();
}
function mudaR(pos) {
	slideItem = pos;
	var slidewidth = document.getElementById("espshow").offsetWidth;
	document.getElementsByClassName("espshow-area")[0].style.marginLeft = "-"+(slidewidth * slideItem)+"px";
	espHover();
	corBolinhasesp();
} 
function menu(){
	document.getElementById("mobile-nav").style.display = "block";
}
function unMenu() {
	document.getElementById("mobile-nav").style.display = "none";
}
function showagenda(){
	document.getElementById("form").style.display = "block";
}
function noShowagenda(){
	document.getElementById("form").style.display = "none";
}
function mudarC(pos){

	slideItem = pos;
	if(slide <= 2 ){
		
		var slidewidth = document.getElementById("clinicoshow").offsetWidth;
		document.getElementsByClassName("clinicoshow-area")[0].style.marginLeft = "-"+(slidewidth * slide)+"px";

		slide = slideItem + slide;
		
		if(slide == 3){
			slide=0;
		}
	
	}
}
function mudaCo(pos) {
	slideItem = pos;
	var slidewidth = document.getElementById("conhecashow").offsetWidth;
	document.getElementsByClassName("conhecashow-area")[0].style.marginLeft = "-"+(slidewidth * slideItem)+"px";
	corBolinhasconheca();
	
}
function mudagale(pos) {
	slideItem = pos;
	var slidewidth = document.getElementById("galeria").offsetWidth;
	document.getElementsByClassName("galeria-area")[0].style.marginLeft = "-"+(slidewidth * slideItem)+"px";
	corBolinhasgale();
	
}

function corBolinhas() {
	var b = document.getElementsByClassName("bolinha");
	for (i = 0; i < b.length; i++){
		b[i].className = b[i].className.replace(" ativo", "");
	}
	b[slideItem].className += " ativo";
}
function corBolinhasgale() {
	var b = document.getElementsByClassName("g");
	for (i = 0; i < b.length; i++){
		b[i].className = b[i].className.replace(" ativo", "");
	}
	b[slideItem].className += " ativo";
}
function corBolinhasesp() {
	var b = document.getElementsByClassName("b2");
	for (i = 0; i < b.length; i++){
		b[i].className = b[i].className.replace(" ativo", "");
	}
	b[slideItem].className += " ativo";
}
function corBolinhasconheca() {
	var b = document.getElementsByClassName("b3");
	for (i = 0; i < b.length; i++){
		b[i].className = b[i].className.replace(" ativator", "");
	}
	b[slideItem].className += " ativator";
}

function espHover() {
	var b = document.getElementsByClassName("esp");
	for (i = 0; i < b.length; i++){
		b[i].className = b[i].className.replace(" active", "");
	}
	b[slideItem].className += " active";
}


