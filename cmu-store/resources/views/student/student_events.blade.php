
@extends('layouts.student_navigation_bar')

@section('main-content')

    <div class="content">
        <div class="container breadcrumb">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/student_home">Dashboard</a></li>
                <li class="breadcrumb-item">Student Organization</li>
                <li class="breadcrumb-item active" aria-current="page">Events</li>
              </ol>
            </nav>
        </div>
    <div class="container event-container" id="tablecontainer">
        <div class="row head-container">
          <div class="col-md-6">
            <div class="input-group search-bar">
              <input type="text" class="form-control rounded-start" placeholder="Search Events" aria-label="Search"
                aria-describedby="search-icon">
              <button class="btn btn-primary rounded-end" type="button" id="search-icon">
                <i class="bi bi-search"></i>
              </button>
            </div>
          </div>
          <div class="col-md-3">
            <div class="d-flex justify-content-end">
              <select class="form-select custom-select-width">
                <option selected>Sort by</option>
                <option>1st semester events</option>
                <option>2nd semester events</option>
              </select>
            </div>
          </div>
        </div>
                <h2>Events</h2>
                <hr>
                <div class="row" id="events">
                  <!-- Events will be dynamically populated here -->
                </div>
                 <!-- Modal for displaying event details -->
    <div class="modal" tabindex="-1" role="dialog" id="eventModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eventModalTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="eventModalBody">
                    <!-- Event details will be dynamically populated here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Sample event data with links
        const eventData = [
            {
                title: "Event 1",
                description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                image: "https://via.placeholder.com/300x200",
                link: "https://www.example.com/event1",
                details: "Event 1 details go here. You can provide more information about this event."
            },
            {
                title: "Event 2",
                description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                image: "https://via.placeholder.com/300x200",
                link: "https://www.example.com/event2",
                details: "Event 2 details go here. You can provide more information about this event."
            },
            {
                title: "Event 3",
                description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                image: "https://via.placeholder.com/300x200",
                link: "https://www.example.com/event3",
                details: "Event 3 details go here. You can provide more information about this event."
            },
        ];

        // Function to display events as cards
        function displayEvents() {
            const eventsContainer = document.getElementById("events");

            eventData.forEach((event) => {
                const col = document.createElement("div");
                col.classList.add("col-lg-4");

                const card = document.createElement("div");
                card.classList.add("card", "mb-3");

                const img = document.createElement("img");
                img.classList.add("card-img");
                img.src = event.image;
                img.alt = event.title;

                // Create an anchor tag for the clickable card
                const cardLink = document.createElement("a");
                cardLink.href = "#"; // Since we're using a modal, set href to "#"
                cardLink.style.textDecoration = "none"; // Remove the default underline
                cardLink.addEventListener("click", () => {
                    // When the card is clicked, show the modal with event details
                    showEventModal(event);
                });

                cardLink.appendChild(img);
                card.appendChild(cardLink);

                const cardBody = document.createElement("div");
                cardBody.classList.add("card-body");

                const title = document.createElement("h5");
                title.classList.add("card-title");
                title.innerText = event.title;

                const description = document.createElement("p");
                description.classList.add("card-text", "card-description");
                description.innerText = event.description;

                cardBody.appendChild(title);
                cardBody.appendChild(description);
                card.appendChild(cardBody);
                col.appendChild(card);

                eventsContainer.appendChild(col);
            });
        }

        // Function to show the event details modal
        function showEventModal(event) {
            const eventModalTitle = document.getElementById("eventModalTitle");
            const eventModalBody = document.getElementById("eventModalBody");

            // Set the modal title and event details
            eventModalTitle.innerText = event.title;
            eventModalBody.innerText = event.details;

            // Show the modal
            $("#eventModal").modal("show");
        }

        displayEvents();
    </script>
