<!DOCTYPE html><html lang="pt-BR">
<head><meta charset="UTF-8"><title>Checkout</title>
<style>*{margin:0;padding:0;box-sizing:border-box}
body{font-family:Arial;background:#f5f5f5;padding:40px}
.container{max-width:500px;margin:0 auto;background:white;padding:30px;border-radius:8px;box-shadow:0 2px 10px rgba(0,0,0,0.1)}
h1{margin-bottom:20px}.resumo{background:#f9f9f9;padding:15px;border-radius:4px;margin-bottom:20px}
form input{width:100%;padding:10px;margin:5px 0;border:1px solid #ddd;border-radius:4px}
button{width:100%;padding:12px;background:#27ae60;color:white;border:none;border-radius:4px;font-size:16px;cursor:pointer}
.total{font-size:1.3em;font-weight:bold;margin:15px 0}</style></head>
<body><div class="container"><h1>Checkout</h1>
<div class="resumo"><strong>Total: R$ <?=number_format(Cart::total(),2,",",".")?></strong></div>
<form method="POST" action="/checkout/finalizar">
<input type="text" name="name" placeholder="Nome completo" required>
<input type="email" name="email" placeholder="Email" required>
<input type="text" name="address" placeholder="Endereco" required>
<button type="submit">Finalizar Pedido</button></form></div></body></html>
