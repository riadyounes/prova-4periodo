@extends('layouts.app')

@section('content')
<div class="container">
<div>
        <div>
                <h2>Telefones do {{$contacts->name}}</h2>
        </div>
        <div>
                <a  href="{{ route('telephone.create',['contact' => $contacts]) }}"> Adicionar Telefone</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table>
        <tr>
            <th>Telefone</th>

        </tr>
        @foreach ($contacts->telephones as $telephone)
        <tr>
            <td>{{ $telephone->telephone }}</td>

        </tr>
        @endforeach
    </table>

</div>
@endsection

