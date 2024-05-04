function changePassword(event, action) {
    const target = event.target
    target.style.display = "none";

    let form = document.createElement("form")
    form.method = "POST";
    form.action = action;

    let formPasswordElement = document.createElement("input")
    let formSubmitElement = document.createElement("input")
    formPasswordElement.type = "password"
    formPasswordElement.name = "password"
    formPasswordElement.placeholder = "Enter your new password"
    formSubmitElement.type = "submit"
    formSubmitElement.name = "reset-password"

    form.appendChild(formPasswordElement);
    form.appendChild(formSubmitElement)
    target.parentNode.appendChild(form)
}
