<?php
include_once __DIR__ . '/../include.php';
?>

<!DOCTYPE html>
<html lang="ja">  
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/index.css">
	<link rel="stylesheet" href="./css/reset.css">
	<title>nu-quiz</title>
</head>
<body>
	<div class="wrapper">
		<?php include __DIR__ . '/components/header.php'; ?>
		<section class="menu">
			<a href="">
				<img src="./images/quiz.jpg" alt="クイズチャレンジ" loading="lazy">
				<p>クイズチャレンジ</p>
			</a>
			<a href="">
				<img src="./images/2edit_img.jpg" alt="クイズ編集" loading="lazy">
				<p>クイズ編集</p>
			</a>
		</section>
		<?php include __DIR__ . "/components/footer.php";?>
	</div>
</body>
</html>
