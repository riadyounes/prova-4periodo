@extends('layouts.app')

@section('content')
<div class="container">
<div >
        <div >
                <h2>Lista de e-mails do {{$contacts->name || ''}}</h2>
        </div>
        <div>
                <a href="{{ route('email.create',['contact' => $contacts]) }}"> Adicionar Email</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div>
            <p>{{ $message }}</p>
        </div>
    @endif

    <table>
        <tr>
            <th>Name</th>

        </tr>
        @foreach ($contacts->email as $email)
        <tr>
            <td>{{ $email->email }}</td>

        </tr>
        @endforeach
    </table>

</div>
@endsection
