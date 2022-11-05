<?php $render('header'); ?>

<h2>Adicionar Novo Usuario</h2>
<form action="<?=$base;?>/novo" method="post">
<label for="name">
    Nome: <br>
    <input type="text" name="name">
</label>

<br><br>

<label for="email">
    E-mail <br>
    <input type="email" name="email">
</label>

<br><br>

<input type="submit" value="Adicionar">

</form>


<?php $render('footer'); ?>