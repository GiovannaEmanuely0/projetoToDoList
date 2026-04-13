<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário</title>
    <link rel="stylesheet" href="{{url('css/usuario.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

</head>
<body>
    <section class="viewPrincipal">
        <x-header/>

        <div class="secaoPrincipal">
            <x-menu/>
            <div class="div2">
                <div class="divUser1">
                    <!-- precisa de um insert na tabela com a foto -->
                    <div class="divFotoUserr"><input type="file" name="" id="" class="fotoUser"></div>
                    <div class="divDescUser">
                        <h1>{{$usuario->nome}}</h1>
                        <div><span class="material-symbols-outlined iconUser">mail</span><h2>{{$usuario->email}}</h2></div>
                        <div><span class="material-symbols-outlined iconUser">edit</span><p>Editar Pefil</p></div>
                        <div><span class="material-symbols-outlined iconUser">logout</span><p>logout</p></div>
                    </div>
                </div>
                <div class="divUser2">
                    <div>
                        <h1>Tarefas</h1>
                        <!-- precisa de um selct count para consulta das tarefas -->
                        <div class="divCards">
                            <div class="tarefa con">
                                <h1>Concluídas</h1>
                                <p>1</p>
                            </div>
                            <div class="tarefa em">
                                <h1>Em progresso</h1>
                                <p></p>
                            </div>
                            <div class="tarefa pen">
                                <h1>Pendentes</h1>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h1>Seus Grupos</h1>
                        <!-- precisa de um selct para consulta dos grupos -->
                        <div class="divGroups">
                            <div class="grupo">
                                <h1>nome do grupo</h1>
                                <p>Tarefas:</p>
                                <p class="colorGroup"></p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <!-- precisa de um selct para consulta das tarefas -->
                        <h1>Tarefas recentes</h1>
                        <div class="groupTarefas">
                            <div class="cardtarefas">
                                <div>
                                    <input type="radio" name="txTarefa" id="">
                                    <label for="txTarefa">Nome tarefa</label>
                                </div>
                                <p>data início tarefa</p>
                                <p>categoria tarefa</p>
                                <p>Prioridade</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
</body>
</html>