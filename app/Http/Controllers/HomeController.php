<?php


namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    

    public function index(){
        return view('index');
    }
    public Function register(){
        return view('register');
    }
    public function do_register(Request $request){
           $request-> validate([
             'name'=>'required',
             'mobile'=>'required',
             'address'=>'required',
             'email'=>'required',
             'password'=>'required',
             'image'=>'mimes:jpeg,png,gif|max:2048',
            ]);
            $data= $request->all();
            $path = 'asset/storage/images/' .$data['image'];
            $fileName=time().$request->file('image')->getClientoriginalName();
            $path=$request->file('image')->storeAs('images',$fileName,'public');
            $datas['image']='/storage/'.$path;
            $data['image']=$fileName;
            $data['password']=bcrypt($request->password);
           User::create($data);
            return redirect()->route('register')->with('success','register successfully');
    }


    public function login(){
        return view('login');
    }
    public function do_login(Request $request){
         $credentials = $request->only('email','password');
       
         if(Auth::attempt($credentials))
         {
         
          $request->session()->regenerate();
          
            return redirect()->route('dashbord');

         
         }
       
    }
    public function dashbord()
    {
        return view('dashbord');
    }
    public function profile(){
        $dd = Auth::User();
        return view('profile',compact('dd'));
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
    
}
