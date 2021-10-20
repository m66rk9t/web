function draw() {
    var dom = document.getElementById("myCanvas");

    if (dom.getContext) {
        var context = dom.getContext("2d");

        context.beginPath();
        context.arc(100, 100, 40, 0, Math.PI * 2, false);
        context.stroke();

        context.beginPath();
        context.arc(190, 100, 40, 0, Math.PI * 2, false);
        context.stroke();

        context.beginPath();
        context.arc(280, 100, 40, 0, Math.PI * 2, false);
        context.stroke();

        context.beginPath();
        context.arc(145, 140, 40, 0, Math.PI * 2, false);
        context.stroke();

        context.beginPath();
        context.arc(235, 140, 40, 0, Math.PI * 2, false);
        context.stroke();
    }
}