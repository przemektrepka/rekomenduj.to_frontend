<?php

$lang = 'pl';

$tagsBodyBasic = 'preload device--mobile';

$tagsNav = 'nav--transparent';
$tagsTemplate = 'template--steps';

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">
<head>
  <?php include 'elements/head.php' ?>
</head>

<body class="<?php echo $tagsBodyBasic . ' ' . $tagsNav . ' ' . $tagsTemplate ?>">
  <?php include 'elements/bof-scripts.php' ?>

  <div class="page__wrapper">

    <?php include 'elements/nav.php' ?>

    <main>

      <?php

      $step = 5; $stepMax = 5;
      $stepperHeader = 'Skoro jesteś rodzicem, powiedz nam <br/>o swoich pociechach...';
      $stepperContent = <<<STEPPERCONTENT

      <div class="input input--number">
        <input tabindex name="kidsNumber" id="kidsNumber" type="number" step="1" min="0" max="69" autocomplete="number" pattern="[0-9]{3}" required spellcheck="false" placeholder="Podaj swoją odpowiedź">
        <label for="kidsNumber"
              data-focused="Jestem rodzicem..."
              data-original="Podaj liczbę dzieci"
              data-invalid="Podaj poprawną odpowiedź">Podaj liczbę dzieci</label>
        <span class="number__suffix"
              data-suffix-single="dziecko"
              data-suffix-maxfive="dzieciaków"
              data-suffix-fivemore="dzieci"></span>
        <span class="ripple number__more" data-icon="e"></span>
        <span class="ripple number__less" data-icon="f"></span>
      </div>

      <!-- TODO powielać w zależności od ilości dzieci -->
      <div id="kidsInputs">

      </div>
      <!-- Koniec instancji do powielania -->

STEPPERCONTENT;

      include 'content/firsttime.php'

      ?>

    </main>

    <?php include 'elements/footer.php' ?>
  </div>

  <?php include 'elements/eof-scripts.php' ?>
</body>
</html>
