<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<title>Irk.Schools</title>
</head>
<body>
	<?php require "blocks/header.php"	 ?>
	<div class="container">
<h3>Название сайта</h3>
<div class="d-flex, flex-wrap">
		<?php for($i = 0; $i < 5; $i++): ?>
      <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Лучшее фото школы</font></font></h4>
      </div>
      <div class="card-body">
        <img src="img/<?php echo ($i + 1) ?>.jpg" width="200" height="200"  class="img-thumbnail">
        <ul class="list-unstyled mt-3 mb-4">
          <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">описание школы</font></font></li>
          <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">описание школы</font></font></li>
          <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">описание школы</font></font></li>
          <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">описание школы</font></font></li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">выразить респект школе</font></font></button>
      </div>
     </div>
    <?php endfor; ?>
   </div>
	</div>
	<?php require "blocks/footer.php"	 ?>
</body>
</html>
