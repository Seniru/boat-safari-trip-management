function validate() {
    // date validation
    let date = new Date(document.getElementById("date").value)
    let now = new Date()
    if (date < now) {
        alert("Please select an upcoming date")
        return false
    }

    // passenger validation
    let po12 = parseInt(document.getElementById("passengers-o12").value)
    let pu12 = parseInt(document.getElementById("passengers-u12").value)
    if (po12 < 0 || pu12 < 0) {
        alert("Passenger count can't be a negative value")
        return false
    }
}
