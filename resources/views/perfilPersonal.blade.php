@extends('layouts.layout-interno')

@section('conteudo')
        <div class="bloco-pefil-personal">
            <div class="card-perfil">
                <div class="foto-perfil-personal">
                    <img src='{{asset("img/foto-perfil-personal.jpg")}}' alt="Pesonal trainer" width="155">
                    <h2>{{$usuario->nome}} {{$usuario->sobrenome}}</h2>
                </div>
                <div class="avaliacao-perfil-personal">
                    <i class="fa-regular fa-star"></i>
                    (x avaliações)
                    <i class="fa-regular fa-circle-check verificado2"></i>
                </div>
                <table class="informacoes-perfil-personal">
                    <tbody>
                        <tr>
                            <td>Preço hora/aula:</td>
                            <td><span>R${{$usuario->personal->preco}}</span></td>
                        </tr>

                        <tr>
                            <td>Tempo de resposta:</td>
                            <td><span>X</span></td>
                        </tr>

                        <tr>
                            <td>Número de Alunos:</td>
                            <td><span>(X Alunos)</span></td>
                        </tr>
                    </tbody>
                </table>

                <div class="contatar">
                    <a href="login.html"><i class="fa-regular fa-comment"></i> Contatar</a>
                </div>
            </div>
        </div>

        <div class="locais-aulas">
            <h2>Locais das Academias</h2>
            <ul>
                <li><i class="fa-solid fa-location-dot"></i> Localizações das Academias: X</li>
                <li><i class="fa-solid fa-video"></i><a href="index.html"> Tipo da aula: Online/Presencial</a></li><br class="remove">
                <br class="remove">
            </ul>
        </div>

        <div class="oque-e-verificado">
            <div class="imagem-verificado">
                <img src='{{asset("img/verificado.png")}}' alt="Simbolo de Verificado" width="75">
                <h2>VERIFICADO</h2>
            </div>
            <div class="texto-verificado">
                <p>O Veficado é obtido por meio de verificações de documentos, certificados e diplomas. <br>Todo esse
                    processo é a analizado por nossa equipe espicializada.</p>
            </div>
        </div>

        <div class="mais-sobre-personal">
            <h2>Mais sobre ({{$usuario->nome}} {{$usuario->sobrenome}})</h2>
            <p>{{$usuario->personal->formacoes}}</p>
        </div>

        <div class="sobre-aula">
            <h2>Sobre a Aula</h2>
            <ul>
                <li><i class="fa-regular fa-flag"></i> Português | Inglês</li>
            </ul>
            <p>{{($usuario->personal->sobreAula)}}</p>

        </div>

@endsection