@extends('layouts.template')

@section('title', 'Como funciona a consulta?')

@section('content')
<div class="container align-right">

    <h5>Empréstimo Pessoal</h5>
    <ul>
        <li>-Salário do cliente igual ou inferior a R$ 3000</li>
        <li>-Salário do cliente entre R$ 3000 e R$ 5000, se o cliente tiver menos de 30 anos e residir em São Paulo (SP)</li>
    </ul>

    <h5>Empréstimo Consignado</h5>
    <ul>
        <li>-Salário do cliente igual ou superior a R$ 5000</li>
    </ul>

    <h5>Empréstimo com Garantia</h5>
    <ul>
        <li>-Salário do cliente igual ou inferior a R$ 3000</li>
        <li>-Salário do cliente entre R$ 3000 e R$ 5000, se o cliente tiver menos de 30 anos e residir em São Paulo (SP)</li>
    </ul>
</div>

@endsection
