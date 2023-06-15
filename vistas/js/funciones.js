var url = window.location.pathname;
var partes = url.split("/");
var pagina = partes[2];
console.log(pagina);
const elementosEnlaces = document.querySelectorAll("#navbarCollapse a");
elementosEnlaces.forEach((enlace) => {
  const href = enlace.pathname;
  if (window.location.pathname == href) {
    var elemento = document.getElementById(pagina);
    elemento.classList.add("active");
  }
});
