<?php

Class UsersController extends BaseController {
   


public function formSignIn()
    {
        $categories = DB::table('categories')->select('name')->get();
        return  View::make('auth')->with('results', ['categories' => $categories]);
    }

    public function doSignIn()
    {   
        $name = Input::get('name');
        $password = Input::get('password');
        $usr = User::where("name", "=", $name)->firstOrFail();
        $result = Auth::attempt(array('name' => $name, 'password' => $password), true);
        if($result == false){

            return Redirect::route("formSignIn")->with("error", "Пользователь не найден");
        }

                $categories = DB::table('categories')->select('name')->get();
                $lastPosts = DB::table('posts')->orderBy('id', "DESC")->limit(6)->get();
                $person = User::where("name", "=", $name)->where("password", "=", Hash::make($password));
                return  Redirect::route("index")->with('results',['categories' => $categories, 'lastPosts' => $lastPosts]);
        
        } 

        public function doSignOut()
    {   
        $categories = DB::table('categories')->select('name')->get();
        $lastPosts = DB::table('posts')->orderBy('id', "DESC")->limit(6)->get();
        Auth::logout();
        return  Redirect::route("index")->with('results',['categories' => $categories, 'lastPosts' => $lastPosts]);
        
        } 

        public function formSignUp()
        {   
            $categories = DB::table('categories')->select('name')->get();
            return  View::make('signUp')->with('results', ['categories' => $categories]);
        } 

        public function doSignUp()
        {   


            
            $rules = [
            'name' => 'required|min:6|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required|min:6',
            'avatar' => 'mimes:jpeg,bmp,png|max:3000'

        ];

        $messages = array(
                               'unique' => 'Увы, значение в поле :attribute уже зарегистрировано.',
                                'required' => 'Поле :attribute обязательно к заполнению',
                                'email' => 'Введенн некорректный email',
                                'min' => 'Минимальная длина поля :attribute равна 6 символам',
                                'confirmed' => 'Подтверждающий пароль и :attribute должны совпадать',
                                'max' => 'Длина поля :attribute слишком большая',
                                'mimes' => 'Тип файла :attribute не соответствует жестокой действительности',
                               );
        $niceNames = array(
                'name' => 'Имя пользователя',
                'email' => 'Email',
                'password' => 'Пароль',
                'password_confirmation' => 'Подтверждение пароля',
                'avatar' => 'Аватар'
            );

        $validator = Validator::make(Input::all(), $rules, $messages);

        $validator->setAttributeNames($niceNames);

        if($validator->fails()) {
            return  Redirect::route("formSignUp")->withErrors($validator);
        }

        if($validator->passes()) {
        

            $img = Input::file('avatar');
        // checking file is valid.
            if(isset($img)) {
                if (Input::file('avatar')->isValid()) {
                  $destinationPath = 'uploads'; // upload path
                  $extension = Input::file('avatar')->getClientOriginalExtension(); // getting image extension
                  $fileName = rand(11111,99999).'.'.$extension; // renameing image
                  Input::file('avatar')->move($destinationPath, $fileName); // uploading file to given path
                  $insertFile = $destinationPath."/".$fileName;
                  // sending back with message
                  //Session::flash('success', 'Файл успешно загружен'); 
                }
             }  
             if(!isset($insertFile))
                $insertFile = "uploads/guest.png";

        $confirmation_code = str_random(30);

        User::create([
            'name' => Input::get("name"),
            'email' => Input::get("email"),
            'password' => Hash::make( Input::get("password") ),
            'avatar' => $insertFile,
            'fio' => Input::get("fio"),
            'about' => Input::get("about"),
            'confirmation_code' => $confirmation_code
        ]);


        $data = ['confirm_code' => $confirmation_code];

        Mail::send('emails.verify', $data, function($message) {
            $message->to(Input::get('email'), Input::get('name'))
                ->subject('Подтверждение email адреса на сайте');
        });

        return View::make("registered")->with("response", "Аккаунт был зарегистрирован, но требует подтверждения. Проверьте свой почтоывй ящик, на него придет письмо с ссылкой, по которой необходимо пройти для подтверждения аккаунта");
        }
        //Flash::message('Thanks for signing up! Please check your email.');

        //return Redirect::back();
                
        }



        public function regVerify($confirm_code){
            $usr = User::where("confirmation_code", "=", $confirm_code)->firstOrFail();
            if($usr->confirmed == 1)
                return Response::make(View::make('error404')->with('error404', 'Аккаунт уже подтвержден, дальнейшее использование это ссылки не имеет смысла'), 404);
            $usr->confirmed = 1;
            $usr->save();
            return View::make("registered")->with("response", "Аккаунт был успешно подтвержден!");
        } 

}

