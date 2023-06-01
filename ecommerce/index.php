<? include_once('header.php') ?>
<? include_once('data.php') ?>

<h1>Listagem dos produtos</h1>

<ul>
  <?php foreach($data as $produto): ?>
  <li><?=$produto["nome"];?> - R$ <?=$produto["valor"];?></li>
  <?php endforeach; ?>
</ul>

<? include_once('footer.php') ?>