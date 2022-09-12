<!DOCTYPE html><html lang="pt-BR">
<head><meta charset="UTF-8"><title>Produtos - Admin</title>
<style>*{margin:0;padding:0;box-sizing:border-box}
body{font-family:Arial;background:#f5f5f5}
nav{background:#333;color:white;padding:15px 30px;display:flex;justify-content:space-between}
nav a{color:white;text-decoration:none;margin-left:20px}
.container{max-width:1000px;margin:30px auto;padding:0 20px}
table{width:100%;border-collapse:collapse;background:white;border-radius:8px;overflow:hidden}
th,td{padding:12px;text-align:left;border-bottom:1px solid #eee}
th{background:#f9f9f9}.btn{display:inline-block;padding:5px 10px;border-radius:3px;text-decoration:none;color:white;font-size:0.9em;margin:0 3px}
.btn-edit{background:#3498db}.btn-del{background:#e74c3c}.btn-add{background:#27ae60;padding:10px 20px;margin-bottom:15px;display:inline-block}
form{background:white;padding:20px;border-radius:8px;margin-bottom:20px}form input{width:100%;padding:8px;margin:5px 0;border:1px solid #ddd;border-radius:4px}
form button{background:#27ae60;color:white;border:none;padding:10px 20px;border-radius:4px;cursor:pointer}
h1{margin:20px 0}</style></head>
<body><nav><strong>Admin</strong><div><a href="/admin">Dashboard</a><a href="/admin/produtos">Produtos</a><a href="/admin/pedidos">Pedidos</a><a href="/logout">Sair</a></div></nav>
<div class="container"><h1>Produtos</h1>
<a href="/admin/produtos" class="btn btn-add">+ Novo Produto</a>
<table><tr><th>ID</th><th>Nome</th><th>Preco</th><th>Slug</th><th>Acoes</th></tr>
<?php foreach($products as $p):?><tr>
<td><?=$p["id"]?></td><td><?=htmlspecialchars($p["name"])?></td>
<td>R$ <?=number_format($p["price"],2,",",".")?></td><td><?=$p["slug"]?></td>
<td><a href="#" class="btn btn-edit">Editar</a><a href="/admin/produtos/deletar/<?=$p["id"]?>" class="btn btn-del" onclick="return confirm('Deletar?')">Deletar</a></td>
</tr><?php endforeach;?></table></div></body></html>
