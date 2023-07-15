@extends('layouts.student_navigation_bar')
@section('main-content')

<div class="content">

        <div class="row">
          <div class="container col-lg-12">
              <h2>Organizations</h2>
              <hr>
              <div class="row" id="organizations">
                <!-- Organizations will be dynamically populated here -->
              </div>
          </div>

          <div class="container" id="tablecontainer">
        <div class="row mt-4">
          <div class="col-lg-6">
              <h2>Recent Announcements</h2>
              <div class="shadow scroll-container"id="announcement-list"></div>
            </div>

          <div class="col-lg-6">
              <h2>Upcoming Events</h2>
              <div class="shadow scroll-container" id="upcoming-events"></div>
          </div>
        </div>
      </div>
    </div>

</div>
<script>
    // Sample organizations data with links
    const organizations = [
      {
        name: "Organization 1",
        description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
        image: "https://via.placeholder.com/300x200", // Replace this with the actual image URL
        link: "https://www.facebook.com/Q.Sollinamor/" // Replace this with the organization's URL
      },
      {
        name: "Organization 2",
        description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
        image: "https://via.placeholder.com/300x200", // Replace this with the actual image URL
        link: "https://dfe" // Replace this with the organization's URL
      },
      {
        name: "Organization 3",
        description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
        image: "https://via.placeholder.com/300x200", // Replace this with the actual image URL
        link: "https://fef" // Replace this with the organization's URL
      },
    ];


    // Display organizations as cards
    function displayOrganizations() {
      const organizationsContainer = document.getElementById("organizations");

      organizations.forEach((org) => {
        const col = document.createElement("div");
        col.classList.add("col-lg-4");

        const card = document.createElement("div");
        card.classList.add("card", "mb-3");

        const img = document.createElement("img");
        img.classList.add("card-img");
        img.src = org.image;
        img.alt = org.name;

        // Create an anchor tag for the clickable card
        const cardLink = document.createElement("a");
        cardLink.href = org.link;
        cardLink.style.textDecoration = "none"; // Remove the default underline

        cardLink.appendChild(img);
        card.appendChild(cardLink);

        const cardBody = document.createElement("div");
        cardBody.classList.add("card-body");

        const title = document.createElement("h5");
        title.classList.add("card-title");
        title.innerText = org.name;

        const description = document.createElement("p");
        description.classList.add("card-text", "card-description");
        description.innerText = org.description;

        cardBody.appendChild(title);
        cardBody.appendChild(description);
        card.appendChild(cardBody);
        col.appendChild(card);

        organizationsContainer.appendChild(col);
      });
    }

    displayOrganizations();
  </script>
<script>
    // Sample announcements data
    const announcements = [
      {
        title: "Important Announcement",
        date: "July 1, 2023",
        content: "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
      },
      {
        title: "Exam Schedule",
        date: "June 28, 2023",
        content: "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
      },
      {
        title: "Class Cancellation",
        date: "June 25, 2023",
        content: "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
      }
    ];

    // Sample events data
    const events = [
      {
        title: "Workshop on Web Development",
        date: "July 10, 2023",
        time: "10:00 AM - 12:00 PM",
        location: "Room 101"
      },
      {
        title: "Guest Lecture on Artificial Intelligence",
        date: "July 15, 2023",
        time: "2:00 PM - 4:00 PM",
        location: "Auditorium"
      },
      {
        title: "Career Fair",
        date: "July 20, 2023",
        time: "9:00 AM - 5:00 PM",
        location: "Student Center"
      }
    ];

    // Display recent announcements
    function displayAnnouncements() {
      const announcementList = document.getElementById("announcement-list");

      announcements.forEach((announcement) => {
        const card = document.createElement("div");
        card.classList.add("card", "mb-3");

        const cardBody = document.createElement("div");
        cardBody.classList.add("card-body");

        const title = document.createElement("h5");
        title.classList.add("card-title");
        title.innerText = announcement.title;

        const date = document.createElement("p");
        date.classList.add("card-text", "text-muted");
        date.innerText = announcement.date;

        const content = document.createElement("p");
        content.classList.add("card-text");
        content.innerText = announcement.content;

        cardBody.appendChild(title);
        cardBody.appendChild(date);
        cardBody.appendChild(content);
        card.appendChild(cardBody);

        announcementList.appendChild(card);
      });
    }

    // Display upcoming events
    function displayUpcomingEvents() {
      const upcomingEvents = document.getElementById("upcoming-events");

      events.forEach((event) => {
        const card = document.createElement("div");
        card.classList.add("card", "mb-3");

        const cardBody = document.createElement("div");
        cardBody.classList.add("card-body");

        const title = document.createElement("h5");
        title.classList.add("card-title");
        title.innerText = event.title;

        const date = document.createElement("p");
        date.classList.add("card-text", "text-muted");
        date.innerText = event.date;

        const time = document.createElement("p");
        time.classList.add("card-text");
        time.innerText = event.time;

        const location = document.createElement("p");
        location.classList.add("card-text");
        location.innerText = event.location;

        cardBody.appendChild(title);
        cardBody.appendChild(date);
        cardBody.appendChild(time);
        cardBody.appendChild(location);
        card.appendChild(cardBody);

        upcomingEvents.appendChild(card);
      });
    }

    displayAnnouncements();
    displayUpcomingEvents();
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
