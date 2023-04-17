const carousel = document.querySelector('#carousel');
const buttons = document.querySelectorAll('button');
const numberOfView = document.querySelectorAll('#carousel #view').length;
const numberOfViewInComing = document.querySelectorAll('#carousel #view-in-coming').length;
const totalView = numberOfViewInComing + numberOfView;
let viewIndex = 1;
let translateX = 0;
let animation = false;
function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
  }
buttons.forEach(button => {
    button.addEventListener('click', event => {
        if (animation) {
            return;
        }
        else {
            if (event.target.id === 'previous') {
                if (viewIndex !== 1) {
                    viewIndex--;
                    translateX += 98;
                    console.log(event.target.id);
                    console.log(translateX)
                } else if (viewIndex === 1) {
                    carousel.classList.toggle('left');
                    console.log('toggle left');
                    resetPosition('left')
                }
            } else if (event.target.id === 'next') {
                if (viewIndex !== (totalView)) {
                    viewIndex++;
                    translateX -= 98;
                    console.log(event.target.id);
                    console.log(translateX);
                } else if (viewIndex === totalView) {
                    carousel.classList.toggle('right');
                    console.log('toggle right');
                    resetPosition('right');
                }
            } carousel.style.transform = `translateX(${translateX}rem)`;
        } 
    })
})
async function resetPosition(side) {
    await sleep(1100);
    console.log('test');
    carousel.classList.toggle(side);
}