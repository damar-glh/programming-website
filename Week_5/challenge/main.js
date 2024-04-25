const turnOn = () => {document.getElementById('myLamp').src = './assets/pic_bulb_on.gif'};
const turnOff = () => {document.getElementById('myLamp').src = './assets/pic_bulb_off.gif'};

document.getElementById("on").addEventListener("click", turnOn);
document.getElementById("off").addEventListener("click", turnOff);