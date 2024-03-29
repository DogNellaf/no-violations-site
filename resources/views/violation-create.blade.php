@extends('layouts.app')

@section('title', 'Добавление заявление :: Мои заявления')

@section('content')
<form action="{{ route('violation.store') }}" method="POST">
	@csrf
	<div class="mb-3">
		<label for="Description" class="form-label">Описание</label>
		<textarea name="description" id="txtFullDescription" class="form-control @error('description') is-invalid @enderror" value="{{ old('description') }}" row="3"></textarea>
		@error('description')
		<div class="invalid-feedback">{{ $message }}</div>
		@enderror
	</div>
	<div class="mb-3">
		<label for="Number" class="form-label">Номер</label>
		<input name="number" id="Number" class="form-control @error('number') is-invalid @enderror" value="{{ old('number') }}">
		@error('number')
		<div class="invalid-feedback">{{ $message }}</div>
		@enderror
	</div>
	<input type="submit" class="btn btn-primary" value="Добавить">
</form>
@endsection('content')