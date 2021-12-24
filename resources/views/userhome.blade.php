@extends('layouts.app')

@section('content')
<div class="container">
  <h2 class="text-center">Bienvenido {{ Auth::user()->name }}</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="service-item">
          <div class="icon">
            <i class="fa fa-gear"></i>
          </div>
          <div class="down-content">
            <h4>Convocatorias</h4>
            <p>Si quiere ver las ultimas convocatorias de TIS ingrese aqui.</p>
            <a href="{{ route('convocatorias.index') }}" class="filled-button">Ver mas</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-item">
          <div class="icon">
            <i class="fa fa-gear"></i>
          </div>
          <div class="down-content">
            <h4>Empresas</h4>
            <p>Para ver las empresas registradas o registrar una nueva ingrese aqui.</p>
            <a href="{{ route('empresas.index') }}" class="filled-button">Ver mas</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-item">
          <div class="icon">
            <i class="fa fa-gear"></i>
          </div>
          <div class="down-content">
            <h4>Acerca de nosotros</h4>
            <p>Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis null.</p>
            <a href="{{ route('register') }}" class="filled-button">Ver mas</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
