<?php 

declare(strict_types=1);
namespace App\Http\Controllers\auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller {

    public function __construct(){

    }

    public function login(Request $request): View{

        if(Auth::check()){
            return view('cover.home');
        }

        return view('auth.signin');
    }

    public function register(Request $request):View{
        if(Auth::check()){
            return view('cover.home');
        }
        return view('auth.signup');
    }

    public function loginUser(Request $request){
        $credentials = $request->validate([
            'email' => 'required|max:255|email',
            'password' => 'required|alphaNum|min:6|max:15',
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/')->with('status','Login Successfully Welcome to Dashboard!');
        } 

        return redirect()->back()->with('error','Invalid Credientails');
    }

    public function registerUser(Request $request){
        $request->validate([
            'name' => 'required|min:6|max:20',
            'email' => 'required|email|unique:users',
            'password' => 'required|alphaNum|min:6|max:13|confirmed',
            'password_confirmation' => 'min:6|max:13'
        ]);
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
        ]);
        $request->session()->flash('success','User has been registered Successfully!');
        return back();
    }


    public function logoutUser(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/signin');
    }

}

?>