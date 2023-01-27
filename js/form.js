function send(event, php) {
    // console.log("sending request");
    event.preventDefault ? event.preventDefault() : event.returnValue = false;
    let req = new XMLHttpRequest();
    req.open('POST', php, true);
    req.onload = function () {
        if (req.status >= 200 && req.status < 400) {
            let json = JSON.parse(this.response);
            console.log(json);

            // action in case of success or error
            if (json.result === "success") {
                // if message was sent
                alert("Your message was sent!");
            } else {
                // in case of error
                alert("Error. Try again.");
            }
            // if no connection with php
        } else {
            alert("server error: " + req.status);
        }
    };

// if no request was sent
    req.onerror = function () {
        alert("Error sending request");
    };
    req.send(new FormData(event.target));
}
// phone mask
let phoneSelector = document.getElementById('phone');

phoneSelector.addEventListener('keyup', function(e){
    if (e.key !== 'Backspace' && (phoneSelector.value.length === 3 || phoneSelector.value.length === 7)){
        phoneSelector.value += '-';
    }
});

// JS validation for required inputs

let f = function() {
    this.classList.add('touched')
}
document
    .querySelectorAll('input')
    .forEach((e) => {
        e.addEventListener('blur', f, false)
        e.addEventListener('keydown', f, false)
    })