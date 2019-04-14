@extends('layouts.app')

@section('sidebar')
    @parent
@endsection

@section('content')
<main class="app-content">
    <div class="app-title">
      <div>
        <h1>@{{titleFortics}}</h1>
      <p>@{{message}}s</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active"><a href="#">Simple Tables</a></li>
      </ul>
    </div>

    <div class="row">

        <search></search>  

        <div class="clearfix"></div>
      
        <refritable></refritable>

    </div>
</main>
@endsection