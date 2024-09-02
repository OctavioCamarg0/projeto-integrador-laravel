<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\User;
 
class CadastroController extends Controller
{
    /**
     * Exibe o formulário de cadastro.
     */
 
     public function create()
    {
        return view('cadastro');
    }
 
    /**
     * Armazena os dados do formulário de cadastro no banco de dados.
     */
    public function store(Request $request)
    {
        // Validação dos dados
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'sobrenome' => 'required|string|max:255',
            'sexo' => 'required|string',
            'telefone' => 'required|string|max:15',
            'email' => 'required|email|unique:users,email',
            'senha' => 'required|string|min:8|confirmed',
            'dataNascimento' => 'required|date',
            'cpf' => 'required|string|max:14|unique:users,cpf',
        ]);
 
        // Criação do usuário
        $user = new User();
        $user->nome = $request->nome;
        $user->sobrenome = $request->sobrenome;
        $user->sexo = $request->sexo;
        $user->telefone = $request->telefone;
        $user->email = $request->email;
        $user->password = bcrypt($request->senha);
        $user->data_nascimento = $request->dataNascimento;
        $user->cpf = $request->cpf;
        $user->save();
 
        // Redireciona para uma página de sucesso
        return redirect()->route('index')->with('success', 'Cadastro realizado com sucesso!');
    }
}
 