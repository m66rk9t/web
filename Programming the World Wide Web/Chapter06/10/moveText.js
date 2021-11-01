var dom, x, steps = 0, finalX = 1295;

function initCoord() {
    dom = document.getElementById("txtBtn").style;
    x = parseInt(dom.left);
    scrollAdvance();
}

function scrollAdvance() {
    if (x < finalX) {
        changeColor();
        x++;
        steps++;
        dom.left = x + "px";
        setTimeout("scrollAdvance()", 1);
    }
    else
        scrollBack();
}

function scrollBack() {
    if (x > 0) {
        changeColor();
        steps++;
        x--;
        dom.left = x + "px";
        setTimeout("scrollBack()", 1);
    }
    else
        scrollAdvance();
}

function changeColor() {
    if (steps % 4 == 0) {
        if (dom.color != "red")
            dom.color = "red";
        else
            dom.color = "blue";
    }
}