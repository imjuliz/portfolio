// carrossel de imagens
function moveCarousel(direction, carrosselId) {
    const carrosselElement = document.getElementById(carrosselId); // seleciona o carrossel pelo id
    const container = carrosselElement.querySelector('.carousel-container');
    const totalCards = 5 // total de imagens
    const cardWidth = container.querySelector('.img-proj').offsetWidth; // tamanho da imagem

    let currentIndex = parseInt(carrosselElement.getAttribute('data-current-index'));

    // atualiza o indice com base na direção
    currentIndex += direction;

    // nao permite ir para um indice negativo
    if (currentIndex < 0) {
        currentIndex = 0;
    }
    // nao permite ultrapassar o numero de imagens e volta para a 1° img do carrossel
    else if (currentIndex >= totalCards) {
        currentIndex = 0;
    }

    carrosselElement.setAttribute('data-current-index', currentIndex);

    // calcula a nova posição para o container
    const newPosition = -currentIndex * cardWidth;
    container.style.transform = `translateX(${newPosition}px)`;
}

// muda de foto de 5 em 5 segundos
document.addEventListener('DOMContentLoaded', function() {
const carrossels = document.querySelectorAll('.carousel');
carrossels.forEach(carrossel => {
    setInterval(() => moveCarousel(1, carrossel.id), 3000);
});
});