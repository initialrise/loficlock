const bgelement = document.getElementById("bgimg");
const dateelement = document.getElementById("date");
const timelement = document.getElementById("time");
const imgs = ["morning", "day", "evening", "night"];

function upDate() {
  let date = new Date();
  let hour = date.getHours();
  let minutes = date.getMinutes();
  let seconds = date.getSeconds();
  let msg;
  let dateformatted = `${date.getDate()}/${date.getMonth()}/${date.getFullYear()}`;

  timelement.innerHTML = `${hour}:${minutes}:${seconds}`;
  dateelement.innerHTML = dateformatted;
}

function setRandomBg() {
  let imgurl;
  let randurl = `images/${imgs[Math.floor(Math.random() * imgs.length)]}.png`;
  console.log(randurl);
  bgelement.style.backgroundImage = `url(${randurl})`;
}
setInterval(upDate, 1000);
setInterval(setRandomBg, 3000);
