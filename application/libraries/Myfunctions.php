<?php

class Myfunctions {
    function my_upper_case($string) {
        return strtoupper($string);
    }

    function remove_space($string) {
        return str_replace(" ", "_", strtolower($string));
    }
}
