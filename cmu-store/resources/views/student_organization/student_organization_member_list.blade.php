
@extends('layouts.student_organization_navigation_bar')

@section('main-content')

<div class="content">
    <div class="container">
        <div class="container breadcrumbs">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/login/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item">Student Organization</li>
                <li class="breadcrumb-item active" aria-current="page">Student List</li>
            </ol>
            </nav>
        </div>
    <div class="container" id="tablecontainer">
        <div class="row head-container">
            <div class="col-md-6 col-sm-12">
                <div class="input-container">
                    <i class="fa fa-search"></i>
                    <input type="text" placeholder="Search Event">
                </div>
            </div>
            <div class="col-md-6 col-sm-12" style="display: flex; align-items: center; justify-content: flex-end;">
                <button class="btn sort-btn"><i class="bi bi-sort-up"></i></button>
                <div class="select-dropdown">
                    <select id="sort-select" class="form-control" style="text-align: center;">
                        <option value="">Select Semester</option>
                        <option value="option1">1st Semester 2023-2024</option>
                        <option value="option2">2nd Semester 2022-2023</option>
                        <option value="option3">1st Semester 2022-2023</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <h3><i class="fas fa-list mt-2"></i> Student List</h3>
        <div class="container" id="table-container">

            <div class="student-buttons d-flex justify-content-end">
                <div class="btn-group" role="group">
                    <button class="btn me-2" id="add-student-list-button" data-bs-toggle="modal" data-bs-target="#editModal">
                        <i class="bi bi-person-plus"></i>  Add student
                    </button>
                    <input type="file" id="fileInput" accept=".xlsx" style="display: none;">
                    <button class="btn me-2" id="add-student-button"  onclick="document.getElementById('fileInput').click()">
                    <i class="bi bi-file-earmark-plus"></i> Add student list
                    </button>
                </div>
            </div>
            <div class="scroll-pane">
                <member-list
                organization_id = {{Session::get('org_id')}}
                >

                </member-list>
            </div>


      {{-- <div class="scroll-pane">
          <table id="student-list-table">
            <thead>
              <tr>
                <th>Student ID number</th>
                <th>Name</th>
                <th>Year Level</th>
                <th>College</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>2023-05-01</td>
                <td>John Smith</td>
                <td>1st year</td>
                <td>CISC</td>
                <td>
                    <button class="edit-button ellipsis-button"> <i class="bi bi-pencil-square"></i></button>
                    <button class="delete-button ellipsis-button"><i class="bi bi-trash"></i></button>
                  </td>
              </tr>



            </tbody>
          </table>
        </div> --}}
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
            <h5 class="modal-title" id="accountability-modal-label">About Student</h5>
          </div>
          <div class="modal-body">
          <form id="editForm">
            <div class="mb-3">
              <label for="studentID" class="form-label">Student ID number:</label>
              <input type="text" id="studentID" readonly class="form-control">
            </div>
            <div class="mb-3">
              <label for="name" class="form-label">Name:</label>
              <input type="text" id="name" class="form-control">
            </div>
            <div class="mb-3">
              <label for="yearlevel" class="form-label">Year Level:</label>
              <input type="text" id="yearlevel" class="form-control">
            </div>
            <div class="mb-3">
              <label for="college" class="form-label">College:</label>
              <input type="text" id="college" class="form-control">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" id="save-student-button">Save</button>
            </div>
          </form>
        </div>
        </div>
      </div>
      </div>


      </div>
    </div>
  </div>
    @endsection

    @section('custom-script')
    <script>
        const editButtons = document.getElementsByClassName('edit-button');
        const editModal = document.getElementById('editModal');
        const closeModal = editModal.getElementsByClassName('close')[0];
        const editForm = document.getElementById('editForm');
        const studentIDInput = document.getElementById('studentID');
        const nameInput = document.getElementById('name');
        const yearlevelInput = document.getElementById('yearlevel');
        const collegeInput = document.getElementById('college');

        function showModal() {
          editModal.style.display = 'block';
          // Retrieve the values from the table and populate the form fields
          const row = this.closest('tr');
          const studentID = row.cells[0].textContent;
          const name = row.cells[1].textContent;
          const yearlevel = row.cells[2].textContent;
          const college = row.cells[3].textContent;

          studentIDInput.value = studentID;
          nameInput.value = name;
          yearlevelInput.value = yearlevel;
          collegeInput.value = college;
        }

        function hideModal() {
          editModal.style.display = 'none';
        }

        function submitForm(event) {
          event.preventDefault();
          // Retrieve the selected values from the form fields
          const studentID = studentIDInput.value;
          const name = nameInput.value;
          const yearlevel = yearlevelInput.value;
          const college = college.value;

          // Perform further actions or send the form data to the server
          console.log('Student ID:', studentID);
          console.log('Name:', name);
          console.log('Year-Level:', yearlevel);
          console.log('College:', college);
          hideModal();
        }

        Array.from(editButtons).forEach(button => {
          button.addEventListener('click', showModal);
        });

        closeModal.addEventListener('click', hideModal);
        editForm.addEventListener('submit', submitForm);
      </script>

      <script src="{{ asset('js/app.js') }}"></script>
      <script>
        const table = document.getElementById('student-list-table');
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

     <script>
        // Function to handle the file input change event
        document.getElementById('fileInput').addEventListener('change', function(e) {
            var file = e.target.files[0];

            if (file) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    var data = e.target.result;
                    var workbook = XLSX.read(data, { type: 'binary' });
                    var sheetName = workbook.SheetNames[0];
                    var sheet = XLSX.utils.sheet_to_json(workbook.Sheets[sheetName]);

                    // Populate the table with the data from the Excel file
                    var tableBody = document.getElementById("table-body");
                    var noRecordsRow = document.getElementById("no-records-row");
                    noRecordsRow.style.display = "none"; // Hide the initial "No records" row

                    tableBody.innerHTML = ''; // Clear existing data

                    if (sheet.length === 0) {
                        noRecordsRow.style.display = "table-row"; // Show "No records" message
                    } else {
                        sheet.forEach(function(record) {
                            var row = document.createElement("tr");
                            var idCell = document.createElement("td");
                            idCell.textContent = record.ID;
                            var nameCell = document.createElement("td");
                            nameCell.textContent = record.Name;
                            var ageCell = document.createElement("td");
                            ageCell.textContent = record.Age;

                            row.appendChild(idCell);
                            row.appendChild(nameCell);
                            row.appendChild(ageCell);

                            tableBody.appendChild(row);
                        });
                    }
                };

                reader.readAsBinaryString(file);
            }
        });
    </script>

    <!-- Include the XLSX library for parsing Excel files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.3/xlsx.full.min.js"></script>

@endsection
