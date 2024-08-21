@extends('layouts.layout-interno')

@section('conteudo')

        <div class="tags">
            <ul>
                <li>Tags</li>
                <li>Tags</li>
                <li>Tags</li>
                <li>Tags</li>
                <li>Tags</li>
            </ul>
        </div>


        <div class="bloco-pefil-personal">
            <div class="card-perfil">
                <div class="foto-perfil-personal">
                    <img src="img/foto-perfil-personal.jpg" alt="Pesonal trainer" width="155">
                    <h2>Nome do Personal</h2>
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
                            <td><span>R$X</span></td>
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
                <li><i class="fa-regular fa-map ultima-li"></i> Quantos KM o professor se desloca: se desloca a (X) KM</li>
            </ul>
        </div>

        <div class="oque-e-verificado">
            <div class="imagem-verificado">
                <img src="img/verificado.png" alt="Simbolo de Verificado" width="75">
                <h2>VERIFICADO</h2>
            </div>
            <div class="texto-verificado">
                <p>O Veficado é obtido por meio de verificações de documentos, certificados e diplomas. <br>Todo esse
                    processo é a analizado por nossa equipe espicializada.</p>
            </div>
        </div>

        <div class="mais-sobre-personal">
            <h2>Mais sobre (Nome do Personal)</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil quibusdam eius dolore sapiente molestiae
                explicabo inventore nam fugiat, necessitatibus consequatur nesciunt! Saepe eveniet qui culpa unde
                perferendis rerum eligendi cumque.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, perferendis sapiente tempore enim nobis
                architecto magni illum asperiores dolorem magnam eos provident mollitia quae repellat unde alias dolore
                deserunt corporis.
            </p>
        </div>

        <div class="sobre-aula">
            <h2>Sobre a Aula</h2>
            <ul>
                <li><i class="fa-regular fa-flag"></i> Português | Inglês</li>
            </ul>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos, corporis. Hic quasi soluta qui ex
                eligendi totam mollitia dolores eum officia autem, necessitatibus sequi fugit commodi doloribus
                veritatis tempore. Aut?<br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium qui quibusdam ipsa, tempora
                nesciunt itaque nemo nulla iste at quod sapiente deserunt soluta id. Et laudantium asperiores
                necessitatibus omnis sed.
            </p>

        </div>

@endsection