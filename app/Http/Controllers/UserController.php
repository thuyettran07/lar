<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\User;
use Auth;
class UserController extends Controller
{
	public function get_signin()
	{
		if (Auth::check()) {
    			return redirect()->intended('/index');
    	}
    	else{
				return view('users.register');
			}
	}

	public function post_signin(Request $request) 
	{
			$validate=Validator::make($request->all(),[
				'name'=>'required|max:254|unique:users|alpha',
				'gender'=> 'required| in:0,1',
				'birthday'=>'required|date',
				'email'=> 'required|regex:/^\w+\@gmail\.com$/|max:254|unique:users',
				'password' =>'required|between:6,12|confirmed',
				'password_confirmation'=>'required|between:6,12',
				'address'=>'required|max:256',
				'phone' =>'required|alpha_num|between:10,11|regex:/^0[0-9-+]+$/'
				]);
			if($validate->fails())
			{
					return redirect()->back()->with(['errors'=> $validate->errors()]);
			}
			else{
				//gọi model User.php đã được tạo
					$user=new User;
	//lấy thông tin từ các input đưa vào thuộc tính name, gender, ....trong model User
					$user->name=$request->name;
					$user->gender=$request->gender;
					$user->birthday=$request->birthday;
					$user->email=$request->email;
					$user->password=bcrypt($request->password);
					$user->address=$request->address;
					$user->phone=$request->phone;
					$user->remember_token=$request->_token;//lưu biến csrf_field(_token) tự tạo
					$user->status='1';

					//tiến hành lưu dữ liệu vào database
					$user->save();
					Auth::login($user);
					return redirect()->intended('index');
				}
		
	}

    public function getLogin(){
    	if (Auth::check() || Auth::viaRemember()) {
    			return redirect()->intended('index');
    	}
    	else{
    		return view('users.login');
    		}
    }
    public function postLogin(Request $request)
    {

		    	$validate=Validator::make($request->all(),[
		    		'email'=>'required|regex:/^\w+\@gmail\.com$/|max:254',
		    		'password'=>'required|max:12|min:6']);
		    	if($validate->fails())
		    	{
		    		return redirect()->back()->with(['errors'=>$validate->errors()]);
		    	}
		    	else { // kiem tra du lieu input hop le hay ko vs csdl --ghi nhớ remember me ko
			    		if(Auth::attempt(['email'=>$request->email,'password'=>$request->password,'status'=>'1'],$request->has('remember')))
			    		{ 
			    				//var_dump(Auth::user());
				    			return redirect()->intended('admin');
			    					
			    		}
			    		else
			    		{
				 					return redirect()->back()->with(['error'=>'fail']);
				    	}
		    	}
		    
    }

    public function create_index()
    {
    	
    		return view('users.index');
    
    }
    
   
   
}
