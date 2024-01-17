<!DOCTYPE html>
<html lang="it">
<head>
  <title>Verifica di tpsit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
      table {
          border:solid;
          width:100%;
      }
      td, tr {
          border:solid;
          font:100%;
          text-align:center;
          height:60px;
      }
      label {
          display:block;
          text-align:center;
      }
      input {
          width:100%;
          text-align:center;
      }
      input[type=submit] {
          margin-left:0px;
          margin-top:5px;
          margin-bottom:10px;
      }
      input[type=text] {
        width:100%;
        text-align:center;
      }
      form {
        text-align:center;
      }
  </style>
</head>
<body>

<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>SQL</h1>
  <p>(C) Nicola Bernardi 2024</p> 
</div>
  
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h3>Verifica TPSIT</h3>
      <p>Divertiti ad interrogare il database</p>
      
      <form method="POST">
        <label for="input">Codice film:</label>
        <input type="text" id="input" name="film">
        <label for="dettaglio">Livello di dettaglio: </label>
        <input type="number" id="dettaglio" name="det">
        <input type="submit">
      </form>
    </div>
    
    <div class="col-sm-4">
      <h3>Modifica percorso locandina</h3>
      <form method="POST">
        <label for="img">Nuovo percorso locandina: </label>
        <input type="text" id="img" name="path">
        <label for="idddd">ID: </label>
        <input type="text" id="idddd" name="idpathloc">

        <input type="submit">
      </form>
      <h3>Aggiunta righe nella tabella tpsit01_film_moreinfo</h3>
      <form method="POST">
        <label for="fid">Film_ID: </label>
        <input type="number" id="fid" name="film_id">
        <label for="p1">Image1 path: </label>
        <input type="text" id="p1" name="img1">
        <label for="p2">Image2 path: </label>
        <input type="text" id="p2" name="img2">
        <label for="p3">Image3 path: </label>
        <input type="text" id="p3" name="img3">
        <label for="sd">Small Description: </label>
        <input type="text" id="sd" name="smalldescription">
        <label for="fd">Full Description: </label>
        <input type="text" id="fd" name="fulldescription">

        <input type="submit">
      </form>

      <h3>Cancella riga da id nella tabella tpsit01_film_moreinfo</h3>
      <form method="POST">
        <label for="idcan">ID: </label>
        <input type="text" id="idcan" name="idcan">

        <input type="submit">
      </form>
    </div>
    
    <div class="col-sm-4">
      <?php
        require("php/dbpdo.php");
      ?>
    </div>
    
  </div>
</div>

</body>
</html>
