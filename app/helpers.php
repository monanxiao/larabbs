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
