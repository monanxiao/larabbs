<?php

// 获取当前路由 用于当前路由样式定制
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}
