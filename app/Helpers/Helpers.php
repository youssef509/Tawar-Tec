<?php

if (!function_exists('is_active')) {
    function is_active($route)
    {
        return request()->is($route) ? 'active' : '';
    }
}