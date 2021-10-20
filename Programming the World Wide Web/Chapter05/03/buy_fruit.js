var cost = 0;

function click_chk(price) {
    cost += parseInt(price);

    return false;
}

function click_buy() {
    alert("Your total cost is $" + cost*0.01 + "\n");

    return false;
}