<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserAuthController extends Controller
{
    function login()
    {
        return view('auth.login');
    }

    function register()
    {
        return view('auth.register');
    }

    //when click register
    function save(Request $request)
    {
        
        //validate request
        $validator = Validator::make($request->all(),[
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:10',
            'role'=>'required',
        ]);

        //check the request is validated or not
        if (!$validator->passes()) {
            return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
        }else{
            $user = new User;
            $user->firstname = ucfirst($request->firstname);
            $user->lastname = ucfirst($request->lastname);
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->role = $request->role;
            $query = $user->save();
            // $values = [
            //     'firstname'=>$request->firstname,
            //     'lastname'=>$request->lastname,
            //     'email'=>$request->email,
            //     'password'=>Hash::make($request->password),
            //     'role'=>$request->role,
            // ];

            // //insert users to db
            // $query = DB::table('users')->insert($values);
        
            if ($query) {
                return response()->json(['status'=>1, 'msg'=>'New Student has been successfully registered']);
            }
        }

    }

    //when click login
    function check(Request $request){
        //Validate requests
        $request->validate([
             'email'=>'required|email',
             'password'=>'required|min:5|max:10'
        ]);


        $userInfo = User::where('email','=', $request->email)->first();

        if(!$userInfo){
            return response()->json(['status'=>-1, 'msg'=>'unknown email']);
            //return back()->with('fail','We do not recognize your email address');
        }else{
            //check password
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                //return redirect('devPage/home');
                return response()->json(['status'=>1, 'msg'=>'']);

            }else{
                return response()->json(['status'=>0, 'msg'=>'incorrect pass email']);
                //return back()->with('fail','Incorrect password');
            }
        }
    }

    function home(){
        $data = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];
        return view('layout.home', $data);
    }

    function logout(){
        if (session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            return redirect('/auth/login');
        }
    }

    //
    /*function login(){
        return view('auth.login');
    }

    function register(){
        return view('auth.register');
    }

    function save(Request $request){
        //return $request->input();

        //validate request
        $validator = Validator::make($request->all(),[
            'nama'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:10',
        ]);

        


        // $request->validate([
        //     'nama'=>'required',
        //     'email'=>'required|email|unique:users',
        //     'password'=>'required|min:5|max:10',
        // ]);


        //if form validated successfuly, then register new user
        if (!$validator->passes()) {
            return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
        }else{
            $users = [
                'nama'=>$request->nama,
                'email'=>$request->email,
                'password'=>$request->password,
            ];

            $query = DB::table('users')->insert($users);
            // $user = new User;
            // $user->nama = $request->nama;
            // $user->email = $request->email;
            // $user->password = Hash::make($request->password);
            // $query = $user->save();

            if ($query) {
                return response()->json(['$status'=>1, 'msg'=>'You have been successfuly register']);
                //return back()->with('success','You have been successfuly register');
            }
            // else{
            //     return back()->with('fail','Sorry, Something went wrong!');
            // }
        }
    }

    function create(Request $request){
        //return $request->Input();

        //validate request
        $validator = Validator::make($request->all(),[
            'nama'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:10',
        ]);

        


        // $request->validate([
        //     'nama'=>'required',
        //     'email'=>'required|email|unique:users',
        //     'password'=>'required|min:5|max:10',
        // ]);


        //if form validated successfuly, then register new user
        if (!$validator->passes()) {
            return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
        }else{
            $users = [
                'nama'=>$request->nama,
                'email'=>$request->email,
                'password'=>$request->password,
            ];

            $query = DB::table('users')->insert($users);
            // $user = new User;
            // $user->nama = $request->nama;
            // $user->email = $request->email;
            // $user->password = Hash::make($request->password);
            // $query = $user->save();

            if ($query) {
                return response()->json(['$status'=>1, 'msg'=>'You have been successfuly register']);
                //return back()->with('success','You have been successfuly register');
            }
            // else{
            //     return back()->with('fail','Sorry, Something went wrong!');
            // }
        }

        
    }

    function check(Request $request){
        //return $request->input();
        //validate request

        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:10',
        ]);

        //if form validated sucessfuly, the process login

        $user = User::where('email','=', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                
                //password match, then redirect to our user home
                $request->session->put('LoggedUser', $user->id);
                {return redirect('home');} //it's mean going to function home
            }else {
                return back()->with('fail','Invalid Password'); 
            }
        }else{
            return back()->with('fail','No Account found for this email');
        }
    }

    function home(){
        return view('devPage.home');
    }*/
}
