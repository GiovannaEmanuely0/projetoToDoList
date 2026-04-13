<div>
    <header class="cabecalho">
        <div class="divLogo"><img class="imgLogo" src="{{url('img/logoAstrolist/logoOriginalSemFundo.png')}}" alt="logo"></div> 
            <!-- clicar na logo e abrir o nome -->
        <div class="divIcon">
            <a href="#"><span class="material-symbols-outlined">search</span></a>
            <a href="#"><span class="material-symbols-outlined">settings</span></a>
            <a href="{{url('/cadastrar')}}"><span class="material-symbols-outlined">account_circle</span></a>
            <a href="{{url('/admin')}}"><span class="material-symbols-outlined">identity_platform</span></a>
        </div>
         @if(Auth::check())
            <p>Bem-vindo, {{ Auth::user()->nome }}</p>
        @endif
    </header>
</div>
<link rel="stylesheet" href="{{url('css/header.css')}}">