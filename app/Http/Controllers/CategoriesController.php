<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Topic;

class CategoriesController extends Controller
{
    // 分类页
    public function show(Category $category, Request $request, Topic $topic)
    {

        // 读取分类 ID 关联的话题，并按每 20 条分页
        $topics = $topic->withOrder($request->order) // 调用话题排序规则
                        ->where('category_id', $category->id) // 当前分类下的话题
                        ->with('user', 'category')   // 预加载防止 N+1 问题
                        ->paginate(20);

        // 传参变量话题和分类到模板中
        return view('topics.index', compact('topics', 'category'));

    }
}
