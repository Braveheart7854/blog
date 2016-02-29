<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

        //$art = new \Home\Model\ArticleModel();
        $art = D('Article');
        $artList = $art->getArtList();

//        var_dump($artList);

        $this->assign('artList', $artList);
        $this->display('index');

    }

    public function detail(){
        //记录点击量
        session_start();
        $max=get_cfg_var('session.gc_maxlifetime');
        if(isset($_SESSION['update'])&&is_numeric($_SESSION['update'])&&(time()-$_SESSION['update']>$max)){
            unset($_SESSION['update']);
        }

        if(!isset($_SESSION['update'])||!is_numeric($_SESSION['update'])||(time()-$_SESSION['update']>$max)){
            $_SESSION['id']="";
        }else{
            $_SESSION['id']=1;
        }

        header("/index.php/home/index/detail?id=1");
        $id=$_GET['id'];
        $art1=new \Home\Model\ArticleModel();
        $condition["article_id"]=1;
        $artList1 = $art1->where($condition)->select();
        if($id==$artList1[0]["article_id"]&&!$_SESSION['id']){
            $sql="update blog_article set click = click + 1 where article_id=$id";
            $art1->execute($sql);
        }

        if(!isset($_SESSION['update'])||!is_numeric($_SESSION['update'])||(time()-$_SESSION['update']>$max)){
            $_SESSION['update']=time();
        }

        $this->assign('artList1',$artList1);
        $this->display('detail');
    }

    public function login(){

        $this->display('login');

    }
//
    public function checklogin(){
        dump($_POST);
        if(empty($_POST['username']))
            die("lose param username");
        if(empty($_POST['verify']))
            die("verify must required");
        $code = $_POST['verify'];
        $verify = new \Think\Verify();
        $valide =  $verify->check($code, $id = '');
        if(!$valide)
            $this->redirect('');
        $userMode = M('user');





    }

    public function verify(){
        $Verify = new \Think\Verify();
        $Verify->entry();
    }








}