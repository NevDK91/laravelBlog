
 <div class="container">
	<div class="row">
		<div class="col-md-offset-4 col-md-4 col-md-offset-4">
      <form class="form-signin" method="post" action="{{ URL::route('doSignIn') }}">
        <center><h2 class="form-signin-heading">Пожалуйста, авторизуйтесь.</h2></center>
         @if(Session::has('error'))
 			<h4 class="err">{{ Session::get('error') }}</h4>
 		@endif
        <label for="name" class="sr-only">Имя</label>
        <input type="text" id="name" name="name" class="form-control" placeholder="Name" required autofocus>
        <label for="password" class="sr-only">Пароль</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
        <input type="hidden" name="csrf_token" value="{{ csrf_token() }}">
       
        <div class="checkbox">
          <label>
           <center> <input type="checkbox" name="rememberMe" value="remember-me"> Помнить обо мне</center>
          </label>
        </div>
        <center><button class="btn btn-md btn-primary " type="submit">Sign in</button></center>
      </form>
</div>

</div>
    </div> <!-- /container -->