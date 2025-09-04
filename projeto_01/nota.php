<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota</title>
</head>
<body style="background-color: rgb(101, 71, 35);">
    <div style="border: 1px black solid; width: 300px; padding: 100px; margin: auto;
     text-align: center; align-items: center; background-color: rgb(233, 152, 53); border-radius: 30px;">
        <form action="calcula_nota.php" method="post">
        <label  for="nota"><h1>Digite sua nota</h1></label><br><br>
        <input type="number" name="nota" id="nota" step="any" required><br><br>
        <input type="text" name="disciplina" id="disciplina" step="any"><br><br><br>
        <button type="submit"><h3>Caulcular</h3></button>   
    </div>
    </form>
</body>
</html>

