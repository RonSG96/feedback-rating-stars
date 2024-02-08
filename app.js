document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.rating').forEach((ratingContainer) => {
    // 'data-rating' contiene el nombre que se usará para el grupo de inputs de tipo radio
    const inputName = ratingContainer.getAttribute('data-rating');

    // aquí genero 5 estrellas para cada contenedor d calificación
    for (let i = 1; i <= 5; i++) {
      const starLabel = document.createElement('label');
      starLabel.innerHTML = `
              <input type="radio" name="${inputName}" value="${i}" style="display: none;">
              <i class='bx bx-star star' ></i>
          `;

      ratingContainer.appendChild(starLabel);

      // Añadir evento de clic a la etiqueta de la estrella para manejar la UI
      starLabel.addEventListener('click', () => {
        // Reiniciar todas las estrellas a no activas
        ratingContainer.querySelectorAll('.star').forEach((starElement) => {
          starElement.classList.remove('bxs-star');
          starElement.classList.add('bx-star');
        });

        // Activo todas las estrellas hasta la que se hizo clic
        const currentStars = ratingContainer.querySelectorAll('.star');
        for (let j = 0; j < i; j++) {
          currentStars[j].classList.remove('bx-star');
          currentStars[j].classList.add('bxs-star');
        }
      });
    }
  });
});
