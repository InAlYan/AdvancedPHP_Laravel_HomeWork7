<html>

<head>
    <style>
        * {
            font-family: "DejaVu Sans", sans-serif;
        }
    </style>
    <title>Данные пользователя</title>
</head>

<body>
    <h1>Данные пользователя:</h1>
    <hr>
    <p>     Идентификатор: {{$id}}</p>
    <p>     Имя: {{$name}}</p>
    <p>     Фамилия: {{ $surname}}</p>
    <p>     Отчество: {{$email}}</p>
    <p>     Создано: {{$created_at}}</p>
    <p>     Обновлено: {{$updated_at}}</p>
    <hr>
</body>
</html>
