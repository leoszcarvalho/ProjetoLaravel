@extends('layouts.main')
@section('content')
  <h2>Show list with {{{$list->name}}}</h2>
  <p>{!! link_to_route('todos.index', 'back') !!}</p>
@stop
