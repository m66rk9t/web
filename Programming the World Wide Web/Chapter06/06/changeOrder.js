var topp = "theText4";

function changeTextOrder(textID) {
    var topText = document.getElementById(topp).style;
    var newTopp = document.getElementById(textID).style;
    topText.zIndex = "0";
    newTopp.zIndex = "10";
    topp = textID;
}