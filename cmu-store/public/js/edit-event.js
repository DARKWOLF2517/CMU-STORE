const EDIT_BUTTON = document.getElementsByClass('edit-button');
const ADD_BUTTON = document.getElementById('add-button');
const MODAL = document.getElementById("event-modal");
const MODAL_FORM = document.getElementById("eventsForm");

EDIT_BUTTON.addEventListener("onclick", (event) => {
    event.preventDefault();

    //AJAX
    // let ajax = XMLHttpRequest();

    MODAL_FORM.setAttribute("action",/** Route of edit action */);
});

ADD_BUTTON.addEventListener("onclick", (event) => {

});

elem.getAttribute("data-event-id");