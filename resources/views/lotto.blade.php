<!doctype html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<style>
  body {
    font-family:標楷體;
    }
</style>
</head>
<body>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">J109212104</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">首頁</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/lotto/">樂透</a>
        </li>

        @guest
        <li class="nav-item">
          <a class="nav-link" href="/login/">登入</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/register/" tabindex="-1" aria-disabled="true">註冊</a>
          </li>
        @endguest

        @auth
        <li class="nav-item">
          <a class="nav-link" href="/mylogout/">登出</a>
        </li>
        @endauth
        
      </ul>
    </div>
  </div>
</nav>
<h2>今日你的幸運數字如下：</h2>
<hr>
<h3>特別號：{{ $lucky_number }}</h3>
<ul>
@foreach ($numbers as $number)
<li>{{ $number }}</li>
@endforeach
</ul>
</hr>
</body>
</html>