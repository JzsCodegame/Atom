<!DOCTYPE html><html><head><meta charset="utf-8"><title>Automation Playground</title><link rel="stylesheet" href="automation_playground.css"></head><body>
<div class="container">
<h1 id="home-title" data-testid="home-title">Automation Playground</h1>
<p>Deterministic modules for Selenium validation.</p>
<div class="card-grid">
<?php $mods=["signup","actions","alerts","datepicker","upload","windows","tables","visual"]; foreach($mods as $m){echo "<div class='card' id='card-$m' data-testid='card-$m'><h3>$m</h3><p>ID Prefix: $m-*</p><a class='btn' id='open-$m' data-testid='open-$m' href='/$m.php'>Open module</a></div>";} ?>
</div></div></body></html>
