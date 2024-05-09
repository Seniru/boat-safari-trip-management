function validate(event) {
    // validate firstname and lastname
    let firstname = document.getElementById("firstname").value
    let lastname = document.getElementById("lastname").value
    if (firstname.length > 15 || lastname.length > 15) {
        alert("First name or Last name cannot be more than 15 characters")
        return false
    }

    // validate date of birth
    let dob = document.getElementById("dob").value
    if (!(/\d{4,4}-\d{2,2}-\d{2,2}/.test(dob))) {
        alert("Invalid date")
        return false
    }

    // validate phone number
    let tel = document.getElementById("tel").value 
    if (tel.length != 10 || !(/\d{10,10}/.test(tel))) {
        alert("Phone number must be 10 digits long")
        return false
    }

    // validate password
    let password = document.getElementById("password").value
    if (password.length < 10) {
        alert("Password must be more than 10 characters long")
        return false
    }
    if (password.length > 30) {
        alert("Password should not be more than 30 characters long")
        return false
    }

    // check password and confirmation password are equal
    let confPass = document.getElementById("password-conf").value
    if (password != confPass) {
        alert("Password and confirmation password should match")
        return false
    }

}