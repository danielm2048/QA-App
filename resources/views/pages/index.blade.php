@extends('layouts.app')

@section('content')
<br />
<div class="jumbotron text-center">
  <h1>Welcome to the QA App</h1>
  <p>This is the challenge for the vegan hacktivists</p>
  <a class="btn btn-primary" href="/questions" role="button">Ask a question!</a>
  <a class="btn" style="background-color: #ff0097; color: white" href="https://veganhacktivists.org/" target="_blank"
    role="button">
    Give them a visit!
  </a>
</div>
@endsection