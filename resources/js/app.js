import '../sass/app.scss';
import './bootstrap';
import '../sass/homepage.scss';

// Get all the generic-text-block elements
const textBlocks = document.querySelectorAll('.generic-text-block');
const parentContainer = document.querySelector('.parent-container');
const app = document.querySelector('#app');

// Add scroll event listener
app.addEventListener('scroll', handleScrollAnimation);

// Function to check if an element is in the viewport
function isElementInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)
    );
}

// Function to handle scroll animation
function handleScrollAnimation() {
    textBlocks.forEach((textBlock, index) => {
        const parentElement = textBlock.parentElement;
        const isVisible = isElementInViewport(parentElement);
        const hasAnimationClass = textBlock.classList.contains('slide-in');
        const button = parentElement.querySelector('button');
        const bubbles = parentElement.querySelector('.bubbles-group');
        const form = parentElement.querySelector('.contact-form');

        if (isVisible && !hasAnimationClass) {
            textBlock.classList.add('slide-in');

            setTimeout(() => {
                if(bubbles) {
                    bubbles.style.opacity = '1';
                    bubbles.style.transition = 'opacity 1s ease-in-out';
                }
                if(form) {
                    form.style.opacity = '1';
                    form.style.transition = 'opacity 1s ease-in-out';
                }
            }, 1000);

            setTimeout(() => {
                if(button) {
                    button.style.opacity = '1';
                    button.style.transition = 'opacity 1s ease-in-out';
                }
            }, 1500);
        }
    });
}

// Function to handle label movement on input focus
// Function to handle label movement on input focus
function handleLabelMovement(inputId) {
    const input = document.getElementById(inputId);
    const label = input.previousElementSibling;

    const handleFocus = () => {
        label.style.fontSize = '1em';
        label.style.transform = 'translateY(-110%)';
        label.style.left = '0';
        label.style.color = '#139dac';
    };

    const handleHover = () => {
        if (!input.matches(':focus')) {
            label.style.fontSize = '2.1em';
            label.style.color = '#139dac';
        }
    };


    const handleBlur = () => {
        if (!input.matches(':focus') && input.value.trim() === '') {
            label.style.fontSize = '';
            label.style.transform = '';
            label.style.left = '';
            label.style.color = '';
        }
    };


    input.addEventListener('focus', handleFocus);
    input.addEventListener('blur', handleBlur);
    input.addEventListener('mouseenter', handleHover);
    input.addEventListener('mouseleave', handleBlur);
}


// Call the function for each input
handleLabelMovement('nom-input');
handleLabelMovement('societe-input');
handleLabelMovement('email-input');
handleLabelMovement('requete-input');




handleScrollAnimation();
