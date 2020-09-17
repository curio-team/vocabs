<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>
    Vocabs
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
  <link href="assets/img/vocabs-icon.png" rel="icon">

  <!--<link href="assets/css/happy.css" rel="stylesheet">-->
  <link href="assets/css/pop-pop.css" rel="stylesheet">

</head>
<body>

  <div class="vocab-index">
    <div>
		<h1 class="vocab-title">
		Vocabs
		</h1>
		<p>by <?php echo $appCredits ?></p>
		<br>
		<table class="vocab-links">
			<tr class="language-nl">
				<td class="vocab-link-link"><a href="?name=css&lang=nl">CSS</a></td>
				<td class="vocab-link-language">Nederlands</td>
				<td class="vocab-link-authors">auteur</td>
			</tr>
		</table>
		<br>
		<br>
		<?php echo $reportIssue ?>
		<br>
		<?php echo $createVocab ?>
		<br>
		<br>
		<br>
    </div>
  </div>

</body>
</html>
