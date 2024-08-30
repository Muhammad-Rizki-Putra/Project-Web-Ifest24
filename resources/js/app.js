class Carousel {
  constructor(container, items) {
    this.carouselContainer = container;
    this.carouselArray = [...items];
  }

  updateGallery() {
    // Remove the existing classes from all items
    this.carouselArray.forEach((el) => {
      el.classList.remove(
        'gallery-item-1',
        'gallery-item-2',
        'gallery-item-3',
        'gallery-item-4',
        'gallery-item-5'
      );
    });

    // Add the new classes for the first 5 items
    this.carouselArray.slice(0, 5).forEach((el, i) => {
      el.classList.add(`gallery-item-${i + 1}`);
    });
  }

  setCurrentState(direction) {
    if (direction.id === `${this.carouselContainer.dataset.carouselId}-previousButton`) {
      // Move the last item to the front of the array
      this.carouselArray.unshift(this.carouselArray.pop());
    } else if (direction.id === `${this.carouselContainer.dataset.carouselId}-nextButton`) {
      // Move the first item to the end of the array
      this.carouselArray.push(this.carouselArray.shift());
    }
    // Update the gallery after changing the state
    this.updateGallery();
  }

  useControls() {
    // Get the previous and next buttons
    const previousButton = document.getElementById(
      `${this.carouselContainer.dataset.carouselId}-previousButton`
    );
    const nextButton = document.getElementById(
      `${this.carouselContainer.dataset.carouselId}-nextButton`
    );

    // Add event listeners for button clicks
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

// Initialize the carousel for each gallery container
document.querySelectorAll('.gallery-container').forEach((container, index) => {
  const galleryItems = container.querySelectorAll('.gallery-item');
  container.dataset.carouselId = `carousel-${index}`;

  const carouselInstance = new Carousel(container, galleryItems);
  carouselInstance.updateGallery();
  carouselInstance.useControls();
});

class CarouselITComp extends Carousel {
  setCurrentState(direction) {
    super.setCurrentState(direction);

    // Check if the first element in the carousel array has the 'gallery-item-1' class
    const selectedItem = this.carouselArray[0];
    if (selectedItem.classList.contains('gallery-item-1')) {
      // Execute the logic if the selected item is 'gallery-item-1'
      container.dataset.carouselId = `test`;
      // Add your specific logic here
    } else {
      // Execute the logic if the selected item is not 'gallery-item-1'
      console.log('The selected item is not gallery-item-1');
      // Add your specific logic here
    }
  }
}