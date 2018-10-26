<?php
namespace Admin\Model;
use Think\Model;
class JobtypeModel extends Model {

	private $page = "";
	//获取列表
	public function getList($pagesize=25){
		$where = '1 = 1 ';
		$tableName = $this->getTableName();
		if(!empty($_REQUEST['jobtype_name'])){
			$where.= " and $tableName.`jobtype_name` like '%".$_REQUEST['jobtype_name']."%'";
		}
		if(!empty($_REQUEST['stime']) && !empty($_REQUEST['etime'])){
			$stime = strtotime($_REQUEST['stime']);
			$etime = strtotime($_REQUEST['etime']);
			if($stime > $etime){
				$where.= " and ($tableName.`addtime` between {$etime} and {$stime})";
			}else{
				$where.= " and ($tableName.`addtime` between {$stime} and {$etime})";
			}
			
		}elseif(!empty($_REQUEST['stime'])){
			$stime = strtotime($_REQUEST['stime']);
			$where.= " and $tableName.`addtime` >= {$stime} ";
		}elseif(!empty($_REQUEST['etime'])){
			$etime = strtotime($_REQUEST['etime']);
			$where.= " and $tableName.`addtime` <= {$etime} ";
		}
		$count = $this->where($where)->count();
    	$Page = new \Think\Page($count,$pagesize);
    	$this->page = $Page->show();
    	$limit = $Page->firstRow.','.$Page->listRows;
		return $this->query("select $tableName.* from $tableName  where $where order by $tableName.`jobtype_id` desc limit $limit ");
	}
	public function getPage(){
		return $this->page;
	}
}