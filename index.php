<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kalkulator Kata</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
 integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <link rel="stylesheet" href="style/style.css">

</head>
  <body>

    <div class="container">
      <h1 class="text-center">Kemunculan Text</h1>

      <div class="row">
        <div class="center_div">

          <form action="calculate.php" method="POST">
            <div class="form-group">
              <textarea class="form-control" name="kalimat" rows="10"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-default">Submit</button>
          </form>

        </div>
      </div>


      
    </div>
  </body>
</html>
