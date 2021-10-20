var ct = 0;

function chk_apple() {

    var dom = document.getElementById("apple");
    var num = parseInt(dom.value);

    if (num == NaN || (num < 0 || num > 99)) {
        alert("The number of apple is invalid.\nPlease enter an integer from 0 to 99.\n");
        return false;
    }
    else
        ct += num * 59;

    return false;
}

function chk_orange() {

    var dom = document.getElementById("orange");
    var num = parseInt(dom.value);

    if (num == NaN || (num < 0 || num > 99)) {
        alert("The number of orange is invalid.\nPlease enter an integer from 0 to 99.\n");
        return false;
    }
    else
        ct += num * 49;

    return false;
}

function chk_banana() {

    var dom = document.getElementById("banana");
    var num = parseInt(dom.value);

    if (num == NaN || (num < 0 || num > 99)) {
        alert("The number of banana is invalid.\nPlease enter an integer from 0 to 99.\n");
        return false;
    }
    else
        ct += num * 39;

    return false;
}

function total_cost() {
    alert("Your total cost is $" + ct * 0.01 + "\n")
}