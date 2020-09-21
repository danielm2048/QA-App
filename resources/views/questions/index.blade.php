@extends('layouts.app')

@section('content')
<br />
<h1>Questions</h1>
{!! Form::open(["action" => "App\Http\Controllers\QuestionsController@store"]) !!}
<div class="form-group">
  {{Form::label("title", "Title")}}
  {{Form::text("title", "", ["class" => "form-control", "placeholder" => $placeholder])}}
</div>
{{Form::submit("Submit", ["class" => "btn btn-primary"])}}
{!! Form::close() !!}
<br />
@if (count($questions) > 0)
@foreach ($questions as $question)
<div class="card padding p-3 mb-3">
  <h3><a href="/questions/{{$question->id}}">{{$question->title}}</a></h3>
</div>
@endforeach
@else
<p>No questions found</p>
@endif
@endsection