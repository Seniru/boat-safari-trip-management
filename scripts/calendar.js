const months = [
	"January",
	"February",
	"March",
	"April",
	"May",
	"June",
	"July",
	"Aughust",
	"September",
	"October",
	"Novemeber",
	"Decemeber"
]

function loadCalendar(parent, highlightDates) {
	let now = new Date()
	let thisDate = now.getDate()
	let thisYear = now.getFullYear()
	let thisMonth = now.getMonth()
	// date = 1 returns the first day of the month
	let monthStartsFrom = new Date(thisYear, thisMonth, 1).getDay()
	// date = 0 returns the last day of the previous month
	// get the last date of the current month by moving to the next month and get the 0th date
	let datesInMonth = new Date(thisYear, thisMonth + 1, 0).getDate()

	let calendarHTML 
		= "<table class='calendar' border='1'>"
		+ "<caption>" + months[thisMonth] + " " + thisYear + "</caption>" 
		+ "<tr><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th><th>Sun</th></tr>"

	let date = 1
	for (let week = 0; week < 5; week++) {
		calendarHTML += "<tr>"
		for (let day = 1; day <= 7; day++) {
			let td = document.createElement("td")
			// mark today on the calendar
			if (date == thisDate) td.classList.add("calendar-today")
			// mark highlighted days on the calendar
			if (highlightDates.includes(new Date(thisYear, thisMonth, date))) td.classList.add("highlighted-day")
			td.innerHTML = ((week == 0 && day < monthStartsFrom) || date > datesInMonth) ? "" : date++
			calendarHTML += td.outerHTML	
			
		}
		calendarHTML += "</tr>"
	}
	calendarHTML += "</table>"
	parent.innerHTML = calendarHTML
}