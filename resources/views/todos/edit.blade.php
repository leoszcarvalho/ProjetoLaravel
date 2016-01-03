@extends('layouts.main')
@section('content')


    <ul>


        <?php

        //echo $todo_list[0]->name;

        foreach($todo_list as $list)
        {
    ?>

        <li>{!!   link_to_route('todos.show', $list->name, [$list->id]) !!} - {!!  link_to_route('todos.edit', 'Edit', [$list->id])  !!}</li>
    <?php
        }
        ?>


        {{--Em blade
        @foreach($todo_list as $list)

            <li>{{{ $list->name }}}</li>

        @endforeach--}}


    </ul>

    <p>{!! link_to_route('todos.create', 'create', null, ['class' => 'success button']) !!}</p>

@stop
