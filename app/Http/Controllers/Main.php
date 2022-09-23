<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Usuario;
use Database\Seeders\usuario as SeedersUsuario;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Usuarios;

class Main extends Controller
{
    public function index()
    {

        //verificar se esta logado
        if ($this->checkSession()) {
            return redirect()->route('home');
        } else {
            return redirect()->route('login');
        }
    }

    public function login()
    {
        if($this->checkSession()){
            return redirect()->route('home');
        }        
        $erro = session('erro');
        $data = [];
        if (!empty($erro)) {
            $data = [
                'erro' => $erro
            ];
        };
        return view('login', $data);
    }

    
    public function logar(LoginRequest $request)
    {
       
        
        //verfiica se houve submissão de formulário
        if(!$request->isMethod('post')){
            return redirect()->route('index');
        }
        
        if($this->checkSession()){
            return redirect()->route('home');
        }   
        
        //validação
        //$request->validated();      
       

        //verifica dados do login
        $usuario = trim($request->input('usuario'));
        dd( $usuario);
        $senha = trim($request->input('senha'));
        $usuario = Usuario::where('usuario', $usuario)->first();

        //verificar se existe usuário
        if (!$usuario) {

            session()->flash('erro', 'Não existe o usuário');
            return redirect()->route('login');
        }
        //verificar se a senha esta correta
        if (!Hash::check($senha, $usuario->senha)) {
            session()->flash('erro', 'Senha incorreta');
            return redirect()->route('login');
        }
        
        //login valido.
        session()->put('usuario', $usuario);
        return redirect()->route('index');
    }
    
    //verfiica se existe a sessão
    private function checkSession()
    {
        return session()->has('usuario');
    }
    public function home()
    {
        if($this->checkSession()){
            return redirect()->route('index');
        }
        return view('home');
    }

    public function sair()
    {
        session()->forget('usuario');
        return redirect()->route('index');
    }

    //Metodo para criar um novo usuário sem necessidade de acessar o banco de dados.
    public function temp()
    {

        $usuario = new Usuario();
        $usuario->usuario = 'martimundo@bol.com.br';
        $usuario->senha = Hash::make('123456789');

        $usuario->save();
        echo "Usuário cadastrado";
    }
}
