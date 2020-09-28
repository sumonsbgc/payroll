<?php



if (!function_exists("get_compnay_name")) {
    function get_compnay_name($content = "S. A. Corporation Limited", $class = null)
    {
        printf("<h3 class=\"%s\">%s</h3>", $class, $content);
    }
}

if (!function_exists("get_compnay_address")) {
    function get_compnay_address($content = "WORLD TRADE CENTER CHATTOGRAM(5TH FLOOR),102/103, AGRABAD, C/A COMMERCE COLLEGE ROAD, 4000,DOUBLE MOORING, CHATTOGRAM", $class = null)
    {
        printf("<p class=\"%s\">%s</p>", $class, $content);
    }
}

                //<h3>{{ __('S. A. Corporation Limited') }}</h3>
