@extends('layouts.layout-interno-secundario')

@section('conteudo')

<div class="titulo-cadastro-personal">
            <h1>Cadastro de Personal Trainer</h1>
        </div>
        <div class="cadastroPersonal">
        <form action="{{ route('cadastro_personal.store')}} " method="post" enctype="multipart/form-data" id="profile-form">
            @csrf
            <div class="form-group">
                <label for="diploma">Carregar Diploma 🎓:</label>
                <input type="file" id="diploma" name="diploma" accept=".pdf,.jpg,.jpeg,.png" required>
            </div>

            <div class="form-group">
                <label for="cref">Número do CREF:</label>
                <input type="text" id="cref" name="cref" placeholder="Digite seu número de CREF" required>
            </div>
            
            <div class="form-group">
                <label for="formacoes">Formações:</label>
                <textarea id="formacoes" name="formacoes" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="preco">Preço por Hora/Aula (R$):</label>
                <input type="number" id="preco" name="preco" required>
            </div>
            <div class="form-group">
    <label for="academias">Academias que Pode se Locomover:</label>
    <div class="checkbox-group">
        @foreach ($academias as $academia)
            <div class="checkbox-item">
                <input type="checkbox" id="academia_{{ $academia->id }}" name="academias[]" value="{{ $academia->id }}">
                <label for="academia_{{ $academia->id }}">{{ $academia->academia }}</label>
            </div>
        @endforeach
    </div>
</div>
            <div class="form-group">
                <button type="submit" id="submit-button">Cadastrar</button>
            </div>
        </form>
    </div>

@endsection