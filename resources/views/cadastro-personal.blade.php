@extends('layouts.layout-interno-secundario')

@section('conteudo')

<div class="titulo-cadastro-personal">
            <h1>Cadastro de Personal Trainer</h1>
        </div>
        <div class="cadastroPersonal">
        <form action="#" method="post" enctype="multipart/form-data" id="profile-form">
            <div class="form-group">
                <label for="nomePersonal">Nome do Personal:</label>
                <input type="text" id="nomePersonal" name="nomePersonal" required>
            </div>
            <div class="form-group">
                <label for="diploma">Carregar Diploma 🎓:</label>
                <input type="file" id="diploma" name="diploma" accept=".pdf,.jpg,.jpeg,.png" required>
            </div>

            <div class="form-group">
                <label for="cref">Número do CREF:</label>
                <input type="text" id="cref" name="cref" placeholder="Digite seu número de CREF" required>
            </div>
            
            <div class="form-group">
                <label for="maisSobre">Fale Mais Sobre Você:</label>
                <textarea id="maisSobre" name="maisSobre" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="price">Preço por Hora/Aula (R$):</label>
                <input type="number" id="price" name="price" required>
            </div>
            <div class="form-group">
                <label for="area">Área de Atuação:</label>
                <input type="text" id="area" name="area" required>
            </div>
            <div class="form-group">
                <label for="institutions">Instituições que Pode se Locomover:</label>
                <input type="text" id="institutions" name="institutions" required>
            </div>
            <div class="form-group">
                <button type="submit" id="submit-button">Cadastrar</button>
            </div>
        </form>
    </div>

@endsection