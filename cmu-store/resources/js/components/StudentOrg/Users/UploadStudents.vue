<template>
        <div class="pagination">
            <button id="first-page-button" onclick="goToPage(1)" disabled>&lt;&lt;</button>
            <button id="previous-page-button" onclick="previousPage()" disabled>&lt; Previous</button>
            <span id="pagination-numbers"></span>
            <button id="next-page-button" onclick="nextPage()">Next &gt;</button>
            <button id="last-page-button" onclick="goToPage(pageCount)">&gt;&gt;</button>
        </div>


        <button id="aqw" @click="this.getData()">ASJDHKAS</button>
</template>

<script>

export default{
props: ['org_id'],
data(){
    return{
        collectedData:[],
    }

},
mounted(){
    this.upload();
},
methods:{
    getData(){
        // Get a reference to the table
        var table = document.getElementById("student-list-table");

        // Initialize an empty array to store the data
        var data = [];

        // Iterate through the table rows and cells
        for (var i = 1; i < table.rows.length; i++) {
        var row = table.rows[i];
        var rowData = [];

        for (var j = 0; j < row.cells.length -1; j++) {
            var cell = row.cells[j];

            rowData.push(cell.textContent);
        }

        data.push(rowData);
        }
        // data.forEach((data=>{
        //
        // }));
        this.collectedData = data;
        console.log(this.collectedData)
        // Display the extracted data in the console

            axios.post('/upload_students', { data: this.collectedData })
                .then(response => {
                    console.log(response.data)
                })
                .catch(error => {
                    console.log(error)

                    });

    },
    upload(){
        // Function to handle the file upload
        document.getElementById("uploadButton").addEventListener("click", function () {
        document.getElementById("fileInput").click();
        });

        document.getElementById("fileInput").addEventListener("change", function (e) {
            const file = e.target.files[0];
            if (file) {
                parseExcelData(file);
            }
        });

                // Function to parse the uploaded Excel file and display it in the modal
            async function parseExcelData(file) {
            const workbook = new ExcelJS.Workbook();
            const reader = new FileReader();

            reader.onload = async function (e) {
            const buffer = e.target.result;
            await workbook.xlsx.load(buffer);
            const worksheet = workbook.getWorksheet(1); // Assuming data is in the first worksheet

            // Clear the existing table content
            const tableBody = document.getElementById("modalStudentTableBody");
            tableBody.innerHTML = "";

            // Populate the table with student data
            worksheet.eachRow({ includeEmpty: false }, function (row, rowNumber) {
                if (rowNumber === 1) return; // Skip the header row
                const studentArray = [];

                row.eachCell({ includeEmpty: false }, function (cell, colNumber) {
                    let cellValue = cell.text;
                    if (cell.hyperlink && cell.hyperlink.address) {
                        // If the cell contains a hyperlink, use the hyperlink's address as the cell value
                        cellValue = cell.hyperlink.address;
                    }
                    studentArray.push(cellValue);
                });

                const newRow = document.createElement("tr");
                newRow.innerHTML = `
                    <td>${studentArray[0] || ""}</td>
                    <td>${studentArray[1] || ""}</td>
                    <td>${studentArray[2] || ""}</td>
                    <td>${studentArray[3] || ""}</td>
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

            // Function to upload data from the modal to the main table
            document.getElementById("uploadToTableButton").addEventListener("click", function () {
            const modalTableBody = document.getElementById("modalStudentTableBody");
            const tableBody = document.getElementById("studentTableBody");

            // Clone the rows from the modal and append them to the main table with "Edit" and "Delete" buttons in the last cell
                const modalRows = modalTableBody.querySelectorAll("tr");
                modalRows.forEach(function (row) {
                const newRow = row.cloneNode(true);

                // Create a cell for "Edit" and "Delete" buttons in the last column
                const actionsCell = document.createElement("td");

                // Add "Edit" button
                const editButton = document.createElement("button");
                editButton.textContent = "Edit";
                editButton.classList.add("btn", "btn-primary", "edit-button");
                actionsCell.appendChild(editButton);

                // Add "Delete" button
                const deleteButton = document.createElement("button");
                deleteButton.textContent = "Delete";
                deleteButton.classList.add("btn", "btn-danger", "delete-button");
                actionsCell.appendChild(deleteButton);

                // Append the actions cell to the new row
                newRow.appendChild(actionsCell);

                // Append the new row to the main table
                tableBody.appendChild(newRow);
            });

            // Hide the modal
            const excelDataModal = new bootstrap.Modal(document.getElementById("excelDataModal"));
            excelDataModal.hide();
        });

        // Function to handle the "Delete" button click
        document.getElementById("studentTableBody").addEventListener("click", function (e) {
            if (e.target && e.target.classList.contains("delete-button")) {
                const row = e.target.closest("tr");
                if (confirm("Are you sure you want to delete this student?")) {
                    // If the user confirms the deletion, remove the row from the table
                    row.remove();
                }
            }
        });

        // Function to handle the "Edit" button click
        document.getElementById("studentTableBody").addEventListener("click", function (e) {
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
                saveButton.addEventListener("click", function () {
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
