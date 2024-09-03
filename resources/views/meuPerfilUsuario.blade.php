@extends('layouts.layout-interno-secundario')

@section('conteudo')

<div class="perfil-visualizacao">
    <div class="informacoes-perfil">
        <div class="titulo-informacoes">
            <h1>Minhas Informações</h1>
        </div>
        <div class="conteudo-informacoes">
            <p><strong>Nome:</strong> {{$usuario->nome}}</p>
            <p><strong>Sobrenome:</strong> {{$usuario->sobrenome}}</p>
            <p><strong>Gênero:</strong> {{$usuario->sexo}}</p>
            <p><strong>Telefone:</strong> {{$usuario->telefone}}</p>
            <p><strong>Email:</strong> {{$usuario->email}}</p>
            <p><strong>Data de Nascimento:</strong> {{$usuario->data_nascimento}}</p>
            <p><strong>CPF:</strong> {{$usuario->cpf}}</p>
            <a href="/user/1/edit" class="botao botao-editar">Editar Informações</a>
        </div>
    </div>

    @if ($personal != null)

    <div class="informacoes-personal-trainer">
        <h1>Informações do Personal Trainer</h1>
        <div class="conteudo-personal">
            <p><strong>Número do CREF:</strong> {{$personal->cref}}</p>
            <p><strong>Formações:</strong> {{$personal->formacoes}}</p>
            <p><strong>Preço por Hora/Aula (R$):</strong> {{$personal->preco}}</p>
            <div class="academias-disponiveis">
                <label>Academias que Pode se Locomover:</label>
                <ul>
                    @foreach ($academias_personal as $academia)
                        <li>{{$academia->academia}}</li>
                    @endforeach
                </ul>
            </div>
            <a href="{{route('editar-personal.edit', ['id' => $personal->id])}}" class="botao botao-editar">Editar Personal Trainer</a>
        </div>
    </div>
    @endif

    <div class="aulas-agendadas">
        <div class="titulo-aulas">
            <h1>Aulas Agendadas</h1>
        </div>
        <table class="tabela-aulas">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Hora</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>25/06/2024</td>
                    <td>10:00</td>
                    <td>Aula de Yoga</td>
                </tr>
                <tr>
                    <td>26/06/2024</td>
                    <td>14:00</td>
                    <td>Aula de Pilates</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection