<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
  <title>
    <?php echo $title ?>
  </title>
  <link href="assets/img/vocabs-icon.png" rel="icon">

  <link href="assets/css/happy.css" rel="stylesheet">

  <style id="syntax-style">
    <?php readfile('vocabs/'.$vocabName.'.vocab/syntax.css'); ?>
  </style>

  <script src="assets/lib/jquery-2.0.3.min.js"></script>
  <script src="assets/lib/jquery.cookie.js"></script>
  <script src="assets/lib/keymaster.js"></script>

  <script id="vocab">
    app = {};
    <?php
      echo 'app.vocab =';
      readfile('vocabs/'.$vocabName.'.vocab/vocab-'.$locale.'.json');
      echo ';';
      echo 'app.vocabName = "'.$vocabName.'";';
      echo 'app.locale = "'.$locale.'";';
    ?>
  </script>

  <script src="assets/js/happy.js"></script>

</head>
<body class="">
  <div class="vocab-layout">
    <div class="vocab-modal">
      <?php
        $showHelp = isset($_COOKIE['showHelp']) ? htmlspecialchars($_COOKIE['showHelp']) : 'false';
        $helpState = '';
        if ($showHelp == 'false') {
          $helpState = 'display: none;';
        }
      ?>
      <div class="vocab-help" style="<?php echo $helpState ?>">
        <h1 class="vocab-title">
          <?php echo $title ?>
        </h1>
        <p class="vocab-credits">
          <?php echo $language ?>:
          <?php echo $credits ?>
        </p>
        <br>
        <p class="vocab-help-text"><?php echo $helpText ?></p>
        <br>
        <?php echo $specs ?>
        <button class="vocab-help-hide" title="Close help"></button>
        <br>
        <hr>
        <br>
        <?php echo $reportIssue ?>
        <br>
        <?php echo $createVocab ?>
        <br>
        <br>
        <a href="<?php echo $path ?>">Vocabs</a> by
        <?php echo $appCredits ?>
        <br>
      </div>
    </div>
    <div class="vocab-sidebar">
      <div class="vocab-tokens-list-header">
        <h1 class="vocab-title">
          <?php echo $title ?>
        </h1>
      </div>
	  <a class="home" href="/" title="Terug naar homepage">🏠</a>
      <?php
        $vocabFile = 'vocabs/'.$vocabName.'.vocab/vocab-'.$locale.'.json';
        $vocab = json_decode(file_get_contents($vocabFile), true);
        echo vocabTokensList($vocab);
      ?>

    </div>
    <div class="vocab-content">
      <code class="vocab-code"><?php readfile('vocabs/'.$vocabName.'.vocab/sample.html'); ?></code>
    </div>
  </div>

</body>
</html>
