function moveImg(imgID, evt) {
    var imgStyle = document.getElementById(imgID).style;
    imgStyle.visibility = "visible";
    imgStyle.left = evt.clientX + "px";
    imgStyle.top = evt.clientY + "px";
}