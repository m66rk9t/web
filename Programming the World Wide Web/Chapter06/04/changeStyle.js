var textStyle = ["font :Arial; font-style: italic; color: red; font-size: 1.1em;",
    "font :Times; font-style: normal; color: green; font-size: 0.8em;",
    "font :Courier; font-style: oblique; color: white; font-size: 1.5em;"];

function changeText(num) {
    document.getElementById("innerText"+num).style = textStyle[num-1];
}