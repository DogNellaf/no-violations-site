@extends('layouts.app')
@section('title', 'Информация о заявлении')
@section('content')
	<h1>Информация о Заявлении {{$violation->id}}</h1>
	<p>{{$vioaltion->description}}</p>
	<p>{{$vioaltion->number}}</p>
	<p>{{$vioaltion->status}}</p>
	<p class="author">{{ $violation->user->name }}</p>
@endsection('content')