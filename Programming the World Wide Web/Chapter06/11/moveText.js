var dom, x, y, finalx, finaly;

finalx = prompt("Please enter the x coordinate:\n","coordinate value only");
finaly = prompt("Please enter the y coordinate:\n","coordinate value only");


function initText() {
    dom = document.getElementById('theText').style;
    x = parseInt(dom.left);
    y = parseInt(dom.top);
    moveText(x, y);
}

function moveText(x, y) {
    if (x != finalx)
        if (x > finalx) x--;
        else if (x < finalx) x++;
    if (y != finaly)
        if (y > finaly) y--;
        else if (y < finaly) y++;
    if ((x != finalx) || (y != finaly)) {
        dom.left = x + "px";
        dom.top = y + "px";
        setTimeout("moveText(" + x + "," + y + ")", 1);
    }
}