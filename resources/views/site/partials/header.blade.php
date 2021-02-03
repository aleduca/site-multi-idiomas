<div class="header">

  <ul class="header-links">
    <li><a href="/">Home</a></li>
    <li><a href="/login">Login</a></li>
    <li><a href="/posts">Posts</a></li>
    <li>
      <a href="#" class="changeLanguage" data-id="ptBR">Português</a>
    </li>
    <li>
      <a href="#" class="changeLanguage" data-id="enUS">Inglês</a>
    </li>
  </ul>

  <div class="header-status-login">
    Olá,
    @if (Auth::user())
      {{ Auth::user()->firstName }} {{ Auth::user()->lastName }} | <a href="/logout">logout</a>
    @else
      visitante
    @endif
  </div>

</div>