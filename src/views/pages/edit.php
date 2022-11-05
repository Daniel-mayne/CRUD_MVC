<?php $render('header'); ?>

<h2>Editar Usuario</h2>
<form action="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar" method="post">
<label for="name">
    Nome: <br>
    <input type="text" name="name" value="<?=$usuario['name'];?>">
</label>

<br><br>

<label for="email">
    E-mail <br>
    <input type="email" name="email" value="<?=$usuario['email'];?>">
</label>

<br><br>

<input type="submit" value="salvar">

</form>


<?php $render('footer'); ?>