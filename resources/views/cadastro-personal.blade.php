@extends('layouts.layout-interno-secundario')

@section('conteudo')

<div class="titulo-cadastro-personal">
            <h1>Cadastro de Personal Trainer</h1>
        </div>
        <div class="cadastroPersonal">
        <form action="#" method="post" enctype="multipart/form-data" id="profile-form">
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
                <input type="text" id="academias" name="academias" required>
            </div>
            <div class="form-group">
                <button type="submit" id="submit-button">Cadastrar</button>
            </div>
        </form>
    </div>

@endsection