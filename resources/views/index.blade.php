@extends('layouts.layout-home')

@section('conteudo')

<!-- Exibe mensagens de sucesso -->
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<!-- Exibe mensagens de erro -->
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif




        <section id="secao-personal">
            <div class="lista-card-personal">
                @foreach ($personais as $personal)
                    <div class="bloco-personal">
                        <div class="foto-personal">
                            <a href="{{route('informacaoPersonal', ['id' => $personal->usuario->id])}}"><img src="{{asset('img/personal_exemplo_0.png')}}" alt="personal trainer" width="155"></a>
                            <h2>{{$personal->usuario->nome}}</h2>
                        </div>
                        <div class="avaliacao">
                            <i class="fa-regular fa-star"></i>
                            (4,5)
                            <i class="fa-regular fa-circle-check verificado"></i>
                        </div>
                        <p class="descricao">{{$personal->formacoes}}</p>
                        <div class="preco-personal">
                            <a href="{{route('informacaoPersonal', ['id' => $personal->usuario->id])}}">R${{$personal->preco}}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <div class="ver-mais">
            <a href="#">Ver mais Personais <i class="fa-solid fa-arrow-right"></i></a>
        </div>

@endsection