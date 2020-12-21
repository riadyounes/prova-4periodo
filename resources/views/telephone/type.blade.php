@extends('layouts.app')

@section('content')
<div class="container">
<div>
    <div >
            <h2>Adicionar novo telefone</h2>
    </div>
    <div >
            <ahref="{{ route('contact') }}"> Voltar</a>
    </div>
</div>

<form action="{{ route('type.store') }}" method="POST">
    @csrf
    <div >
        <div >
            <div >
                <strong>Tipo de telefone:</strong>
                <input type="text" name="name" placeholder="Type de telefone">
                <input type="hidden" name="contact_id" value="{{$contact->id}}">
            </div>
        </div>

        <div>
            <button type="submit" >Salvar</button>
        </div>
    </div>

</form>
</div>
@endsection
