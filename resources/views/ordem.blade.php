@extends ("templates.template")
@section('contente')
        <title>Ordem de Serviço</title>

        <link rel ="stylesheet" href= "{{url('assets/css/style.css')}}">

       
        <div class="container-fluid d-flex justify-content-center align-items-center " >
            <div class="boxForm d-flex flex-column mb-12 justify-content-center align-items-center">
                <form action="/ordem" method="post" class="d-flex flex-column mb-3 justify-content-center align-items-center"> 
                    @csrf
                    <label class="mb-3">Nome</label>
                    <input  class="mb-3" type="text" name="nome" placeholder="Ex: Raphael Pereira de Souza"/>
                    <label class="mb-3">CPF</label>
                    <input class="mb-3" type="text" name="CPF" placeholder="Ex: 00000000000"/>
                    <label class="mb-3">Telefone</label>
                    <input class="mb-3" type="text" name="numTelefone" placeholder="Ex: 11 9 99999999"/>
                    <label class="mb-3">Modelo</label>
                    <input class="mb-3" type="text" name="modelo" placeholder="Ex: Moto E Play"/>
                    <label class="mb-3">Marca</label>
                    <input class="mb-3" type="text" name="marca" placeholder="Ex: Motorola"/>
                    <label class="mb-3">Defeito</label>
                    <textarea class="mb-3" type="text" name="defeito" placeholder="Tela quebrada"></textarea>
                    <button class="mb-3 btn btn-dark" type="submit">Entrar</button>
                </form> 
            </div>
        </div>
        
@endsection