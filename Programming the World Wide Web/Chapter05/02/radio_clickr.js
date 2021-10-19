//事件注册
var dom = document.getElementById("myForm");
for (var i = 0; i < dom.length; i++) {
    dom.elements[i].onclick = rad_click;
}