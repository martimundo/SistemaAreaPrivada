@extends('layouts.loginLayout')

@section('conteudo')
    <div class="container ">
        <div class="row col mt-5 ">

            <form action="{{ route('logar') }}" method="post" class="col-5 sm offset-sm-4">
                @csrf
                <h4 class="text-center bg-info text-white">LOGAR</h4>
                <hr>
                <div class="form-group">
                    <label for="">Usuário:</label>
                    <input type="email" name="email" id="email" placeholder="Digite seu e-mail" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Senha:</label>
                    <input type="password" name="senha" id="senha" placeholder="Digite sua senha"
                        class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" value="Acessar" class="btn btn-primary">
                </div>
                
                {{-- erros de validação --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $mensagem)
                                <li>{{ $mensagem }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {{-- erros de login --}}
                @if (isset($erro))
                    @foreach ($erro as $mensagem_erro)
                        <div class="alert alert-danger text-center">{{ $mensagem_erro }}</div>
                    @endforeach
                @endif
            </form>
        </div>
    </div>
@endsection
