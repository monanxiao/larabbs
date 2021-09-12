<?php

// 获取当前路由 用于当前路由样式定制
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}

// 当前分类选中
function category_nav_active($category_id)
{
    return active_class((if_route('categories.show') && if_route_param('category', $category_id)));
}

// 话题摘录
function make_excerpt($value, $length = 200)
{
    // 正则匹配 摘录内容，并去除空格
    $excerpt = trim(preg_replace('/\r\n|\r|\n+/', ' ', strip_tags($value)));

    return Str::limit($excerpt, $length);// 内容截取
}
