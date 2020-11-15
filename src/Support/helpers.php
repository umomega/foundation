<?php

if (! function_exists('flatten_attributes')) {
    /**
     * Flattens attributes into HTML formats
     *
     * @param array $attributes
     * @return string
     */
    function flatten_attributes(array $attributes = [])
    {
        return implode(' ', array_map(function($a) {
            if(!is_array($a)) return $a;
            return $a[0] . '="' . $a[1] . '"';
        }, $attributes));
    }
}
