<!DOCTYPE html><html lang="pt-BR">
<head><meta charset="UTF-8"><title>Admin</title>
<style>*{margin:0;padding:0;box-sizing:border-box}
body{font-family:Arial;background:#f5f5f5}
nav{background:#333;color:white;padding:15px 30px;display:flex;justify-content:space-between}
nav a{color:white;text-decoration:none;margin-left:20px}
.container{max-width:1000px;margin:30px auto;padding:0 20px}
h1{margin-bottom:20px}.grid{display:grid;grid-template-columns:repeat(3,1fr);gap:20px}
.card{background:white;padding:30px;border-radius:8px;text-align:center;box-shadow:0 2px 5px rgba(0,0,0,0.1)}
.card h2{font-size:3em;color:#333}nav a:hover{text-decoration:underline}</style></head>
<body><nav><strong>Admin</strong><div><a href="/admin">Dashboard</a><a href="/admin/produtos">Produtos</a><a href="/admin/pedidos">Pedidos</a><a href="/logout">Sair</a></div></nav>
<div class="container"><h1>Dashboard</h1>
<div class="grid">
<div class="card"><h2><?=$stats["products"]?></h2><p>Produtos</p></div>
<div class="card"><h2><?=$stats["orders"]?></h2><p>Pedidos</p></div>
<div class="card"><h2>R$ <?=number_format($stats["revenue"],2,",",".")?></h2><p>Receita</p></div>
</div></div></body></html>
