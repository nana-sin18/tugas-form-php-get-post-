<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      .btn{
       background-color: skyblue;
       color: black;
       margin-top: 15px;
       border-radius: 5px;
       
      }
    </style>
</head>
<body>
  <h1>Masukkan Data dibawah ini</h1>
<form action="submit.php" method="POST">
  <label for="username">Nama:</label>
  <input type="text" name="username">
  <br/>
  <label for="email">Email:</label>
  <input type="email" name="email">
  <br/>
  <label for="message">Pesan:</label>
  <input type="text" name="message">
  <br/>
  <button type="submit" class="btn">Kirim</button>
</form>
</body>
</html>