@extends('layouts.form')

@section('content')
<!-- 
<a href = "{{route('chapas.index')}}"><p class = "adm">Sou Administrador</p></a> -->

@if(Session::has('error'))
    <div class="alert alert-danger" role="alert">
        {{Session::get('error')}}
    </div>
@endif
<div class = "container-fluid background col-sm-4"> 
    <h3 class = "title">VOTAÇÃO PARA O COLEGIADO</h3><br>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis blanditiis hic neque. Sunt illo, iure, veritatis explicabo debitis id voluptatum unde libero labore eligendi quidem fugit dolores aliquam repellendus officiis.</p>
    <form action = "{{route ('eleicao.store')}}" method= "POST">
        @csrf
        <div class = "form-group">  
                <label for = "name"> Nome</label>
                <input type = "text" class = "form-control" placeholder = "Seu nome" name = "name"><br>
                <label for = "email"> Email </label>
                <input type = "email" class = "form-control"  placeholder = "Email" name = "email"><br>
                <!-- <small id="emailHelp" class="form-text text-muted">Pensar neste texto</small><br> -->
                <!-- <label for = "registration"> Matricula </label>
                <input type = "text" class = "form-control" placeholder = "Sua matricula" name = "registration"><br> -->
                <button type = "i   nput" class = "btn btn-primary vote">Ir Para Votação</button>
                <small><a class = "adm" href = "{{route('chapas.index')}}">Sou Administrador</a></small>
        </div>    
    </form>

  
</div>

@endsection