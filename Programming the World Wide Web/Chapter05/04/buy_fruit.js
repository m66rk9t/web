function click_buy() {

    var ct = 0;

    ct += parseInt(document.getElementById("apple").value) * 59;
    ct += parseInt(document.getElementById("orange").value) * 49;
    ct += parseInt(document.getElementById("banana").value) * 39;

    alert("Your total cost is $" + ct * 0.01 + "\n");

    return false;
}