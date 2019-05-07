
function point_it(event) {
	parent = document.getElementById("pointer_div");
	pos_x = event.offsetX?(event.offsetX):event.pageX-parent.offsetLeft;
	pos_y = event.offsetY?(event.offsetY):event.pageY-parent.offsetTop;
	document.getElementById("cross").style.left = (pos_x).toString() + 'px';
  document.getElementById("cross").style.top = (pos_y).toString() + 'px';
	document.getElementById("cross").style.visibility = "visible";
	document.getElementById("pos_x").value = pos_x;
	document.getElementById("pos_y").value = pos_y;
}

function ajout_marqueur(pos_x, pos_y) {
	var marqueur = document.createElement('img');
	var container = document.getElementById("pointer_div");
	marqueur.className = 'marqueur';
	marqueur.src = 'point.gif';
	marqueur.style.left = (pos_x).toString() + 'px';
	marqueur.style.top = (pos_y).toString() + 'px';
	marqueur.style.visibility = "visible";
	container.appendChild(marqueur);
}
