function doValidation()
{
    
    var firstname = document.getElementById("fname").value;
    var lastname = document.getElementById("lname").value;
    var address = document.getElementById("add").value;
    var mothername = document.getElementById("mname").value;
    var dob = document.getElementById("dob").value;
    var doa = document.getElementById("doa").value;
    var grade = document.forms["newstudent"]["cg"].value;
    var age = document.forms["newstudent"]["ag"].value;
    var mcontact = document.forms["newstudent"]["mc"].value;
    var fcontact = document.forms["newstudent"]["fc"].value;
    var fathername = document.forms["newstudent"]["fgn"].value;

    var nameRegex = /^[A-Za-z\s]+$/;
    var contactRegex = /^\d{10}$/; // Assumes a 10-digit phone number
    var numericRegex = /^\d+$/;

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

    if (!nameRegex.test(mothername)) {
        alert("Invalid Mother's Name. It should not contain numbers or be empty.");
        return false;
    }

    if (dob === "") {
        alert("Invalid Date of Birth. Please select a date.");
        return false;
    }

    if (doa === "") {
        alert("Invalid Date of Admission. Please select a date.");
        return false;
    }
    if (!numericRegex.test(age) || parseInt(age) <= 0) {
        alert("Invalid Age. Must be a positive number.");
        return false;
    }
    if (grade === "") {
        alert("Invalid Grade. Grade cannot be empty.");
        return false;
    }
    // Mother's Contact Validation
    if (!contactRegex.test(mcontact)) {
        alert("Invalid Mother's Contact. Must be a 10-digit number.");
        return false;
    }
    // Father's Name Validation
    if (!nameRegex.test(fathername)) {
        alert("Invalid Father's Name. It should not contain numbers or be empty.");
        return false;
    }
    // Father's Contact Validation
    if (!contactRegex.test(fcontact)) {
        alert("Invalid Father's Contact. Must be a 10-digit number.");
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