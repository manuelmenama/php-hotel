<?php

    $have_parking = $_GET["have_parking"];
    $star_vote = $_GET["star_vote"];
    $star_vote = intval($star_vote);

    

    $hotels = [

      [
          'name' => 'Hotel Belvedere',
          'description' => 'Hotel Belvedere Descrizione',
          'parking' => true,
          'vote' => 4,
          'distance_to_center' => 10.4
      ],
      [
          'name' => 'Hotel Futuro',
          'description' => 'Hotel Futuro Descrizione',
          'parking' => true,
          'vote' => 2,
          'distance_to_center' => 2
      ],
      [
          'name' => 'Hotel Rivamare',
          'description' => 'Hotel Rivamare Descrizione',
          'parking' => false,
          'vote' => 1,
          'distance_to_center' => 1
      ],
      [
          'name' => 'Hotel Bellavista',
          'description' => 'Hotel Bellavista Descrizione',
          'parking' => false,
          'vote' => 5,
          'distance_to_center' => 5.5
      ],
      [
          'name' => 'Hotel Milano',
          'description' => 'Hotel Milano Descrizione',
          'parking' => true,
          'vote' => 2,
          'distance_to_center' => 50
      ],

    ];

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>

  <title>La prima regola dell'hotellerie</title>
</head>
<body>

<div class="container">

  <div class="row">

    

    <?php 
    
      echo "<p>$have_parking</p>";
      

    ?>
    <form class="col-6 mt-5 d-flex">
      <div class="form-check me-3">
        <input class="form-check-input" type="radio" name="have_parking" id="have-parcking-yes" value="1" cheked>
        <label class="form-check-label" for="have-parcking-yes">
          Con Parcheggio
        </label>
      </div>
      <div class="form-check me-3">
        <input class="form-check-input" type="radio" name="have_parking" id="have-parcking-no" value="0">
        <label class="form-check-label" for="have-parcking-no">
          Senza Parcheggio
        </label>
      </div>
      <select class="form-select me-3" aria-label="Default select example" name="star_vote">
        <option selected>Minimum stars</option>
        <option value="1">Una Stella</option>
        <option value="2">Due Stelle</option>
        <option value="3">Tre Stelle</option>
        <option value="4">Quattro Stelle</option>
        <option value="5">Cinque Stelle</option>
      </select>
      <button class="btn btn-primary" type="submit">Filtra</button>
    </form>

    

    <div class="col-12 mt-5">

      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Parcheggio</th>
            <th scope="col">Stelle</th>
            <th scope="col">Distanza dal centro</th>
          </tr>
        </thead>
        <tbody>
          
          <?php
            /*if(isset($star_vote)){

              if($hotel["vote"] >= $star_vote){
                foreach($hotels as $hotel){
                  echo "<tr>";
                    foreach($hotel as $key => $argument){
                      if($key === 'name'){
                        echo "<th>$argument</th>";
                      }elseif($key === 'parking'){
                        if($argument){
                          echo "<td>Si</td>";
                        }else{
                          echo "<td>No</td>";
                        }
                      }else{
                        echo "<td>$argument</td>";
                      }
                    }
                  echo "</tr>";
                }
              }

            }else{
              foreach($hotels as $hotel){
                echo "<tr>";
                  foreach($hotel as $key => $argument){
                    if($key === 'name'){
                      echo "<th>$argument</th>";
                    }elseif($key === 'parking'){
                      if($argument){
                        echo "<td>Si</td>";
                      }else{
                        echo "<td>No</td>";
                      }
                    }else{
                      echo "<td>$argument</td>";
                    }
                  }
                echo "</tr>";
              }
            }*/
            if(isset($have_parking)){
              
              ($have_parking === "1") ? $have_parking = true : $have_parking = false;


              foreach($hotels as $hotel){

                if($hotel["parking"] === $have_parking){
                  echo "<tr>";
                    foreach($hotel as $key => $argument){
                      if($key === 'name'){
                        echo "<th>$argument</th>";
                      }elseif($key === 'parking'){
                        if($argument){
                          echo "<td>Si</td>";
                        }else{
                          echo "<td>No</td>";
                        }
                      }else{
                        echo "<td>$argument</td>";
                      }
                    }
                  echo "</tr>";
                }
              }
            }else{
              foreach($hotels as $hotel){
                echo "<tr>";
                  foreach($hotel as $key => $argument){
                    if($key === 'name'){
                      echo "<th>$argument</th>";
                    }elseif($key === 'parking'){
                      if($argument){
                        echo "<td>Si</td>";
                      }else{
                        echo "<td>No</td>";
                      }
                    }else{
                      echo "<td>$argument</td>";
                    }
                  }
                echo "</tr>";
              }

            }
             
            ?>

        </tbody>
      </table>

    </div>

  </div>

</div>
  
</body>
</html>