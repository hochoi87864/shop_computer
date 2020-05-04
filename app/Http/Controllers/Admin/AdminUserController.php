<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class AdminUserController extends Controller
{
    //
    public function index()
    {
        $user = User::all();
        $data = [
            'users' => $user
        ];
        return view('admin.user.index',$data);
    }
    public function create()
    {
        return view('admin.user.create');
    }
    public function store(Request $request)
    {
        $this->insertOrUpdate($request);
        return redirect()->route('admin.user.index');
    }
    public function edit($id)
    {
        $user = User::find($id);
        $data = [
            'user' => $user
        ];
        return view('admin.user.edit',$data);
    }
    public function update(Request $request, $id)
    {
        $this->insertOrUpdate($request, $id);
        return redirect()->route('admin.user.index');
    }
    public function insertOrUpdate(Request $request, $id='')
    {
        $user = new User();
        if($id)
        {
            $user = User::find($id);
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt(1);
        $user->phone = $request->phone;
        $user->save();
    }
    public function changePassword()
    {
        
    }
    public function action(Request $request,$action,$id)
    {
        $user = User::find($id);
        switch ($action) {
            case 'delete':
                if($id == 1)
                {
                    return redirect()->back();
                }
                $user->delete();
                return redirect()->route('admin.user.index');
                break;
            
            default:
                dd("Lỗi r");
                break;
        }
    }
}
