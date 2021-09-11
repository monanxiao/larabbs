<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    // 用户个人资料页
    public function show(User $user)
    {
        // 隐性绑定路由绑定 用户 $user
        return view('users.show', compact('user'));
    }

    // 资料编辑页
    public function edit()
    {

    }

    // 接收资料更新数据
    public function update()
    {

    }
}
