@extends('layouts.student_organization_navigation_bar')


@section('main-content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.9/xlsx.full.min.js"></script>

<link href="/custom_css/StudentAccountabilities.css" rel="stylesheet">
<div class="content">
    <div class="container">
        <div class="container breadcrumbs">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/login/org_dashboard">Dashboard</a></li>
                <li class="breadcrumb-item">Student Organization</li>
                <li class="breadcrumb-item active" aria-current="page">Accountabilities</li>
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

        <div class="container student-buttons d-flex justify-content-end" id="containers">
            <div class="btn-group" role="group">
                <button class="btn me-2" id="add-student-list-button" onclick="printTableData()">
                    <i class="fas fa-print"></i> Print Recorded Attendance
                </button>
                <button class="btn me-2" id="add-student-button" onclick="  downloadTableData()">
                    <i class="fas fa-download"></i> Download Recorded Attendance
                </button>
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
                <button id="first-page-button" onclick="goToPage(1)" disabled>&lt;&lt;</button>
                <button id="previous-page-button" onclick="previousPage()" disabled>&lt; Previous</button>
                <span id="pagination-numbers"></span>
                <button id="next-page-button" onclick="nextPage()">Next &gt;</button>
                <button id="last-page-button" onclick="goToPage(pageCount)">&gt;&gt;</button>
            </div>
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
</div>

    @endsection
      <!-- Bootstrap JavaScript -->
      {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> --}}
    @section('custom-script')

    <script>
        const table = document.getElementById('accountabilities-table');
        const rows = table.querySelectorAll('tbody tr');
        const rowsPerPage = 8; // Adjust this to the desired number of rows per page
        let currentPage = 1;
        const pageCount = Math.ceil(rows.length / rowsPerPage);

        function updateTable() {
            const startIndex = (currentPage - 1) * rowsPerPage;
            const endIndex = startIndex + rowsPerPage;

            rows.forEach((row, index) => {
                if (index >= startIndex && index < endIndex) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });

            // Display all page numbers
            let paginationNumbers = '';
            for (let i = 1; i <= pageCount; i++) {
                paginationNumbers += `<button onclick="goToPage(${i})" ${i === currentPage ? 'class="active"' : ''}>${i}</button>`;
            }
            document.getElementById('pagination-numbers').innerHTML = paginationNumbers;

            document.getElementById('first-page-button').disabled = currentPage === 1;
            document.getElementById('previous-page-button').disabled = currentPage === 1;
            document.getElementById('next-page-button').disabled = currentPage === pageCount;
            document.getElementById('last-page-button').disabled = currentPage === pageCount;
        }

        function goToPage(page) {
            currentPage = page;
            updateTable();
        }

        function previousPage() {
            if (currentPage > 1) {
                currentPage--;
                updateTable();
            }
        }

        function nextPage() {
            if (currentPage < pageCount) {
                currentPage++;
                updateTable();
            }
        }

        // Initialize the table and pagination
        updateTable();
    </script>
    <script>
             function printTableData() {
            const table = document.getElementById('accountabilities-table');
            const rows = table.querySelectorAll('tbody tr');

            let tableData = '<table style="border-collapse: collapse;">'; // Add a style to remove the border

            // Add table headers excluding the last column (Actions)
            tableData += '<thead>';
            tableData += '<tr>';
            table.querySelectorAll('thead th').forEach(header => {
                if (header.textContent !== 'Actions') {
                    tableData += '<th>' + header.textContent + '</th>';
                }
            });
            tableData += '</tr>';
            tableData += '</thead>';

            // Add table body, excluding the last column (Actions)
            tableData += '<tbody>';
            rows.forEach(row => {
                tableData += '<tr>';
                row.querySelectorAll('td').forEach((cell, index) => {
                    if (index !== 6) { // Skip the last column (Actions)
                        tableData += '<td>' + cell.textContent + '</td>';
                    }
                });
                tableData += '</tr>';
            });
            tableData += '</tbody>';
            tableData += '</table>';

            // Open a new window and print the table data
            const printWindow = window.open('', '', 'width=600,height=600');
            printWindow.document.open();
            printWindow.document.write('<html><head><title>Printed Table</title></head><body>');
            printWindow.document.write('<h3>Student Accountabilities</h3>');
            printWindow.document.write(tableData);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
            printWindow.close();
        }

        function downloadTableData() {
            const table = document.getElementById('accountabilities-table');
            const clonedTable = table.cloneNode(true);

            // Remove the "Actions" column from the cloned table
            clonedTable.querySelectorAll('tr').forEach(row => {
                const cells = row.querySelectorAll('td, th');
                if (cells.length > 0) {
                    cells[cells.length - 1].remove();
                }
            });

            // Create a new XLSX workbook and add the cloned table to it
            const ws = XLSX.utils.table_to_sheet(clonedTable);
            const wb = XLSX.utils.book_new();
            XLSX.utils.book_append_sheet(wb, ws, 'TableData');

            // Save the workbook as an XLSX file and trigger the download
            XLSX.writeFile(wb, 'table_data.xlsx');
        }
    </script>


    {{-- <script>
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
        {{-- <script>
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
        <script>
            function printTable() {
                var table = document.getElementById("accountabilities-table");
                var printWindow = window.open('', '', 'width=800,height=600');
                printWindow.document.open();
                printWindow.document.write('<html><head><title>Print Table</title></head><body>');
                printWindow.document.write('<h1>Recorded Attendance Table</h1>');
                printWindow.document.write(table.outerHTML);
                printWindow.document.write('</body></html>');
                printWindow.document.close();
                printWindow.print();
                printWindow.close();
            }
            </script> --}} --}}


@endsection
