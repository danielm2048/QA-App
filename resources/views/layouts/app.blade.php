<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{asset("css/app.css")}}">
  <title>{{config("app.name", "QA App")}}</title>
</head>

<body>
  <div class="d-flex flex-column sticky-footer-wrapper min-vh-100">
    <main class="flex-fill">
      <div class="container">
        @include('include.messages')
        @yield("content")
      </div>
    </main>
    <footer>
      <div class="container mb-2" style="text-align: center; font-size: 18px">
        <span class="text-muted">Made with love by Daniel Mimoun </span>
      </div>
    </footer>
</body>

</html>