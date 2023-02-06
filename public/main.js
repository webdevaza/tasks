// toggle the collapsible divs when the buttons are clicked
let buttons = document.querySelectorAll(".collapse-button");
let collapsibleDivs = document.querySelectorAll(".collapsible-div");

for (let i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener("click", function() {
        collapsibleDivs[i].classList.toggle("hidden");
    });
    document.addEventListener("keydown", function(e) {
        if(e.key == "Escape" && !collapsibleDivs[i].classList.contains('hidden')) {
            collapsibleDivs[i].classList.add("hidden");
        }
    })
}

// toggle the edit divs when the buttons are clicked
let editButtons = document.querySelectorAll(".edit-button");
let editDivs = document.querySelectorAll(".edit-div");
let taskDivs = document.querySelectorAll(".task-div");
let cancelButtons = document.querySelectorAll(".cancel-button");

for (let i = 0; i < buttons.length; i++) {
    editButtons[i].addEventListener("click", function() {
        editDivs[i].classList.toggle("hidden");
        taskDivs[i].classList.toggle("hidden");
        let editDate = editDivs[i].querySelector(".edit-date");
        flatpickr(editDate, {dateFormat: "d.m.Y", minDate: "today", "locale": {"firstDayOfWeek": 1}});
    });
    cancelButtons[i].addEventListener("click", function() {
        editDivs[i].classList.toggle("hidden");
        taskDivs[i].classList.toggle("hidden");
    });
    document.addEventListener("keydown", function(e) {
        if(e.key == "Escape" && !editDivs[i].classList.contains('hidden')) {
            editDivs[i].classList.add("hidden");
            taskDivs[i].classList.remove("hidden");
        }
    })
}
// it is a datepicker
let toDoDate = document.getElementById('date-input')
flatpickr(toDoDate, {dateFormat: "d.m.Y", minDate: "today", "locale": {"firstDayOfWeek": 1}});