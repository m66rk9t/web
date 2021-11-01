var dom, x, finalX = 1295;

function initCoord() {
    dom = document.getElementById("txtBtn").style;
    x = parseInt(dom.left);
    scrollText(x);
}

function scrollText() {
    if (x < finalX) {
        x++;
        dom.left = x + "px";
        setTimeout("scrollText()", 1);
    }
    else {
        scrollBack();
    }
}

function scrollBack() {
    if (x > 0) {
        x--;
        dom.left = x + "px";
        setTimeout("scrollBack()", 1);
    }
    else {
        scrollText();
    }
}