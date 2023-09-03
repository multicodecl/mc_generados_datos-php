function cambiarTema(theme) {
    if (theme == "dark") {
        document.body.style.backgroundColor = "#B9B2AF";
        document.body.style.color = "white";
        document.getElementById("btnToggle").style.background = 'red';
    } else if (theme == "light") {
        document.body.style.backgroundColor = "white";
        document.body.style.color = "black";
    } else {
        document.body.style.backgroundColor = "white";
        document.body.style.color = "black";
    }

    localStorage.setItem("theme", theme);

    var todasLasEtiquetas = document.getElementsByTagName("*");

    for (var i = 0; i < todasLasEtiquetas.length; i++) {
        var etiqueta = todasLasEtiquetas[i];
        if (theme == "dark") {
            etiqueta.style.backgroundColor = "black";
            etiqueta.style.color = "white";
        } else if (theme == "light") {
            etiqueta.style.backgroundColor = "white";
            etiqueta.style.color = "black";
        } else {
            etiqueta.style.backgroundColor = "white";
            etiqueta.style.color = "black";
        }
    }
}