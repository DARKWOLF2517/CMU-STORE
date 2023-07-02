@extends('Layouts.main')

@section('main-content')

<div class="content">
<div class="container">
    <h2>Student member List</h2>
    <div class="scroll-pane">
      <table id="attendance-table">
        <thead>
          <tr>
            <th>Student ID number</th>
            <th>Name</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>2023-05-01</td>
            <td>John Smith</td>
          </tr>
          <tr>
            <td>2023-05-01</td>
            <td>John Smith</td>
          </tr>
          <tr>
            <td>2023-05-01</td>
            <td>John Smith</td>
          </tr>
          <tr>
            <td>2023-05-01</td>
            <td>John Smith</td>
          </tr>
          <tr>
            <td>2023-05-01</td>
            <td>John Smith</td>
          </tr>
          <tr>
            <td>2023-05-01</td>
            <td>John Smith</td>
          </tr>
          <tr>
            <td>2023-05-01</td>
            <td>John Smith</td>
          </tr>
          <tr>
            <td>2023-05-01</td>
            <td>John Smith</td>
          </tr>
          <tr>
            <td>2023-05-01</td>
            <td>John Smith</td>
          </tr>
          <tr>
            <td>2023-05-01</td>
            <td>John Smith</td>
          </tr>
          <tr>
            <td>2023-05-01</td>
            <td>John Smith</td>
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

  <script src="{{ asset('js/app.js') }}"></script>
  <script>
    const table = document.getElementById('attendance-table');
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
