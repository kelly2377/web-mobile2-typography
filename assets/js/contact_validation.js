const form = document.getElementById("contact-form");

form.addEventListener("submit", function(event){
    event.preventDefault();

    const nameRegex = /^[a-zA-Z'- ]+$/;
    const phoneRegex = /^(\([0-9]{3}\)|[0-9]{3})[ -]?[0-9]{3}[ -]?[0-9]{4}$/;

    let fname = document.getElementById("firstName");
    let fnameInput = fname.value.trim();
    let fnameErr = document.getElementById("fname-error");
    let lname = document.getElementById("lastName");
    let lnameInput = lname.value.trim();
    let lnameErr = document.getElementById("lname-error");

    let email = document.getElementById("email");
    let emailInput = email.value.trim();
    let emailErr = document.getElementById("email-error");

    let number = document.getElementById("phoneNumber");
    let numberInput = number.value.trim();
    let numberErr = document.getElementById("phone-error");

    let message = document.getElementById("message");
    let messageErr = document.getElementById("message-error");

    const isChecked = form.querySelector("input[type='radio']:checked");
    let reasonErr = document.getElementById("reason-error");
    let isValid = true;

    fnameErr.textContent = "";
    lnameErr.textContent = "";
    emailErr.textContent = "";
    numberErr.textContent = "";
    messageErr.textContent = "";
    reasonErr.textContent = "";

    if (fnameInput === ""){
        fnameErr.textContent = "Name is a required field!";
        isValid = false;
    } else if (!nameRegex.test(fnameInput)){
        fnameErr.textContent = "Only letters, white space, and some special characters (- and ') allowed";
        isValid = false;
    }

    if (lnameInput === ""){
        lnameErr.textContent = "Name is a required field!";
        isValid = false;
    } else if (!nameRegex.test(lnameInput)){
        lnameErr.textContent = "Only letters, white space, and some special characters (- and ') allowed";
        isValid = false;
    }

    if (numberInput !== "" && !phoneRegex.test(numberInput)){
        numberErr.textContent = "Invalid phone number format!";
        isValid = false;
    }

    if (!email.checkValidity()){
        emailErr.textContent = "Please enter a valid email!";
        isValid = false;
    }

    if (message.value.trim() === ""){
        messageErr.textContent = "Please enter a message to send!"
        isValid = false;
    }

    if (!isChecked){
        reasonErr.textContent = "Please select a reason!"
        isValid = false;
    }

    if (isValid){
        form.submit();
    }
});