@extends('layouts.layout-interno')

@section('conteudo')
    
    <div class="area-login">
        <form action="#" method="post">
            <input type="e-mail" name="email" id="email" placeholder="E-mail">
            <input type="password" name="senha" id="senha" placeholder="Senha">
            <button type="submit" id="botao-login">Conectar-se</button>
        </form>
        <div class="botoes-cadastro">
            <a href="https://www.facebook.com/" class="face"><i class="fa-brands fa-facebook"></i> Facebook</a>
            <a href="https://accounts.google.com/InteractiveLogin/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&osid=1&passive=1209600&service=mail&ifkv=ASKXGp0-x-n2USGxTzE8hMuoB0pIFCFsOqG-XpolB_zliTCSU8-QeC9CxSW8v41DmJbAf8r1r2evjg&theme=glif&flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="gmail"><i class="fa-brands fa-google"></i> Google</a>
         </div>
        <p>Você ainda não possui cadastro?</p>
        <a href="cadastro"><p class="inscreva-se">Inscreva-se</p></a>
        <a href="#"><p class="esqueci-minha-senha">Esqueci minha senha</p></a>
    </div>

@endsection