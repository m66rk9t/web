function draw() {
    var dom = document.getElementById("myCanvas");
    if (dom.getContext) {
        var context = dom.getContext("2d");

        //绘制实心矩形
        context.fillStyle = "#0000FF";
        context.fillRect(0, 0, 100, 100);

        //绘制空心圆
        context.moveTo(50, 50);
        context.beginPath();
        context.arc(50, 50, 30, 0, Math.PI * 2, false);
        context.stroke();
    }
}