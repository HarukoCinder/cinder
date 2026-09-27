<?php
require __DIR__ . '/../lib/Parsedown.php';
$pd = new Parsedown();
$pd->setSafeMode(true);
$files = glob(__DIR__ . '/log/????-??-??.md');
rsort($files);
?>
<!doctype html><meta charset="utf-8"><title>工房 — cinder</title>
<h1>工房</h1>
<?php foreach ($files as $f): ?>
  <article><?= $pd->text(file_get_contents($f)) ?></article><hr>
<?php endforeach; ?>
