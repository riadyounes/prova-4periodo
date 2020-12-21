@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-lg-6 margin-tb">
            <h2>Adicionar contato</h2>
    </div>
    <div >
            <a class="btn btn-primary" href="{{ route('contact') }}"> Voltar</a>
    </div>
</div>

<form action="{{ route('contact.store') }}" method="POST">
    @csrf

     <div >
        <div >
            <div >
                <strong>Nome:</strong>
                <input type="text" name="name" placeholder="Nome">
                <input type="hidden" name="user_id" value="{{Auth::id()}}">
            </div>
        </div>

        <div >
            <button type="submit">Salvar</button>
        </div>
    </div>

</form>
</div>
@endsection
