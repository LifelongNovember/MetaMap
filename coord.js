function point_it(event){
	pos_x = event.offsetX?(event.offsetX):event.pageX-document.getElementById("pointer_div").offsetLeft;
	pos_y = event.offsetY?(event.offsetY):event.pageY-document.getElementById("pointer_div").offsetTop;
	document.getElementById("cross").style.left = (pos_x).toString() + 'px';
  document.getElementById("cross").style.top = (pos_y).toString() + 'px';
	document.getElementById("cross").style.visibility = "visible" ;
	document.getElementById("pos_x").value = pos_x;
	document.getElementById("pos_y").value = pos_y;
}

window.onload = function() {

};
