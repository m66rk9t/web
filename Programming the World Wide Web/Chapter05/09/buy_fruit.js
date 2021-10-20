var cost = 0;

function buy_this(event) {
    var price = parseInt(event.currentTarget.value);
    cost += price;

    return false;
}

function click_buy(event) {
    alert("Your total cost is $" + cost * 0.01 + "\n");

    return false;
}