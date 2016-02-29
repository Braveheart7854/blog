<?php
/**
 * Created by PhpStorm.
 * User: th
 * Date: 2015/12/13
 * Time: 17:49
 */
namespace Home\Controller;
use Think\Controller;
class AboutController extends Controller {
    public function about(){
        $this->display('about');
    }
}