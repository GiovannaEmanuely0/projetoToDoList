<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{url('css/dashboard.css')}}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

</head>
<body>
    <section class="viewPrincipal">
        <x-menu/>
        <div class="dashboard">
            <div class="dashboard_inicial">
                <div><h1>Olá explorador</h1><p>descricao</p></div>
                <div>
                    <input type="text" name="" id="">
                    <button type="button">notificacoes</button>
                    <button type="button">adicionar tarefa</button>
                </div>
            </div>
            <div class="dashboard_secaotarefas">
                <h1>hoje é ...</h1>
                <div>
                    <ul>
                        <li>tarefa 1</li>
                        <li>tarefa 2</li>
                        <li>tarefa 3</li>
                        <li>tarefa 4</li>
                        <li>tarefa 5</li>
                    </ul>
                </div>
            </div>
            <div class="dashboard_final">
                <h1>descricao</h1>
            </div>
        </div>
    </section>
</body>
</html>
