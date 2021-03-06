<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel Anlegen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="card w-75 m-auto mt-5">
  <div class="card-body">
    <form action="./artikel-Impl.php" method="POST">
  <div class="mb-3">
    <label for="" class="form-label">Artikelname</label>
    <input type="text" class="form-control" name="artikelname">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Preis</label>
    <input type="number" class="form-control" name="artikelpreis">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>