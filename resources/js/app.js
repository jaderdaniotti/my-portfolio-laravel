import './bootstrap';
import 'bootstrap';


let timerSpan = document.getElementById('timer');
let btnStopTimer = document.getElementById('stopTimer');
let seconds = 0;
let comparsaID = document.getElementById('comparsaID');

const intervalId = setInterval(()=>{
  seconds++;
  timerSpan.innerHTML = seconds;
},1000);

function stopTimer(){
  clearInterval(intervalId);
}
function showOnDisplay($element){
    $element.classList.remove('d-none');
}

btnStopTimer.addEventListener('click',stopTimer);
btnStopTimer.addEventListener('click',()=>showOnDisplay(comparsaID));

const circularProgress = document.querySelectorAll(".circular-progress");
let welcome_zoomSection1 = document.querySelector('.zoomIn1');
let welcome_zoomSection2 = document.querySelector('.zoomIn2');
let sectionSkill = document.querySelector('.zoomIn3');
let pageSkill = document.getElementById('pageSkills');
function addClassOnView(element) {
    
    if (!element) return;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                element.classList.add('on');
                console.log('elemento nel div')
                observer.unobserve(element); // Rimuove l'osservatore dopo aver aggiunto la classe
            }
        });
    }, { threshold: 0.01 }); // Si attiva quando almeno il 1% dell'elemento è visibile

    observer.observe(element);
}

addClassOnView(welcome_zoomSection1);
addClassOnView(welcome_zoomSection2);
addClassOnView(sectionSkill);
addClassOnView(pageSkill);
Array.from(circularProgress).forEach((progressBar) => {
  const progressValue = progressBar.querySelector(".percentage");
  const innerCircle = progressBar.querySelector(".inner-circle");
  let startValue = 0,
    endValue = Number(progressBar.getAttribute("data-percentage")),
    speed = 20,
    progressColor = progressBar.getAttribute("data-progress-color");

  const progress = setInterval(() => {
    startValue++;
    progressValue.textContent = `${startValue}%`;
    progressValue.style.color = `${progressColor}`;

    innerCircle.style.backgroundColor = `${progressBar.getAttribute(
      "data-inner-circle-color"
    )}`;

    progressBar.style.background = `conic-gradient(${progressColor} ${
      startValue * 3.6
    }deg,${progressBar.getAttribute("data-bg-color")} 0deg)`;
    if (startValue === endValue) {
      clearInterval(progress);
    }
  }, speed);
});