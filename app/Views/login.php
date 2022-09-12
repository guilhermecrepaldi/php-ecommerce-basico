<!DOCTYPE html><html lang="pt-BR">
<head><meta charset="UTF-8"><title>Login Admin</title>
<style>*{margin:0;padding:0;box-sizing:border-box}
body{font-family:Arial;background:#f0f2f5;display:flex;justify-content:center;align-items:center;height:100vh}
.card{background:white;padding:40px;border-radius:8px;box-shadow:0 2px 10px rgba(0,0,0,0.1);width:360px}
h1{margin-bottom:20px;text-align:center}input{width:100%;padding:12px;margin:8px 0;border:1px solid #ddd;border-radius:4px}
button{width:100%;padding:12px;background:#333;color:white;border:none;border-radius:4px;cursor:pointer}
.erro{color:#e74c3c;text-align:center;margin-bottom:10px}</style></head>
<body><div class="card"><h1>Admin Login</h1>
<?php if(isset($erro)):?><div class="erro"><?=$erro?></div><?php endif;?>
<form method="POST"><input type="text" name="user" placeholder="Usuario" required>
<input type="password" name="pass" placeholder="Senha" required>
<button type="submit">Entrar</button></form></div></body></html>
