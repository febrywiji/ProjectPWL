<!DOCTYPE html>
<html>

<head>
  <title>Membuat Form Registrasi</title>
  <link rel="stylesheet" type="text/css" href="../app.css">
  <style>
    .isiform {
    display: flex;
    color: black;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: left;
    position: relative;
    min-height: 100vh;
    width: 100%;
    background-image: linear-gradient(to bottom right, rgb(14, 24, 9, .6), rgb(14, 24, 9, .6)), url("images/mendaki3.jpg");
    background-position: center bottom;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
  }
  
  
  h2 {
    color: #fff;
    margin-top: 10px;
    margin-bottom: 10px;
  }
  
  .login {
    padding: 1cm;
    margin: 2cm auto;
    width: 800px;
    background: #fff;
    border-radius: 10px;
    margin-top: 5px;
  }
  
  label {
    font-size: 10pt;
    color: #555;
  }
  
  .selection select {
    font-size: 10pt;
    color: #555;
    padding: 8px;
    width: 100%;
    background: #efefef;
    border: 0;
    margin: 6px 0px;
    margin-bottom: 20px;
  }
  
  input[type="text"],
  input[type="email"],
  input[type="date"],
  input[type="number"],
  select
  label {
    padding: 8px;
    width: 100%;
    background: #efefef;
    border: 0;
    font-size: 10pt;
    margin: 6px 0px;
    margin-bottom: 20px;
  }
  
  .tombol {
    background: #3e3d38;
    color: #fff;
    border: 0;
    padding: 5px 8px;
    margin-bottom: 20px;
  }
  </style>
</head>

<body>
  <div class="isiform">
    <center>
      <h2>Registrasi</h2>
    </center>
    <div class="login">
      <form action="#" method="POST" onSubmit="validasi()">
        <div>
          <label>Nama:</label>
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