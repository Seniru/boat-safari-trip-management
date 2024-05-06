function validate() {
    // subject validation
    let subject = document.getElementById("Subject").value
    if (subject.length > 30) {
        alert("Subject length should not be more than 30")
        return false
    }

    // content validation
    let content = document.getElementById("content").value
    if (content.length > 200) {
        alert("Message length should not be more than 200")
        return false
    }

}