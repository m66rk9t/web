function chk_valid() {

    var fn = document.getElementById("fname");
    var ln = document.getElementById("lname");
    var midn = document.getElementById("midname");
    var ag = document.getElementById("age");
    var wig = document.getElementById("weight");

    //检查姓名
    if (fn.value.search(/[A-Za-z]/) != 0){
        alert("first name invalid.\n");
        return false;
    }
    if (ln.value.search(/[A-Za-z]/) != 0){
        alert("last name invalid.\n");
        return false;
    }

    //检查中间名
    if (midn.value.search(/[A-M]/) != 0 || midn.value.length > 1) {
        alert("A capital initial is required.\n");
        return false;
    }

    //检查年龄
    if (ag.value.search(/^\d*$/) != 0 || ag.value < parseInt(ag.min)) {
        alert("Age greater than 17 is required.\n")
        return false;
    }
 
    //检查体重
    if (wig.value.search(/^\d*$/) != 0 || (wig.value < parseInt(wig.min) || wig.value > parseInt(wig.max))) {
        alert("Weight form 80 to 300 is required.")
    }


    return false;
}