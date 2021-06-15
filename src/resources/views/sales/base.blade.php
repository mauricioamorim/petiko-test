@extends('base')

@section('head')
    @include('sales.head')
@endsection

@section('content')
    @if ($errors->any())
        <div id="message-error">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="row">
        <div class="col-md-3 d-none d-md-block">
            @include('sales.candidate')
        </div>
        <div class="col">
            <div class="text-center pb-4">
                <a href="{{ route('sales.create') }}"> <button class="btn btn-info rounded-pill btn-lg mr-3">Finalizar nova compra</button></a>
                <a href="{{ route('sales.list') }}"><button class="btn btn-warning rounded-pill btn-lg mr-3">Listar compras</button></a>
            </div>
            @include( $view_content )
        </div>
    </div>
@endsection

@section('scripts')
    @include('sales.scripts')
@endsection
