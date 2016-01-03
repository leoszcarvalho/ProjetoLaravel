@extends('layouts.main')
@section('content')


    <ul>

    <?php

        //echo $todo_list[0]->name;

        foreach($todo_list as $list)
        {
    ?>

        <li>{{{$list->name}}}</li>
    <?php
        }
        ?>


        {{--Em blade
        @foreach($todo_list as $list)

            <li>{{{ $list->name }}}</li>

        @endforeach--}}


    </ul>

@stop
