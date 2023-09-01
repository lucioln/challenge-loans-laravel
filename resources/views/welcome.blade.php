@extends('layouts.template')

@section('title', 'Preencha o Formulário')

@section('content')
    <form class="col s12" action="/loans" method="POST">
        @method('POST')
        @csrf
        <div class="row">
            <div class="input-field col s6">
                <input id="name" name="name" type="text" class="validate">
                <label for="name">Nome</label>
            </div>
            <div class="input-field col s6">
                <input id="age" name="age" type="number" class="validate" min="16" max="100">
                <label for="age">Idade</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
                <input type="number" name="salary" class="validate" step="0.01" required>
                <label for="salary">Salario</label>
            </div>
            <div class="input-field col s6">
                <select name="location">
                    <option value="" disabled selected>Região</option>
                    <option value="AC">AC</option>
                    <option value="AL">AL</option>
                    <option value="AP">AP</option>
                    <option value="AM">AM</option>
                    <option value="BA">BA</option>
                    <option value="CE">CE</option>
                    <option value="DF">DF</option>
                    <option value="ES">ES</option>
                    <option value="GO">GO</option>
                    <option value="MA">MA</option>
                    <option value="MT">MT</option>
                    <option value="MS">MS</option>
                    <option value="MG">MG</option>
                    <option value="PA">PA</option>
                    <option value="PB">PB</option>
                    <option value="PR">PR</option>
                    <option value="PE">PE</option>
                    <option value="PI">PI</option>
                    <option value="RJ">RJ</option>
                    <option value="RN">RN</option>
                    <option value="RS">RS</option>
                    <option value="RO">RO</option>
                    <option value="RR">RR</option>
                    <option value="SC">SC</option>
                    <option value="SP">SP</option>
                    <option value="SE">SE</option>
                    <option value="TO">TO</option>
                </select>
            </div>
        </div>
        <div class="col s12 center">
            <button class="btn waves-effect waves-light" type="submit">Enviar
        </div>
        </button>
        @if ($errors->any())
        <div class="row">
            <div class="col s12 center alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    </form>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems);
        });
    </script>
@endsection
