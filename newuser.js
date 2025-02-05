function doValidation() {
    var firstname = document.getElementById("fname").value;
    var lastname = document.getElementById("lname").value;
    var address = document.getElementById("add").value;

    var username = document.getElementById("mname").value;
    var type = document.forms["newuser"]["gn"].value;
    var contact = document.forms["newuser"]["mc"].value;
    var email = document.forms["newuser"]["em"].value;
    var password = document.forms["newuser"]["ps"].value;

    var nameRegex = /^[A-Za-z\s]+$/;
    var contactRegex = /^\d{10}$/; // Assumes a 10-digit phone number
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Basic email validation

    if (!nameRegex.test(firstname)) {
        alert("Invalid First Name. It should not contain numbers or be empty.");
        return false;
    }

    if (!nameRegex.test(lastname)) {
        alert("Invalid Last Name. It should not contain numbers or be empty.");
        return false;
    }

    if (address === "") {
        alert("Invalid Address. Address cannot be empty.");
        return false;
    }

    if (username.trim() === "") {
        alert("Username must be entered.");
        return false;
    }

    if (type.trim() === "") {
        alert("Type must be selected.");
        return false;
    }

    if (!contactRegex.test(contact)) {
        alert("Invalid Contact. Must be a 10-digit number.");
        return false;
    }

    if (!emailRegex.test(email)) {
        alert("Invalid Email. Please enter a valid email address (example@domain.com).");
        return false;
    }

    if (password.length < 8) {
        alert("Invalid Password. Must be at least 8 characters.");
        return false;
    }

    return true;
}

function displaySelectedImage(event, elementId) {
    const selectedImage = document.getElementById(elementId);
    const fileInput = event.target;

    if (fileInput.files && fileInput.files[0]) {
        const reader = new FileReader();

        reader.onload = function(e) {
            selectedImage.src = e.target.result;
        };

        reader.readAsDataURL(fileInput.files[0]);
    }
}