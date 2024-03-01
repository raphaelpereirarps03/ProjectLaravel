@extends ("templates.template")
@section('contente')
<title>Login</title>

<link rel ="stylesheet" href="{{url('assets/css/style.css')}}">

<div class="container-fluid d-flex justify-content-center align-items-center">
    <div class="boxForm d-flex flex-column mb-12 justify-content-center align-items-center">
        <form action="/ordem" method="post" class="d-flex flex-column mb-3 justify-content-center align-items-center"> 
            @csrf
            <label class="mb-3">Login</label>
            <input  class="mb-3" type="text" name="login" placeholder="Entre com o seu login"/>
                    <label class="mb-3">Senha</label>
                    <input class="mb-3" type="password" name="senha" placeholder="Entre com a sua senha"/>
                    <button class="mb-3 btn btn-dark" type="submit">Entrar</button>
                </form> 
            </div>
        </div>

        
@endsection