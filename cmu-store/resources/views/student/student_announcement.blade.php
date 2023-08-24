
@extends('layouts.student_navigation_bar')

@section('main-content')
    <div class="content">
        <div class="container breadcrumb">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/student_dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item">Student</li>
                    <li class="breadcrumb-item active" aria-current="page">Announcements</li>
                </ol>
            </nav>
        </div>


    <div class="announcement-portlet">
        <div class="portlet-header">
            <h4 class="portlet-title"><i class="bi bi-megaphone"></i> Announcements</h4>
        </div>
        <div class="announcement-list" id="announcementContainer">
            <!-- Announcement cards will be added here using JavaScript -->
        </div>
    </div>

    <!-- Bootstrap Modal -->
    <div class="modal fade" id="announcementModal" tabindex="-1" aria-labelledby="announcementModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="announcementModalLabel">Announcement Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modalBody">
                    <!-- Announcement details will be shown here -->
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Include Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Sample announcement data (you can replace this with actual data)
        const announcements = [
            {
                title: "Title of Announcement 1",
                dateTime: "2023-08-10T10:00:00",
                description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu leo nec neque lacinia volutpat. Sed malesuada ac libero eu cursus."
            },
            {
                title: "Title of Announcement 2",
                dateTime: "2023-08-15T15:30:00",
                description: "Sed euismod justo sit amet tellus laoreet. Duis interdum arcu sed purus accumsan vestibulum. Vestibulum ac tristique orci, eu viverra odio."
            },
            {
                title: "Title of Announcement 3",
                dateTime: "2023-08-20T14:00:00",
                description: "Fusce bibendum neque vel dolor finibus. Maecenas vestibulum, purus nec venenatis vestibulum, dui mi eleifend ligula, vel tempus ligula nisi non libero."
            },

        ];

        // Sort announcements by date and time (most recent first)
        announcements.sort((a, b) => new Date(b.dateTime) - new Date(a.dateTime));

        const announcementContainer = document.getElementById("announcementContainer");
        const modalBody = document.getElementById("modalBody");

        // Function to truncate text to a certain number of words
        function truncateText(text, maxWords) {
            const words = text.split(" ");
            if (words.length > maxWords) {
                return words.slice(0, maxWords).join(" ") + "...";
            }
            return text;
        }

        // Add announcement cards to the container
        announcements.forEach((announcement, index) => {
            const truncatedDescription = truncateText(announcement.description, 20); // Limit to 20 words
            const cardHtml = `
                <div class="announcement-card" data-bs-toggle="modal" data-bs-target="#announcementModal" data-announcement-index="${index}">
                    <h5>${announcement.title}</h5>
                    <hr>
                    <p>Date and Time: ${new Date(announcement.dateTime).toLocaleString()}</p>
                    <p>Description: ${truncatedDescription}</p>
                </div>
                ${index !== announcements.length - 1 ? '<div class="horizontal-line"></div>' : ''}
            `;
            announcementContainer.innerHTML += cardHtml;
        });

        // Listen for card click event and update modal content
        announcementContainer.addEventListener("click", function(event) {
            const card = event.target.closest(".announcement-card");
            if (card) {
                const index = card.getAttribute("data-announcement-index");
                const selectedAnnouncement = announcements[index];
                modalBody.innerHTML = `
                    <h5>${selectedAnnouncement.title}</h5>
                    <hr>
                    <p>Date and Time: ${new Date(selectedAnnouncement.dateTime).toLocaleString()}</p>
                    <p>Description: ${selectedAnnouncement.description}</p>
                `;
            }
        });
    </script>
@endsection
@section('custom-script')

@endsection
