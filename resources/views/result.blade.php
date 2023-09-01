@extends('layouts.template')

@section('title', "Emprestimos disponiveis para $name")


@section('content')
    @foreach ($eligibleLoans as $loan)
        <div class="col s4 m7">

            <div class="card horizontal">
                <div class="card-stacked">
                    <div class="card-content">
                        <strong class="header">{{ $loan->category }}</strong>
                        <p>Com taxas de apenas <strong>{{$loan->tax}}%</strong> .</p>
                    </div>
                    <div class="card-action">
                        <a href="#">Solicitar meu emprestimo agora!</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
