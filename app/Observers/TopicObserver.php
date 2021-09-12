<?php

namespace App\Observers;

use App\Models\Topic;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class TopicObserver
{
    public function creating(Topic $topic)
    {
        //
    }

    public function updating(Topic $topic)
    {
        //
    }

    // saving 保存前监听  saved保存后监听
    public function saving(Topic $topic)
    {

        // 入库前，对输入内容进行过滤
        $topic->body = clean($topic->body, 'user_topic_body');

        // 赋值 excerpt 调用辅助方法 make_excerpt
        $topic->excerpt = make_excerpt($topic->body);

    }
}
