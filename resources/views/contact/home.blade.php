@extends('layouts.app')
@section('css')

@endsection
@section('content')
<div class="container">
    <div >
        <div >
                <h2>Lista de contatos</h2>
        </div>
        <div >
                <a  href="{{ route('contact.create') }}"> Novo Contato</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table>
        <tr>
            <th width="50px">Name</th>
            <th width="60%">Email</th>
            <th>Telefone</th>

        </tr>
        @foreach ($contacts as $contact)
        <tr>

            <td>{{ $contact->name }}</td>
            <td>


                    <a  href="{{ route('contact.email', ['contact' => $contact->id]) }}">E-mail</a>
                    <a  href="{{ route('contact.telephone', ['contact' => $contact->id]) }}">Telefone</a>

            </td>
        </tr>
        @endforeach
    </table>


</div>
@endsection
