@extends("layouts.app")

@section("content")
<br />
<a href="/questions" class="btn btn-primary">Go Back</a>
<h1>Question</h1>
<h2>{{$question->title}}</h2>
{!! Form::open(["action" => ["App\Http\Controllers\AnswersController@store", $question->id]]) !!}
<div class="form-group">
  {{Form::label("body", "Body")}}
  {{Form::textarea("body", "", ["class" => "form-control", "placeholder" => "Answer nicely!", "rows" => "2"])}}
</div>
{{Form::submit("Submit", ["class" => "btn btn-primary"])}}
{!! Form::close() !!}
<br />
@if (count($question->answers) > 0)
@foreach ($question->answers as $answer)
<div class="card padding p-3 mb-3">
  <h3>{{$answer["body"]}}</h3>
</div>
@endforeach
@else
<p>No answers found</p>
@endif
@endsection