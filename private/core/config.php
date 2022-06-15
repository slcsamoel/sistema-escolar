<?php
/*
 * defined root dir
 */
define('ROOT_DIR', 'http://escolar.local');


/*
 * function for get files assets
 * js , css  and images
 */
 function asset($asset){
    return ROOT_DIR.'/assets/'.$asset;
}
