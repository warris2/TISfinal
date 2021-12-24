@extends('layouts.app')

@section('template_title')
    Agregar consultor
@endsection

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" >
                <div class="card-header" style="background-color: #e3342f; color: white; ">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register.store') }}">
                        @csrf
                        @include('auth.formconsultor')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
