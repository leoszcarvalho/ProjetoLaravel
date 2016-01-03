@extends('layouts.main')
@section('content')


    <!--<form action="http://localhost/laravel/projeto/public/todos" method="POST" accept-charset="UTF-8">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        <label for="title">List Title</label>
        <input type="text" name="title" id="title">
        <input type="submit" class="button" value="submit">
    </form>-->


    <!--Pra usar a form ver arquivo formfacades -->
    {!! Form::open( array('route' => 'todos.store') ) !!}

    {!!  Form::label('title','This is the form title')  !!}
    {!!  Form::text('title')  !!}

    {{--Validação do campo title usa apenas  bracket com duas exclamações para que o html n seja substituido --}}
    {!!   $errors->first("title","<p class='error'>:message</p>") !!}

    {!!  Form::submit('Submit Button', array('class' => 'button', "style" => "margin-left:5px;")) !!}

    {!!  Form::close()  !!}

@stop