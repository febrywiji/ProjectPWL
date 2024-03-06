<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ebook Dummy</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

header {
  background-color: #40A2E3;
  color: #fff;
  text-align: center;
  padding: 20px 0;
}

main {
  display: flex;
  justify-content: space-between;
  padding: 20px;
}

.ebook-list, .ebook-details {
  width: 45%;
}

ul {
  list-style-type: none;
  padding: 0;
}

li {
  margin-bottom: 10px;
}

.ebook-details {
  border: 1px solid #ccc;
  padding: 20px;
}

.ebook-details img {
  max-width: 100%;
}

.ebook-details a {
  display: inline-block;
  background-color: #333;
  color: #fff;
  padding: 10px 20px;
  text-decoration: none;
  margin-top: 10px;
}
  </style>
</head>
<body>
  <header>
    <h1>Ebook</h1>
  </header>
  <main>
    <div class="ebook-list">
      <h2>Daftar Ebook</h2>
      <ul id="ebook-list">
        <!-- Ebook list will be populated dynamically using JavaScript -->
      </ul>
    </div>
    <div class="ebook-details">
      <h2>Detail Ebook</h2>
      <div id="ebook-details">
        <!-- Ebook details will be populated dynamically using JavaScript -->
      </div>
    </div>
  </main>
  <script>
    // Dummy ebook data
const ebooks = [
  { id: 1, title: 'Seni Hidup Minimalis', author: 'Putra Rico', description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', cover: 'cover1.jpg', file: 'ebook1.pdf' },
  { id: 2, title: 'sejarah Filsafat Barat', author: 'Thor Kane', description: 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', cover: 'cover2.jpg', file: 'ebook2.pdf' },
  { id: 3, title: 'Seni Berperang', author: 'Sun Tzu', description: 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', cover: 'cover3.jpg', file: 'ebook3.pdf' },
  // Add more ebook objects as needed
];

// Function to display ebook list
function displayEbookList() {
  const ebookList = document.getElementById('ebook-list');
  ebookList.innerHTML = '';
  ebooks.forEach(ebook => {
    const li = document.createElement('li');
    li.innerHTML = `<a href="#" onclick="showEbookDetails(${ebook.id})">${ebook.title}</a>`;
    ebookList.appendChild(li);
  });
}

// Function to display ebook details
function showEbookDetails(id) {
  const ebook = ebooks.find(ebook => ebook.id === id);
  const ebookDetails = document.getElementById('ebook-details');
  ebookDetails.innerHTML = `
    <h3>${ebook.title}</h3>
    <p><strong>Author:</strong> ${ebook.author}</p>
    <p><strong>Description:</strong> ${ebook.description}</p>
    <img src="${ebook.cover}" alt="Ebook Cover">
    <p><a href="${ebook.file}" target="_blank">Read Ebook</a></p>
  `;
}

// Display ebook list when the page loads
window.onload = displayEbookList;
  </script>
</body>
</html>