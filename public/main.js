// toggle the collapsible divs when the buttons are clicked
let buttons = document.querySelectorAll(".collapse-button");
let collapsibleDivs = document.querySelectorAll(".collapsible-div");

for (let i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener("click", function() {
        collapsibleDivs[i].classList.toggle("hidden");
        console.log('hey')
    });
}

// toggle the edit divs when the buttons are clicked
let editButtons = document.querySelectorAll(".edit-button");
let editDivs = document.querySelectorAll(".edit-div");
let taskDivs = document.querySelectorAll(".task-div");

for (let i = 0; i < buttons.length; i++) {
    editButtons[i].addEventListener("click", function() {
        editDivs[i].classList.toggle("hidden");
        taskDivs[i].classList.toggle("hidden");
        console.log('hey')
    });
}
