<nav class="navbar navbar-fixed-top navbar-inverse">
  <div class="container">
    <div class="">
      <a class="navbar-brand" href="#">Блог</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">ГЛАВНАЯ</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">КАТЕГОРИИ
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
           @foreach($results['categories'] as $row)
           <li><a href="#">{{$row->name}}</a></li>
			@endforeach	 
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">КАНАЛЫ
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Общий</a></li>
            <li><a href="#">Пользователей</a></li>
            <li><a href="#">Администратора</a></li> 
          </ul>
        </li>  
      </ul>
      <ul class=" nav navbar-nav pull-right">
          @if(Auth::check()) 
            <li class="userbar"><a href=""><img src="{{ Auth::user()->avatar }}">  <span>{{ Auth::user()->name }}</span></a></li>
            <li><a href="/signOut">Выход</a></li>
          
          @else
            <li><a href="/signIn">Вход</a></li>
            <li><a href="/signUp">Регистрация</a></li>
          
          @endif

      </ul>
    </div>
  </div>
</nav>