
 <div class="container reg">
 <div class="col-md-offset-3 col-md-6 col-md-offset-3">
        <center><h2 class="form-signin-heading">Регистрация пользователя.</h2></center>
@if($errors->has())
<div class="panel panel-default panel-errors">
<ul class="text-danger bg-danger">
   @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
  @endforeach
  </ul>
  </div>
@endif
@if(isset($message))
  <h4> {{ $message }} </h4>
@endif 
   
    <form class="form-horizontal" role="form" method="post" action="{{ URL::route('doSignUp') }}" enctype="multipart/form-data">
  <div class="form-group required">
    <label class="control-label col-sm-2" for="name">Имя:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
    </div>
  </div>
  <div class="form-group required">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group required">
    <label class="control-label col-sm-2" for="password">Пароль:</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group required">
    <label class="control-label col-sm-2" for="password_confirmation">Подтверждение пароля:</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Enter password">
    </div>
  </div>

<div class="form-group">
    <label class="control-label col-sm-2" for="avatar">Аватар:</label>
    <div class="col-sm-10">
      <input id="input-1" type="file" class="file" name="avatar"> 
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="fio">ФИО:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="fio" id="fio" placeholder="Enter fio">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="about">О себе:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="about" id="about" placeholder="Enter about yourself">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary submit">Регистрация</button>
    </div>
  </div>
  <input type="hidden" name="csrf_token" value="{{ csrf_token() }}">
</form>
</div>
   <!-- <input type="hidden" name="csrf_token" value="{{ csrf_token() }}"> -->



       <!--  <label for="name" class="col-md-4">Имя пользователя<span style="color:red;">*</span></label>
        <div class="col-md-8"><input type="text" id="name" name="name" class="form-control" placeholder="Имя пользователя" required autofocus></div>
        <label for="email">Email адрес</label>
        <div class="col-md-8"><input type="email" id="email" name="email" class="form-control" placeholder="Email" required autofocus></div>
        <label for="inputPassword">Пароль</label>
        <div class="col-md-8"><input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Пароль" required></div>
        <label for="inputPasswordConfirm">Пароль еще раз</label>
        <div class="col-md-8"><input type="password" id="inputPasswordConfirm" name="inputPasswordConfirm" class="form-control" placeholder="Подтверждение пароля" required></div>
        <label for="inputFio">ФИО, если есть кайф писать</label>
        <div class="col-md-8"><input type="text" id="inputFio" name="inputFio" class="form-control" placeholder="ФИО" style="margin-top:20px" required></div>
        <label for="inputAbout">О себе</label>
        <div class="col-md-8"><input type="text" id="inputAbout" name="inputAbout" class="form-control" placeholder="О себе" style="margin-top:20px" required></div>
        <label class="control-label" for="input-1" style="margin-top:20px">Выбрать изображение</label>
        <input id="input-1" type="file" class="file" name="inputAvatar"> 


        
      
        <center><button class="btn btn-md btn-primary" style="margin-top:20px" type="submit">Регистрация</button></center>
      </form> -->


    </div> <!-- /container -->