import './bootstrap';

class Carousel {
  constructor(container, items) {
    this.carouselContainer = container;
    this.carouselArray = [...items];
  }

  updateGallery() {
    this.carouselArray.forEach((el) => {
      el.classList.remove('gallery-item-1', 'gallery-item-2', 'gallery-item-3');
    });

    this.carouselArray.slice(0, 3).forEach((el, i) => {
      el.classList.add(`gallery-item-${i + 1}`);
    });
  }

  setCurrentState(direction) {
    if (direction.id === `${this.carouselContainer.dataset.carouselId}-previousButton`) {
      this.carouselArray.unshift(this.carouselArray.pop());
    } else if (direction.id === `${this.carouselContainer.dataset.carouselId}-nextButton`) {
      this.carouselArray.push(this.carouselArray.shift());
    }
    this.updateGallery();
  }

  useControls() {
    const previousButton = document.getElementById(`${this.carouselContainer.dataset.carouselId}-previousButton`);
    const nextButton = document.getElementById(`${this.carouselContainer.dataset.carouselId}-nextButton`);

    previousButton.addEventListener('click', (e) => {
      e.preventDefault();
      this.setCurrentState(previousButton);
    });

    nextButton.addEventListener('click', (e) => {
      e.preventDefault();
      this.setCurrentState(nextButton);
    });
  }
}

document.querySelectorAll('.gallery-container').forEach((container, index) => {
  const galleryItems = container.querySelectorAll('.gallery-item');
  container.dataset.carouselId = `carousel-${index}`;

  const carouselInstance = new Carousel(container, galleryItems);
  carouselInstance.updateGallery();
  carouselInstance.useControls();
});
