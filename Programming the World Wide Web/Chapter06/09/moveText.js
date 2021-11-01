var dom, x, finalX = 1295;

function initCoord() {
    dom = document.getElementById("txtBtn").style;
    x = parseInt(dom.left);
    scrollAdvance();
}

function scrollAdvance() {
    if (x < finalX) {
        x++;
        dom.left = x + "px";
        setTimeout("scrollAdvance()", 1);
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
        scrollAdvance();
    }
}