var dom = document.getElementById("myForm");
dom.addEventListener("submit", click_buy, false);
for (var i = 0; i < dom.fruit.length; i++) {
    document.forms[0].elements[i].addEventListener("click", buy_this, false);
}