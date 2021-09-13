<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Reply;

class ReplyPolicy extends Policy
{
    public function update(User $user, Reply $reply)
    {
        // return $reply->user_id == $user->id;
        return true;
    }

    // 删除验证，当前登录用户ID == 回复用户ID
    public function destroy(User $user, Reply $reply)
    {
        return $user->id == $reply->user_id;
    }
}
