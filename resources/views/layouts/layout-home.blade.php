<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shotcut icon" type="image/x-icon" href="img/Icone-site.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <header id="cabecalho">
        <div class="container">
            <div class="barra-topo">
                <div class="logo">
                    <img src="{{asset('img/logo-branca.png')}}" alt="encontre seu personal" id="logo-img">
                </div>
                <div id="menu">
                    <a href="{{asset('perguntas-frequentes')}}"><i class="fa-regular fa-circle-question"></i></a></li>
                    <a href="{{asset('cadastro')}}">Cadastrar-se</a></li>
                    <a href="{{route('login.form')}}">Login</a></li>
                </div>
            </div>
            <div id="form-pesquisa">
                <form action="#" method="get">
                    <div class="form-icon">
                        <input type="text" name="search" id="search" placeholder="Localize seu personal">
                    </div>
                    <button type="submit"><i class="fa-solid fa-location-arrow"></i></button>
                </form>
            </div>
        </div>
    </header>

    <main class="container">
        @yield('conteudo')
    </main>

    <footer id="rodape">
        <div class="container" id="linha-rodape">
            <div class="coluna-rodape">
                <h3>SOBRE</h3>
                <nav>
                    <ul>
                        <a href="{{asset('sobre-nos')}}"><li>Quem somos?</li></a>
                        <a href="{{asset('nossos-valores')}}"><li>Nossos valores</li></a>
                        <a href="{{asset('politica-de-privacidade')}}"><li>Politica de privacidade</li></a>
                    </ul>
                </nav>
            </div>
            <div class="coluna-rodape">
                <h3>SUPORTE</h3>
                <nav>
                    <ul>
                        <a href="{{asset('pagina-de-ajuda')}}"><li>Página de ajuda</li></a>
                        <a href="{{asset('contato')}}"><li>Contato</li></a>
                    </ul>
                </nav>
            </div>
            <div class="coluna-rodape">
                <h3>SIGA-NOS</h3>
                <div class="redes-sociais">
                    <a href="https://facebook.com"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://instagram.com"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://x.com"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
            </nav>
        </div>
    </footer>
</body>
</html>