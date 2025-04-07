const carouselContainer = document.querySelector('.carousel__container');
const carouselNavigationContainers = [...document.querySelectorAll('.carousel__navigation')];
let currentSlider = 0;

const carouselCards = [
    document.querySelector('.carousel__card.one'),
    document.querySelector('.carousel__card.two'),
    document.querySelector('.carousel__card.three')
];

const carouselIndicators = [
    document.querySelector('.round__indicator.one'),
    document.querySelector('.round__indicator.two'),
    document.querySelector('.round__indicator.three')
];

const showCurrentCard = function showCurrentCardWhichWasPressed() {
    carouselCards.forEach((card, index) => {
        card.classList.toggle('hidden__card', index !== currentSlider);
    });
};

const showCurrentIndicator = function showCurrentIndicatorWhichWasPressed() {
    carouselIndicators.forEach((indicator, index) => {
        indicator.classList.toggle('round__indicator__active', currentSlider === index);
    })
}

const trackCurrentSlider = function trackCurrentSliderIndex(currentSliderIndex) {
    if (currentSliderIndex < 0) {
        currentSlider = carouselCards.length - 1;
    }
    else if (currentSliderIndex > carouselCards.length - 1) {
        currentSlider = 0;
    }
};

const whichButtonWasPressed = function whichButtonWasPressedWithinTheCard(event) {
    carouselNavigationContainers.forEach((button) => {
        previousButton = button.querySelector('.prev');
        nextButton = button.querySelector('.next');
        const targetButton = (event.target.closest('svg')).closest('button');
        if (targetButton === previousButton) {
            currentSlider--;
            trackCurrentSlider(currentSlider);
            showCurrentCard();
            showCurrentIndicator();
        }
        else if (targetButton === nextButton) {
            currentSlider++;
            trackCurrentSlider(currentSlider);
            showCurrentCard();
            showCurrentIndicator();
        }
    });
};

const whichIndicatorWasPressed = function whichIndicatorWasPressedWithinTheCard(event) {
    carouselIndicators.forEach((indicator, index) => {
        if (event.target.classList[1] === indicator.classList[1]) {
            currentSlider = index;
            showCurrentCard();
            showCurrentIndicator();
        }
    });
};

carouselContainer.addEventListener('click', (event) => {
    if (!event.target) return; // Prevent null assign to event.target
    if (event.target.classList[0] === 'round__indicator') {
        whichIndicatorWasPressed(event);
    }
    else if (event.target.nodeName === 'svg' || event.target.nodeName === 'path') {
        whichButtonWasPressed(event);
    }
});