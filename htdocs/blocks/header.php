<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pasha 38Rus</font></font></h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Почта</font></font></a>
    <a class="p-2 text-dark" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Раздел 2 </font></font></a>
    <a class="p-2 text-dark" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Раздел 3</font></font></a>
    <a class="p-2 text-dark" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Раздел 4</font></font></a>
  </nav>
  <?php
    if($_COOKIE['user'] == 'Да'):
    ?>
     <a class="btn btn-outline-primary" href="auth.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Личный кабинет</font></font></a>
   <?php else: ?>
    <a class="btn btn-outline-primary" href="auth.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Войти</font></font></a>
     <?php endif; ?>
</div>
