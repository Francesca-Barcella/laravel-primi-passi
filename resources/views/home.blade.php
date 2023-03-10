<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>laravel time</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <header>
    <nav class="nav justify-content-center">
      <!-- a class="nav-link active" href="/">Home</a> -->
      <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'bg-primary text-dark' : ''}}" href="{{ route ('home') }}">Home</a>
      <!-- <a class="nav-link" href="/about">About</a> -->
      <a class="nav-link {{ Route::currentRouteName() === 'about' ? 'bg-primary text-dark' : ''}}" href="{{ route ('about') }}">About</a>
      <!-- <a class="nav-link" href="/team">Team</a> -->
      <a class="nav-link {{ Route::currentRouteName() === 'team' ? 'bg-primary text-dark' : ''}}" href="{{ route ('team') }}">Team</a>
    </nav>
  </header>
  <div class="container">
    <h1>{{$page_title}}</h1>
    <h3>{{$hello_message}}</h3>
  </div>
</body>

</html>