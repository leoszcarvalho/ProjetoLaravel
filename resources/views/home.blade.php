@extends('layouts.main')
@section('content')
  <h1><?php echo $name; ?></h1>

<!--//em blade-->
  <h1>{{{ $name }}}</h1>

@stop
