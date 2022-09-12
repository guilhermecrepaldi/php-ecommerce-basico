<!DOCTYPE html><html lang="pt-BR">
<head><meta charset="UTF-8"><title>Carrinho</title>
<style>*{margin:0;padding:0;box-sizing:border-box}
body{font-family:Arial;background:#f5f5f5}
nav{background:#333;color:white;padding:15px 30px;display:flex;justify-content:space-between}
nav a{color:white;text-decoration:none}
.container{max-width:800px;margin:30px auto;padding:0 20px}
table{width:100%;border-collapse:collapse;background:white;border-radius:8px;overflow:hidden}
th,td{padding:15px;text-align:left;border-bottom:1px solid #eee}
th{background:#f9f9f9}.total{font-size:1.5em;font-weight:bold;text-align:right;margin:20px 0}
.btn{background:#3498db;color:white;padding:12px 30px;border-radius:4px;text-decoration:none;display:inline-block}
.btn-danger{background:#e74c3c;border:none;color:white;padding:5px 10px;border-radius:4px;cursor:pointer}
.empty{text-align:center;padding:80px;color:#999}
</style></head>
<body><nav><strong>Minha Loja</strong><a href="/">Voltar</a></nav>
<div class="container"><h1 style="margin-bottom:20px">Carrinho</h1>
<?php $cart=Cart::get(); if(empty($cart)):?><div class="empty">Carrinho vazio</div>
<?php else:?><table><tr><th>Produto</th><th>Qtd</th><th>Preco</th><th></th></tr>
<?php foreach($cart as $item):?><tr>
<td><?=htmlspecialchars($item["name"])?></td><td><?=$item["qty"]?></td>
<td>R$ <?=number_format($item["price"]*$item["qty"],2,",",".")?></td>
<td><form method="POST" action="/carrinho/remover"><input type="hidden" name="id" value="<?=$item["id"]?>"><button class="btn-danger">Remover</button></form></td></tr>
<?php endforeach;?></table>
<div class="total">Total: R$ <?=number_format(Cart::total(),2,",",".")?></div>
<a href="/checkout" class="btn">Finalizar Compra</a>
<?php endif;?></div></body></html>
