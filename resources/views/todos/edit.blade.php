@extends('layouts.main')
@section('content')



<!--Pra usar a form ver arquivo formfacades -->
{!! Form::model($list, array('method' => 'PUT', 'route' => ['todos.update', $list->id]) ) !!}

@include('todos.partials._form')

{!!  Form::close()  !!}

@stop