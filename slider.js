var imageList = new Array;
imageList[0] = new Image;
imageList[0].src = "images3/img05.jpg";
imageList[1] = new Image;
imageList[1].src = "images3/img07.jpg";
imageList[2] = new Image;
imageList[2].src = "images3/abc.jpg";
imageList[3] = new Image;
imageList[3].src = "images3/img06_1.jpg";
function slideShow(imageNumber) {
document.slideShow.src = imageList[imageNumber].src;
var imageChoice = Math.floor(Math.random() * imageList.length);
window.setTimeout("slideShow(" + imageChoice + ")",2000);}