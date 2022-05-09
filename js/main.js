function validateNumber() {

    let value = document.getElementById("number-text").value;
    // wenn kein wert, soll stoppen
    if (value == "") {
        setWarning("Please fill with a number.");

        return false;
    }
    else if (value === "5") {

        document.getElementById("rings").value = 1;

    }
    else {
        document.getElementById("rings").value = 0;
    }

}


function validateNumber1() {

    let value = document.getElementById("number-text").value;
    // wenn kein wert, soll stoppen
    if (value == "") {
        setWarning("Please fill with a number.");

        return false;
    }
    else if (value === "100") {

        document.getElementById("meters").value = 1;

    }
    else {
        document.getElementById("meters").value = 0;
    }

}




//WARNING
function setWarning(text) {
    let warningElement = document.getElementById("validation-warning");
    warningElement.innerText = text;
}
