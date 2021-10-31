var topTextID = "theText1"
var topIndex = 4;

function changeTextOrder(newTextID) {
    var preTop = document.getElementById(topTextID).style;
    var newTop = document.getElementById(newTextID).style;
    preTop.zIndex = topIndex;
    topTextID = newTextID;
    topIndex = newTop.zIndex;
    newTop.zIndex = "100";

}