@extends('layouts.app')

@section('content')
<div class="container">
<div >
    <div>
            <h2>Adicionar novo contato</h2>
    </div>
    <div >
            <a  href="{{ route('contact') }}"> Voltar</a>
    </div>
</div>



<form action="{{ route('email.store') }}" method="POST">
    @csrf

     <div >
        <div >
            <div >
                <strong>E-mail:</strong>
                <input type="text" name="email" placeholder="E-mail">
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
