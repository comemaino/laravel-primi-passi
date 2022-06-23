<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel primi passi</title>
</head>
<body>
  <header>
    @include('header')
  </header>
  <main>
    <h1>
      Chi siamo
    </h1>
    <ul>
      @forelse ($teamMembers as $member)
      <li @if ($loop->first)
        style="color: red"
    @endif>
        <img src="https://www.placecage.com/200/200" alt="">
        <br>
        {{$member['name']}} {{$member['lastname']}}
        <br>
        {{$member['role']}}
        
      </li>
      
      @empty
      <p>lista vuota</p>
      @endforelse
    </ul>
  </main>
</body>
</html>