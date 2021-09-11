<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    // 用户个人资料页
    public function show(User $user)
    {
        // 隐性绑定路由绑定 用户 $user
        return view('users.show', compact('user'));
    }

    // 资料编辑页
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    // 接收资料更新数据 UserRequest 表单请求验证
    public function update(UserRequest $request, User $user)
    {
        $user->update($request->all());// 执行更新资料

        return redirect()->route('users.show', $user->id)->with('success', '个人资料更新成功！');
    }
}
