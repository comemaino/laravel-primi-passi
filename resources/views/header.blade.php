<nav>
  <ul>
    <li>
      <a href="{{ route('home')}}">home</a>
    </li>
    <li>
      <a href="{{ route('about')}}">about</a>
    </li>
  </ul>
</nav>

<style>
  nav {
    background-color: #ccc
  }

  ul {
    list-style: none
  }

  li {
    display: inline-block;
    margin: 0 0 2rem 2rem;
  }

  a {
    color: #444;
    text-decoration: none;
  }
</style>