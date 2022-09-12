<!DOCTYPE html><html lang="pt-BR">
<head><meta charset="UTF-8"><title>Minha Loja</title>
<style>*{margin:0;padding:0;box-sizing:border-box}
body{font-family:Arial;background:#f5f5f5}
nav{background:#333;color:white;padding:15px 30px;display:flex;justify-content:space-between;align-items:center}
nav a{color:white;text-decoration:none;margin-left:20px}.cart-badge{background:#e74c3c;padding:2px 8px;border-radius:10px;font-size:0.8em}
.container{max-width:1200px;margin:30px auto;padding:0 20px}
.products{display:grid;grid-template-columns:repeat(auto-fill,minmax(250px,1fr));gap:20px}
.card{background:white;border-radius:8px;overflow:hidden;box-shadow:0 2px 5px rgba(0,0,0,0.1)}
.card-body{padding:15px}.card-body h3{margin-bottom:5px;color:#333}
.price{font-size:1.3em;color:#e74c3c;font-weight:bold;margin:10px 0}
.btn{display:inline-block;background:#3498db;color:white;padding:8px 15px;border-radius:4px;text-decoration:none;border:none;cursor:pointer}
.btn:hover{background:#2980b9}
.stats{display:grid;grid-template-columns:repeat(3,1fr);gap:15px;margin-bottom:30px}
.stat-card{background:white;padding:20px;border-radius:8px;text-align:center;box-shadow:0 2px 5px rgba(0,0,0,0.1)}
.stat-card h3{font-size:2em;color:#333}</style></head>
<body>
<nav><strong>Minha Loja</strong><div><a href="/">Home</a><a href="/carrinho">Carrinho (<?=Cart::count()?>)</a></div></nav>
<div class="container"><h1 style="margin-bottom:20px">Produtos</h1>
<div class="products"><?php foreach($products as $p):?><div class="card">
<div class="card-body"><h3><?=htmlspecialchars($p["name"])?></h3>
<p style="color:#999;font-size:0.9em"><?=htmlspecialchars($p["description"])?></p>
<div class="price">R$ <?=number_format($p["price"],2,",",".")?></div>
<form method="POST" action="/carrinho/adicionar">
<input type="hidden" name="id" value="<?=$p["id"]?>">
<input type="hidden" name="name" value="<?=htmlspecialchars($p["name"])?>">
<input type="hidden" name="price" value="<?=$p["price"]?>">
<button type="submit" class="btn">Adicionar ao carrinho</button></form></div></div>
<?php endforeach;?></div></div></body></html>
