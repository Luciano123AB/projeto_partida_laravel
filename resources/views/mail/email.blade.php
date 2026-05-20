<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Confirmação de Email</title>
</head>
<body>
    Usuário: {{ $user->name }}
    -
    <a href="{{ $url }}">Verificar</a>
</body>
</html>