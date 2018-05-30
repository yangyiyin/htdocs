<?php
/**
 * Created by PhpStorm.
 * User: yyy
 * Date: 18/5/30
 * Time: 下午9:50
 */

$name = $_GET['name'];
if (file_exists(dirname(__FILE__).'/files/'.$name)) {
    echo 'success';
} else {
    echo 'fail';
}