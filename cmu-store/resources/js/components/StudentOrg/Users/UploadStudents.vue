<template>

</template>

<script>

export default{
mounted(){
    this.upload();
},
methods:{
    upload(){
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

            // Function to handle the file upload
        document.getElementById("uploadButton").addEventListener("click", function() {
            document.getElementById("fileInput").click();
        });

        document.getElementById("fileInput").addEventListener("change", function(e) {
            const file = e.target.files[0];
            if (file) {
                parseExcelData(file);
            }
        });

        

        // Function to parse the uploaded Excel file
        async function parseExcelData(file) {
            const workbook = new ExcelJS.Workbook();
            const reader = new FileReader();

            reader.onload = async function(e) {
                const buffer = e.target.result;
                await workbook.xlsx.load(buffer);
                const worksheet = workbook.getWorksheet(1); // Assuming data is in the first worksheet

                // Clear the existing table content
                const tableBody = document.getElementById("studentTableBody");
                tableBody.innerHTML = "";

                // Populate the table with student data
                worksheet.eachRow({ includeEmpty: false }, function(row, rowNumber) {
                    if (rowNumber === 1) return; // Skip the header row
                    const student = row.values;
                    const studentArray = student.slice(1); // Exclude the first empty cell

                    const newRow = document.createElement("tr");
                    newRow.innerHTML = `
                        <td>${studentArray[0]}</td>
                        <td>${studentArray[1]}</td>
                        <td>${studentArray[2]}</td>
                        <td>${studentArray[3]}</td>
                        <td>
                            <button class="btn btn-danger delete-button">Delete</button>
                            <button class="btn btn-primary edit-button">Edit</button>
                        </td>
                    `;

                    tableBody.appendChild(newRow);
                });
            };

            reader.readAsArrayBuffer(file);
        }

        // Function to handle the "Edit" button click
        document.getElementById("studentTableBody").addEventListener("click", function(e) {
            if (e.target && e.target.classList.contains("edit-button")) {
                const row = e.target.closest("tr");
                const cells = row.querySelectorAll("td");

                // Disable the Edit button
                e.target.disabled = true;

                // Enable editing of the student details
                for (let i = 0; i < cells.length - 1; i++) {
                    const cellContent = cells[i].textContent;
                    const input = document.createElement("input");
                    input.value = cellContent;
                    cells[i].textContent = "";
                    cells[i].appendChild(input);
                }

                // Create a Save button
                const saveButton = document.createElement("button");
                saveButton.textContent = "Save";
                saveButton.classList.add("btn", "btn-success");
                row.querySelector(".edit-button").insertAdjacentElement("beforebegin", saveButton);

                // Handle saving changes
                saveButton.addEventListener("click", function() {
                    // Update the table with the edited details
                    for (let i = 0; i < cells.length - 1; i++) {
                        const input = cells[i].querySelector("input");
                        cells[i].textContent = input.value;
                    }

                    // Remove the Save button and re-enable the Edit button
                    saveButton.remove();
                    e.target.disabled = false;
                });
            }
        });
    }

}
        

}


</script>