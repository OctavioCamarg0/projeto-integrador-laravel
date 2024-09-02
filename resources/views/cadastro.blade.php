@extends('layouts.layout-interno')

@section('conteudo')

    <div class="area-cadastro">
        <div class="titulo-cadastro">
            <h1>Cadastre-se</h1>
        </div>

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

        <form action="{{ route('cadastro.store') }}" method="post">
            @csrf
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="{{ old('nome') }}" required>

            <label for="sobrenome">Sobrenome:</label>
            <input type="text" id="sobrenome" name="sobrenome" value="{{ old('sobrenome') }}" required>

            <label for="sexo">Sexo:</label>
            <select id="sexo" name="sexo" required>
                <option value="masculino" {{ old('sexo') == 'masculino' ? 'selected' : '' }}>Masculino</option>
                <option value="feminino" {{ old('sexo') == 'feminino' ? 'selected' : '' }}>Feminino</option>
                <option value="outro" {{ old('sexo') == 'outro' ? 'selected' : '' }}>Outro</option>
            </select>

            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone" value="{{ old('telefone') }}" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <label for="confirmaSenha">Confirmação de Senha:</label>
            <input type="password" id="confirmaSenha" name="senha_confirmation" required>

            <label for="dataNascimento">Data de Nascimento:</label>
            <input type="date" id="dataNascimento" name="dataNascimento" value="{{ old('dataNascimento') }}" required>

            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" value="{{ old('cpf') }}" required>

            <button type="submit" id="botao-cadastro">Cadastrar-se</button>

            <div class="botoes-cadastro">
                <a href="https://www.facebook.com/" class="face"><i class="fa-brands fa-facebook"></i> Facebook</a>
                <a href="https://accounts.google.com/InteractiveLogin/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&osid=1&passive=1209600&service=mail&ifkv=ASKXGp0-x-n2USGxTzE8hMuoB0pIFCFsOqG-XpolB_zliTCSU8-QeC9CxSW8v41DmJbAf8r1r2evjg&theme=glif&flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="gmail"><i class="fa-brands fa-google"></i> Google</a>
            </div>
        </form>
    </div>

@endsection
