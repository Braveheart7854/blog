<?php
namespace Home\Model;
use Think\Model;

class articleModel extends Model {
    protected $tableName = 'article';

    public function getArtList(){
	  return $this->limit(10)->select();
  }

    public function uodateclick($id){
        $sql="update blog_article set click = click + 1 where article_id=$id";
        return $this->execute($sql);
    }
}