function selectPackage(event) {
    const locationSelector = document.getElementById("location")
    const boatTypeSelector = document.getElementById("boat-type")
    const parentContainer = event.target.parentNode
    const location = parentContainer.getElementsByClassName("location")[0].innerText
    const boatType = parentContainer.getElementsByClassName("boat-type")[0].innerText
    
    locationSelector.value = location
    boatTypeSelector.value = boatType
}

function createReport() {
    document.getElementById("review-location").innerText = document.getElementById("location").value
    document.getElementById("review-date").innerText = document.getElementById("date").value
    document.getElementById("review-time").innerText = document.getElementById("time").value
    document.getElementById("review-passengers-o12").innerText = document.getElementById("passengers-o12").value
    document.getElementById("review-passengers-u12").innerText = document.getElementById("passengers-u12").value
    document.getElementById("review-boat").innerText = document.getElementById("boat-type").value
    document.getElementById("review-facilities").innerText = ""
}