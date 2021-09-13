<?php

namespace App\Observers;

use App\Models\Reply;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class ReplyObserver
{


    // 用户回复内容监听 处理 XSS 攻击
    public function creating(Reply $reply)
    {
        // 过滤用户的内容
        $reply->content = clean($reply->content, 'user_topic_body');
    }

    // 用户回复话题后，回复数+1
    public function created(Reply $reply)
    {
        // 简单用法
        // $reply->topic->increment('reply_count', 1);

        // 计算当前的回复总数，严谨用法
        $reply->topic->reply_count = $reply->topic->replies->count();
        $reply->topic->save();
    }

    // 删除回复后，回复数 -1
}
