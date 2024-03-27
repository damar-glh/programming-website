const turnOn = () => {document.getElementById('myLamp').src = './assets/pic_bulbon.gif'};
const turnOff = () => {document.getElementById('myLamp').src = './assets/pic_bulboff.gif'};

document.getElementById("on").addEventListener("click", turnOn);
document.getElementById("off").addEventListener("click", turnOff);