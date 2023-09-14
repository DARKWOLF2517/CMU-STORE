@extends('layouts.student_organization_navigation_bar')


@section('main-content')
<link href="/custom_css/StudentAccountabilities.css" rel="stylesheet">
<div class="content">
    <div class="container">
        <div class="container breadcrumbs">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/homepage">Dashboard</a></li>
                <li class="breadcrumb-item">Student Organization</li>
                <li class="breadcrumb-item active" aria-current="page">Accountabilities</li>
              </ol>
            </nav>
        </div>
        <div class="container" id="tablecontainer">

            <div class="row head-container">
                <div class="col-md-6">
                  <div class="input-group search-bar">
                    <input type="text" class="form-control rounded-start" placeholder="Search Student" aria-label="Search"
                      aria-describedby="search-icon">
                    <button class="btn btn-primary rounded-end" type="button" id="search-icon">
                      <i class="bi bi-search"></i>
                    </button>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="d-flex justify-content-end">
                    <label for="sort-select"></label>
                    <select id="sort-select">
                        <option value="option1">1st Semester 2023-2024</option>
                        <option value="option2">2nd Semester 2022-2023</option>
                        <option value="option3">1st Semester 2022-2023</option>
                    </select>
                  </div>
                </div>
              </div>
            <h3> <i class="fas fa-list"></i>  Student Accountabilities</h3>
            <div class="scroll-pane">
              <table  id="accountabilities-table">
                <thead>
                    <tr>
                        <th class="sortable-header">Student ID</th>
                        <th class="sortable-header">Student Name</th>
                        <th class="sortable-header">Membership Fee</th>
                        <th class="sortable-header">Membership Status</th>
                        <th class="sortable-header">Fines</th>
                        <th class="sortable-header">Fines Status</th>
                        <th class="sortable-header">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>2023-05-01</td>
                      <td>John Smith</td>
                      <td>$100</td>
                      <td>Unpaid</td>
                      <td>$10</td>
                      <td>Unpaid</td>
                      <td>
                        <button class="edit-button ellipsis-button"> <i class="bi bi-pencil-square"></i></button>
                        <button class="delete-button ellipsis-button"><i class="bi bi-trash"></i></button>
                      </td>
                    </tr>
                    <tr>
                        <td>2023-05-01</td>
                        <td>John Smith</td>
                        <td>$100</td>
                        <td>Unpaid</td>
                        <td>$10</td>
                        <td>Unpaid</td>
                        <td>
                          <button class="edit-button ellipsis-button"> <i class="bi bi-pencil-square"></i></button>
                          <button class="delete-button ellipsis-button"><i class="bi bi-trash"></i></button>
                        </td>
                      </tr>
                  </tbody>
              </table>
            </div>
            <div class="pagination">
              <button id="first-page-button" disabled>&lt;&lt;</button>
              <button id="previous-page-button" disabled>&lt; Previous</button>
              <span id="pagination-numbers"></span>
              <button id="next-page-button">Next &gt;</button>
              <button id="last-page-button">&gt;&gt;</button>
            </div>
          </div>
        </div>

      <!-- Modal -->
      <div id="editModal" class="modal">
        <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="accountability-modal-label">Student's Accountabilities</h5>
          </div>
          <div class="modal-body">
          <form id="editForm">
            <div class="mb-3">
              <label for="studentID" class="form-label">Student ID number:</label>
              <input type="text" id="studentID" readonly class="form-control">
            </div>
            <div class="mb-3">
              <label for="name" class="form-label">Name:</label>
              <input type="text" id="name" readonly class="form-control">
            </div>
            <div class="mb-3">
              <label for="membershipFee" class="form-label">Membership Fee:</label>
              <input type="text" id="membershipFee" class="form-control">
            </div>
            <div class="mb-3">
              <label for="membershipStatus" class="form-label">Membership Fee Status:</label>
              <select id="membershipStatus" class="form-select">
                <option value="Unpaid">Unpaid</option>
                <option value="Paid">Paid</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="fines" class="form-label">Fines:</label>
              <input type="text" id="fines" class="form-control">
            </div>
            <div class="mb-3">
              <label for="finesStatus" class="form-label">Fines Status:</label>
              <select id="finesStatus" class="form-select">
                <option value="Unpaid">Unpaid</option>
                <option value="Paid">Paid</option>
              </select>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" id="save-accountabilities-button">Save</button>
            </div>
          </form>
        </div>
        </div>
      </div>
      </div>


    @endsection
      <!-- Bootstrap JavaScript -->
      {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> --}}
    @section('custom-script')
      <script>
        const editButtons = document.getElementsByClassName('edit-button');
        const editModal = document.getElementById('editModal');
        const closeModal = editModal.getElementsByClassName('close')[0];
        const editForm = document.getElementById('editForm');
        const studentIDInput = document.getElementById('studentID');
        const nameInput = document.getElementById('name');
        const membershipFeeInput = document.getElementById('membershipFee');
        const membershipStatusSelect = document.getElementById('membershipStatus');
        const finesInput = document.getElementById('fines');
        const finesStatusSelect = document.getElementById('finesStatus');

        function showModal() {
          editModal.style.display = 'block';
          // Retrieve the values from the table and populate the form fields
          const row = this.closest('tr');
          const studentID = row.cells[0].textContent;
          const name = row.cells[1].textContent;
          const membershipFee = row.cells[2].textContent;
          const membershipFeeStatus = row.cells[3].textContent;
          const fines = row.cells[4].textContent;
          const finesStatus = row.cells[5].textContent;
          studentIDInput.value = studentID;
          nameInput.value = name;
          membershipFeeInput.value = membershipFee;
          membershipStatusSelect.value = membershipFeeStatus;
          finesInput.value = fines;
          finesStatusSelect.value = finesStatus;
        }

        function hideModal() {
          editModal.style.display = 'none';
        }

        function submitForm(event) {
          event.preventDefault();
          // Retrieve the selected values from the form fields
          const studentID = studentIDInput.value;
          const name = nameInput.value;
          const membershipFee = membershipFeeInput.value;
          const membershipFeeStatus = membershipStatusSelect.value;
          const fines = finesInput.value;
          const finesStatus = finesStatusSelect.value;
          // Perform further actions or send the form data to the server
          console.log('Student ID:', studentID);
          console.log('Name:', name);
          console.log('Membership Fee:', membershipFee);
          console.log('Membership Fee Status:', membershipFeeStatus);
          console.log('Fines:', fines);
          console.log('Fines Status:', finesStatus);
          hideModal();
        }

        Array.from(editButtons).forEach(button => {
          button.addEventListener('click', showModal);
        });

        closeModal.addEventListener('click', hideModal);
        editForm.addEventListener('submit', submitForm);
      </script>
    {{-- Pagination JS --}}
          {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
          <script>
            const table = document.getElementById('accountabilities-table');
            const rowsPerPage = 10;
            const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');
            const pageCount = Math.ceil(rows.length / rowsPerPage);
            const firstPageButton = document.getElementById('first-page-button');
            const previousPageButton = document.getElementById('previous-page-button');
            const nextPageButton = document.getElementById('next-page-button');
            const lastPageButton = document.getElementById('last-page-button');
            const paginationNumbers = document.getElementById('pagination-numbers');
            let currentPage = 1;

            function showPage(page) {
              const startIndex = (page - 1) * rowsPerPage;
              const endIndex = startIndex + rowsPerPage;

              for (let i = 0; i < rows.length; i++) {
                rows[i].style.display = i >= startIndex && i < endIndex ? 'table-row' : 'none';
              }
            }

            function updatePaginationButtons() {
              firstPageButton.disabled = currentPage === 1;
              previousPageButton.disabled = currentPage === 1;
              nextPageButton.disabled = currentPage === pageCount;
              lastPageButton.disabled = currentPage === pageCount;
            }

            function updatePaginationNumbers() {
              let paginationHTML = '';
              for (let i = 1; i <= pageCount; i++) {
                const buttonClass = i === currentPage ? 'page-number-button current-page' : 'page-number-button';
                paginationHTML += `<button class="${buttonClass}" data-page="${i}">${i}</button>`;
              }
              paginationNumbers.innerHTML = paginationHTML;

              const pageButtons = document.getElementsByClassName('page-number-button');
              for (let i = 0; i < pageButtons.length; i++) {
                const pageButton = pageButtons[i];
                pageButton.addEventListener('click', function() {
                  const page = parseInt(this.getAttribute('data-page'));
                  currentPage = page;
                  showPage(currentPage);
                  updatePaginationButtons();
                  updatePaginationNumbers();
                });
              }
            }

            function updatePagination() {
              updatePaginationButtons();
              updatePaginationNumbers();
            }

            firstPageButton.addEventListener('click', function() {
              currentPage = 1;
              showPage(currentPage);
              updatePagination();
            });

            previousPageButton.addEventListener('click', function() {
              if (currentPage > 1) {
                currentPage--;
                showPage(currentPage);
                updatePagination();
              }
            });

            nextPageButton.addEventListener('click', function() {
              if (currentPage < pageCount) {
                currentPage++;
                showPage(currentPage);
                updatePagination();
              }
            });

            lastPageButton.addEventListener('click', function() {
              currentPage = pageCount;
              showPage(currentPage);
              updatePagination();
            });

            showPage(currentPage);
            updatePagination();
          </script>
    </div>

@endsection
