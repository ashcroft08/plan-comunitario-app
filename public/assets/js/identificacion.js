function cambiarColor(radio) {
    // Reseteamos los colores para todos los radios del grupo
    let radios = document.getElementsByName(radio.name);
    radios.forEach(function(item) {
        item.parentElement.style.backgroundColor = ""; // Restablecer color de fondo
    });
    
    // Cambiamos el color dependiendo del valor seleccionado
    if (radio.value === "alto") {
        radio.parentElement.style.backgroundColor = "red";
    } else if (radio.value === "medio") {
        radio.parentElement.style.backgroundColor = "orange";
    } else if (radio.value === "bajo") {
        radio.parentElement.style.backgroundColor = "green";
    }
}