const testStart = document.querySelector("#testStart");
const qFirst = document.querySelector("#qFirst");
const qFromFloral = document.querySelector("#qFromFloral");
const qFromFruit = document.querySelector("#qFromFruit");
const qFromAroma = document.querySelector("#qFromAroma");

const soap = document.querySelector("#soap");
const spicy = document.querySelector("#spicy");
const rose = document.querySelector("#rose");
const citrus = document.querySelector("#citrus");
const woody = document.querySelector("#woody");
const vanilla = document.querySelector("#vanilla");


//사라졌다가 나타나는 시간 다시 조절하기!
function begin(){

  testStart.style.WebkitAnimation = "fadeOut 1s";
  testStart.style.animation = "fadeOut 1s";

  setTimeout(() => {
    qFirst.style.WebkitAnimation = "fadeIn 1s";
    qFirst.style.animation = "fadeIn 1s";
    setTimeout(() => {
      testStart.style.display="none";
      qFirst.style.display="block";
    },450)
  },450);
}

function selectFloral(){

  qFirst.style.WebkitAnimation = "fadeOut 1s";
  qFirst.style.animation = "fadeOut 1s";

  setTimeout(() => {
    qFromFloral.style.WebkitAnimation = "fadeIn 1s";
    qFromFloral.style.animation = "fadeIn 1s";
    setTimeout(() => {
      qFirst.style.display="none";
      qFromFloral.style.display="block";
    },450)
  },450);
}

function selectFruit(){

  qFirst.style.WebkitAnimation = "fadeOut 1s";
  qFirst.style.animation = "fadeOut 1s";

  setTimeout(() => {
    qFromFruit.style.WebkitAnimation = "fadeIn 1s";
    qFromFruit.style.animation = "fadeIn 1s";
    setTimeout(() => {
      qFirst.style.display="none";
      qFromFruit.style.display="block";
    },450)
  },450);
}

function selectAroma(){

  qFirst.style.WebkitAnimation = "fadeOut 1s";
  qFirst.style.animation = "fadeOut 1s";

  setTimeout(() => {
    qFromAroma.style.WebkitAnimation = "fadeIn 1s";
    qFromAroma.style.animation = "fadeIn 1s";
    setTimeout(() => {
      qFirst.style.display="none";
      qFromAroma.style.display="block";
    },450)
  },450);
}

function selectSoap(){

  qFromFloral.style.WebkitAnimation = "fadeOut 1s";
  qFromFloral.style.animation = "fadeOut 1s";

  setTimeout(() => {
    soap.style.WebkitAnimation = "fadeIn 1s";
    soap.style.animation = "fadeIn 1s";
    setTimeout(() => {
      qFromFloral.style.display="none";
      soap.style.display="block";
    },450)
  },450);
}

function selectSpicy(){

  qFromFloral.style.WebkitAnimation = "fadeOut 1s";
  qFromFloral.style.animation = "fadeOut 1s";

  setTimeout(() => {
    spicy.style.WebkitAnimation = "fadeIn 1s";
    spicy.style.animation = "fadeIn 1s";
    setTimeout(() => {
      qFromFloral.style.display="none";
      spicy.style.display="block";
    },450)
  },450);
}

function selectRose(){

  qFromFruit.style.WebkitAnimation = "fadeOut 1s";
  qFromFruit.style.animation = "fadeOut 1s";

  setTimeout(() => {
    rose.style.WebkitAnimation = "fadeIn 1s";
    rose.style.animation = "fadeIn 1s";
    setTimeout(() => {
      qFromFruit.style.display="none";
      rose.style.display="block";
    },450)
  },450);
}

function selectCitrus(){

  qFromFruit.style.WebkitAnimation = "fadeOut 1s";
  qFromFruit.style.animation = "fadeOut 1s";

  setTimeout(() => {
    citrus.style.WebkitAnimation = "fadeIn 1s";
    citrus.style.animation = "fadeIn 1s";
    setTimeout(() => {
      qFromFruit.style.display="none";
      citrus.style.display="block";
    },450)
  },450);
}

function selectWoody(){

  qFromAroma.style.WebkitAnimation = "fadeOut 1s";
  qFromAroma.style.animation = "fadeOut 1s";

  setTimeout(() => {
    woody.style.WebkitAnimation = "fadeIn 1s";
    woody.style.animation = "fadeIn 1s";
    setTimeout(() => {
      qFromAroma.style.display="none";
      woody.style.display="block";
    },450)
  },450);
}

function selectVanilla(){

  qFromAroma.style.WebkitAnimation = "fadeOut 1s";
  qFromAroma.style.animation = "fadeOut 1s";

  setTimeout(() => {
    vanilla.style.WebkitAnimation = "fadeIn 1s";
    vanilla.style.animation = "fadeIn 1s";
    setTimeout(() => {
      qFromAroma.style.display="none";
      vanilla.style.display="block";
    },450)
  },450);
}

function OnMouseIn(elem){
  elem.style.border="solid 2px red";
}

function OnMouseOut(elem){
  elem.style.border="";
}
