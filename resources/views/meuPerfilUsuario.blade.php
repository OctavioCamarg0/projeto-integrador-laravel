@extends('layouts.layout-interno-secundario')

@section('conteudo')

<div class="perfil-e-agendamento">
            <div class="area-informacoes-meu-perfil">
                <div class="titulo-informacoes-meu-perfil">
                    <h1>Minhas Informações</h1>
                </div>
                <form action="#" method="post">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" required>

                    <label for="sobrenome">Sobrenome:</label>
                    <input type="text" id="sobrenome" name="sobrenome" required>

                    <label for="sexo">Gênero:</label>
                    <select id="sexo" name="sexo" required>
                        <option value="masculino">Masculino</option>
                        <option value="feminino">Feminino</option>
                        <option value="outro">Outro</option>
                    </select>

                    <label for="telefone">Telefone:</label>
                    <input type="tel" id="telefone" name="telefone" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="senha">Senha:</label>
                    <input type="password" id="senha" name="senha" required>

                    <label for="confirmaSenha">Confirmação de Senha:</label>
                    <input type="password" id="confirmaSenha" name="confirmaSenha" required>

                    <label for="dataNascimento">Data de Nascimento:</label>
                    <input type="date" id="dataNascimento" name="dataNascimento" required>

                    <label for="cpf">CPF:</label>
                    <input type="text" id="cpf" name="cpf" required>

                    <button type="submit" id="botao-atualizar">ATUALIZAR</button>
                </form>
            </div>
            <div class="area-aulas-agendadas">
                <div class="titulo-aulas-agendadas">
                    <h1>Aulas Agendadas</h1>
                </div>
                <table id="tabela-aulas">
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
                        <!-- Adicione mais linhas conforme necessário -->
                    </tbody>
                </table>
            </div>
        </div>

        @endsection