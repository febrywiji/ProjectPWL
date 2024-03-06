<!DOCTYPE html>
<html>

<head>
  <title>Membuat Form Registrasi</title>
  <link rel="stylesheet" type="text/css" href="app.css">
</head>

<body>
  <div class="isiform">
    <center>
      <h2>Registrasi</h2>
    </center>
    <div class="login">
      <form action="#" method="POST" onSubmit="validasi()">
        <div>
          <label>Nama Lengkap:</label>
          <input type="text" name="nama" id="nama" />
        </div>
        <div>
          <label>Email:</label>
          <input type="email" name="email" id="email" />
        </div>
        <div>
          <label>Asal Daerah: (contoh : Pontianak, Kalimantan Barat)</label>
          <input type="text" name="asal daerah" id="daerah" />
        </div>
        <div>
          <label>Tanggal Lahir:</label>
          <input type="date" name="tanggal" id="tanggal" />
        </div>
        <div>
          <input type="submit" value="Daftar" class="tombol" onclick="testresult(this.form)">
        </div>
      </form>
    </div>
  </div>
</body>
</html>