<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/style.css">

  <title>Morpion</title>
</head>

<body>
  <div class="board" id="board">



    <?php for ($i = 1; $i <= 9; $i++) { ?>
      <div class="cell" data-cell></div>
    <?php } ?>

  </div>
  <div class="winning-message" id="winningMessage">
    <div data-winning-message-text></div>
    <button id="restartButton">Recommencer</button>
  </div>
  <script src="assets/js/script.js" defer></script>
</body>

</html>