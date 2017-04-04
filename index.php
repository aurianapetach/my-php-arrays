<?php
  $company = 'HeroesRreal';
  $title = 'Arrays';
  $topic = 'Marvel Heroes';
  $franchise = 'Avengers';

  // Let's create a simple array
  $superheroes = array(
    'Iron Man',
    'Thor',
    'Captain America',
    'Black Widow',
    'Hawkeye',
    'The Hulk',
    'Spiderman'
  );

  $powers = array(
    'Iron Man' => Rich,
    'Thor' => Alien,
    'Captain America' => Strength,
    'Black Widow' => Agility,
    'Hawkeye' => Archery,
    'The Hulk' => Giant,
    'Spiderman' => Spiderey
  );

  // Count how many items are stored in the array $movies
  $herosNumber = count($superheroes);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body>
    <main class="container py-4">
      <h1><?php echo $topic; ?>: <em><?php echo $franchise; ?></em></h1>
      <p>There're at least <?php echo $herosNumber; ?> superheros who are part of the <em><?php echo $franchise; ?></em> franchise.</p>
      <ul class="list-group pb-4" style="max-width: 20rem;">
        <?php
          foreach ($superheroes as $superhero) {
              echo '<li class="list-group-item">'.$superhero.'</li>';
          }
          // Let's unset $movie so it can be used again later
          unset($superhero);
        ?>
      </ul>
      <p>The best <em><?php echo $franchise; ?></em> hero is <em><?php echo $superheroes[0]; ?></em>.</p>
      <hr>
      <h2 class="h5 mb-4">The <em><?php echo $franchise; ?></em> heroes have some of the following superpowers:</h2>
      <ul class="list-group pb-4" style="max-width: 20rem;">
        <?php
          foreach ($powers as $power => $year) {
              echo '<li class="list-group-item justify-content-between"><em>'.$movie.'</em> '.$year.'</li>';
          }
          // Let's unset $movie so it can be used again later
          unset($superhero);
        ?>
      </ul>
    </main>
    <footer class="container">
      <hr>
      <?php echo '<p>Copyright &copy; '.date('Y').' '.$company.'. All rights reserved.</p>'; ?> 
  </body>
</html>