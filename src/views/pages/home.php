<?php $render('header'); ?>

<a href="<?=$base;?>/novo">Novo Usuario</a>

<table border="1" width="100%">
<tr>
    <th>ID</th>
    <th>NOME</th>
    <th>E-MAIL</th>
    <th>AÇÕES</th>
</tr>
<?php foreach($usuarios as $usuario): ?>
    <tr>
        <td><?=$usuario['id'];?></td>
        <td><?=$usuario['name'];?></td>
        <td><?=$usuario['email'];?></td>
        <td>
            <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar">
        <img width="25" src="<?=$base;?>/assets/images/document.png" alt="">
        </a>
            <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/excluir" onclick="return confirm('Tem certeza que deseja excluir')">
            <img width="25" src="<?=$base;?>/assets/images/trash.png" alt="">
        </a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?php $render('footer'); ?>