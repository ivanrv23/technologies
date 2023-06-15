var url = window.location.pathname;
var partes = url.split("/");
var pagina = partes[2];
const elementosEnlaces = document.querySelectorAll("#navbarCollapse a");
elementosEnlaces.forEach((enlace) => {
  const href = enlace.pathname;
  if (window.location.pathname == href) {
    var elemento = document.getElementById(pagina);
    elemento.classList.add("active");
  }
  if (window.location.pathname == "/technologies/") {
    var elemento = document.getElementById("inicio");
    elemento.classList.add("active");
  }
});
