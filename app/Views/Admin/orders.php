<!DOCTYPE html><html lang="pt-BR">
<head><meta charset="UTF-8"><title>Pedidos - Admin</title>
<style>*{margin:0;padding:0;box-sizing:border-box}
body{font-family:Arial;background:#f5f5f5}
nav{background:#333;color:white;padding:15px 30px;display:flex;justify-content:space-between}
nav a{color:white;text-decoration:none;margin-left:20px}
.container{max-width:1000px;margin:30px auto;padding:0 20px}
table{width:100%;border-collapse:collapse;background:white;border-radius:8px;overflow:hidden}
th,td{padding:12px;text-align:left;border-bottom:1px solid #eee}
th{background:#f9f9f9}.badge{padding:3px 8px;border-radius:10px;font-size:0.8em;background:#27ae60;color:white}
h1{margin:20px 0}</style></head>
<body><nav><strong>Admin</strong><div><a href="/admin">Dashboard</a><a href="/admin/produtos">Produtos</a><a href="/admin/pedidos">Pedidos</a><a href="/logout">Sair</a></div></nav>
<div class="container"><h1>Pedidos</h1>
<table><tr><th>ID</th><th>Total</th><th>Status</th><th>Data</th></tr>
<?php foreach($orders as $o):?><tr>
<td>#<?=$o["id"]?></td><td>R$ <?=number_format($o["total"],2,",",".")?></td>
<td><span class="badge"><?=$o["status"]?></span></td><td><?=$o["created_at"]?></td>
</tr><?php endforeach;?></table></div></body></html>
