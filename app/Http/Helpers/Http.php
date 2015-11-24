<?php

/**
 * 
 * @return string Current URI
 */
function current_url(){
    return request()->fullUrl();
}