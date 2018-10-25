<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;


class UserController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users=User::paginate(10);
      return view('Admin.user.list',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $roles=Role::get();
      return view('Admin.user.add',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users=User::whereEmail($request->email)->first();
        if ($users){
            return redirect(route('user.create'))->with('error', 'این ایمیل قبلا در دیتابیس ثبت شده است');
        }
        else{
            $this->validate(request(),[
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
            ]);
            $user=User::create([
                'name'=>$request['name'],
                'email'=>$request['email'],
                'password'=>bcrypt($request['password'])
            ]);
            $user->roles()->sync($request->permissions);
            return redirect(route('user.create'))->with('status', 'reteurn massage');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
      $roles=Role::get();
      return view('Admin.user.edit',compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param User $user
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(Request $request, User $user)
    {
      $data=array();
      $data['name']=$request->name;
      $data['email']=$request->email;
        if ($request->password) {
            $data['password']=bcrypt($request->password);
            $this->validate(request(),[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
        ]);}
      $user->update($data);
      $user->roles()->sync($request->permissions);
      return redirect(route('user.index'))->with('status', 'reteurn massage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function destroy(User $user)
    {
      $user->delete();
//        unlink($article->image);
      return redirect(route('user.index'))->with('status', 'reteurn massage');
    }
//for update password in panel
    // public function show_ch()
    // {
    //     return view('Admin.user.page');
    // }

    public function check_ch(Request $request)
    {
        $user=auth()->user();
        if ($request->email==$user->email &&  Hash::check($request->password, $user->password )){
            return redirect('Admin/user/page2/show_update')->with('valid','success');

        }
        return redirect('Admin/user/page')->with('error', 'ایمیل و یا رمز عبور اشتباه است');
    }

    public function show_update()
    {
        $user=auth()->user();
        if(Session::has('valid')){
        return view('Admin.user.page2',compact('user'));
        }
        return redirect('Admin/user/page')->with('error', 'لطفا ابتدا از بخش تنظیمات رمز عبور وارد شوید');

    }

    public function update_ch(Request $request,User $user)
    {
        $data=$request->all();

        $data['password']=bcrypt($request->password);
        Session::flash('valid','success');
        $this->validate(request(),[
            'password' => 'required|string|min:6|confirmed',
        ]);
        $user->update($data);
        return redirect('/home')->with('status','return message');
    }

    public function test()
    {
        $client = new Client();
        $request = $client->get('http://hezaredigital.com/api/v1/categories');
        $response = $request->getBody()->getContents();
        $response=json_decode($response,true);
        return view('Admin.test',compact('response'));
    }

}
