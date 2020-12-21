@extends('layouts.app')

@section('content')
<div class="container">
<div>
    <div>
            <h2>Adicionar novo telefone</h2>
    </div>
    <div >
            <a  href="{{ route('contact') }}"> Voltar</a>
    </div>
</div>

<form action="{{ route('telephone.store') }}" method="POST">
    @csrf

     <div >
        <div >
            <div >
                <strong>Tipo de telefone:</strong>
                <select name="telephone_type_id"  >
                    <option value="">Selecione</option>
                    @foreach ($types_telephones as $type)
                        <option value="{{$type->id}}">{{$type->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div >
            <div >
                <a  href="{{ route('type.create',['contact' => $contact]) }}"> Adicionar novo tipo</a>
            </div>
        </div>
    </div>
    <div >
        <div >
            <div >
                <strong>Telefone:</strong>
                <input type="text" name="telephone" id="telephone"  placeholder="Telefone">
                <input type="hidden" name="contact_id" value="{{$contact->id}}">
            </div>
        </div>

        <div >
            <button type="submit">Salvar</button>
        </div>
    </div>

</form>
</div>
@endsection

@section('js')
<script>
 function mascaraTelefone( campo ) {

      function trata( valor,  isOnBlur ) {
         valor = valor.replace(/\D/g,"");
         valor = valor.replace(/^(\d{2})(\d)/g,"($1)$2");
         if( isOnBlur ) {
            valor = valor.replace(/(\d)(\d{4})$/,"$1-$2");
         } else {
            valor = valor.replace(/(\d)(\d{3})$/,"$1-$2");
         }
         return valor;
      }

      campo.onkeypress = function (evt) {
         var code = (window.event)? window.event.keyCode : evt.which;
         var valor = this.value
         if(code > 57 || (code < 48 && code != 8 ))  {
            return false;
         } else {
            this.value = trata(valor, false);
         }
      }

      campo.onblur = function() {

      var valor = this.value;
         if( valor.length < 13 ) {
            this.value = ""
         }else {
            this.value = trata( this.value, true );
         }
      }

      campo.maxLength = 14;
 }
 mascaraTelefone( document.getElementById('telephone') );
</script>
@endsection
