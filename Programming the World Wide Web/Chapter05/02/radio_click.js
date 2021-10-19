//事件处理程序
function rad_click() {
    var color;
    var dom = document.getElementById("myForm");
    for (var i = 0; i < dom.length; i++) {
        if (dom.elements[i].checked) {
            color = dom.elements[i].value;
            break;
        }
    }
    alert("Your favorite color is " + color + "\n");
}