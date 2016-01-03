@extends('layouts.main')
@section('content')

    <p>
        {!! link_to_route('todos.create', 'create', null, ['class' => 'success button']) !!}
    </p>

    <ul>


        <?php

        //echo $todo_list[0]->name;

        foreach($todo_list as $list)
        {
        ?>

            <li>
                {!!   link_to_route('todos.show', $list->name, [$list->id]) !!}
                <ul>
                    <li style="display: inline-block;">
                        {!!  link_to_route('todos.edit', 'Edit', [$list->id], ['class' => 'button'])  !!}
                    </li>
                    <li style="display: inline-block;">
                        {{--Pro delete é necessário criar um form--}}
                        {!! Form::model($list, array('method' => 'DELETE', 'route' => ['todos.destroy', $list->id])) !!}
                        {!! Form::button('destroy', ['type' => 'submit', 'class' => 'button alert']) !!}
                        {!! Form::close() !!}
                    </li>
                </ul>
            </li>
        <?php
        }
        ?>


        {{--Em blade
        @foreach($todo_list as $list)

            <li>{{{ $list->name }}}</li>

        @endforeach--}}


    </ul>



@stop
