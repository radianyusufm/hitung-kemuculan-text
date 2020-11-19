<?php

include 'classes/calculate.class.php';
include 'classes/stopword.class.php';

if (isset($_POST['submit'])) {

    $kalimat = trim($_POST['kalimat']);

  if (!empty($kalimat)) {
      $calculate = new Calculate();
      $arr = $calculate->tabelKata($kalimat);

      //menampilkan value array Desc
      arsort($arr);
  } else {
      header('Location: index.php');
  }

} else {
  header('Location: index.php');
}

 ?>


 <!DOCTYPE html>
 <html lang="en">
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
     <h1 class="text-center"> HASIL TEXT</h1>
     <hr>
    <div class="container">
      <div class="row">
        <div class="col-md-3 tableFixHead">
           <table class="table">
                 <thead>
                   <tr>
                     <th > No. </th>
                     <th >Kata</th>
                     <th >Jumlah</th>
                   </tr>
                 </thead>
                   <?php $i = 0 ?>
                   <?php foreach ($arr as $key => $value) { ?>
                 <tbody>
                   <tr>
                     <td><?php echo $i = $i + 1; ?></td>
                     <td><?= $key; ?></td>
                     <td><?= $value; ?></td>
                   </tr>
                 </tbody>
               <?php }?>
               </table>
          </div>

          <div class="col-md-1"></div>
          <div class="col-md-6 text-center ">
            <div class="jumbotron">

              <?php $normalArray = array_keys($arr); ?>


              <div class="row">
                <div class="col-md-6">
                <?php echo "<span  style='color:red; font-size: 90px; '> ". $normalArray[0] . "</span>";  ?>
                </div>
                <div class="col-md-3">
                  <?php
                  if (count($normalArray) > 1) {
                    echo "<span style='color:blue;  font-size: 55px;'>". $normalArray[1] . "</span>";
                  }
                   ?>
                </div>
              </div>
              <div class="row">
                <div class="col-md-5">
                  <?php
                  if (count($normalArray) > 2) {
                     echo "<span style='color:gray;  font-size: 50px;'>". $normalArray[2] . "</span>";
                 }
                   ?>
                </div>

                <div class="col-md-4">
                  <?php
                  if (count($normalArray) > 3) {
                    echo "<span style='color:green;  font-size: 39px;'>". $normalArray[3] . "</span>";
                }
                   ?>
                </div>
                <div class="col-md-4">
                  <?php
                  if (count($normalArray) > 4) {
                   echo "<span style='color:Orange;  font-size: 32px;'>". $normalArray[4] . "</span>";
               }
                   ?>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <?php
                if (count($normalArray) > 5) {
                   echo "<span style='color:brown;  font-size: 27px;'>". $normalArray[5] . "</span>";
               }
                 ?>
               </div>
                <div class="col-md-6">

                  <?php
                if (count($normalArray) > 6) {
                   echo "<span style='color:brown;  font-size: 21px;'>". $normalArray[6] . "</span>";
               }
                 ?>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6"></div>
                <?php
                if (count($normalArray) > 7) {
                  $a = 0;
                  for ($i=7; $i < count($normalArray) ; $i++) {
                    $a = $a + 1;
                    echo "<div class='col-md-4'><span style='color:gray; font-size: 15px; '>" . $normalArray[$i] . "</span></div>";
                    if ($i == 12) {
                      break;
                    }
                  }
                }
                 ?>
              </div>

            </div>
          </div>

        </div>
      </div>




   </body>
 </html>
