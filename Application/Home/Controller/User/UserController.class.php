<?php
namespace Home\Controller\User;
use Think\Controller;

class UserController extends Controller{
	public function index(){
		echo 'query user list array!<br>';
		$UserModel = D('User');
		$list = $UserModel->select();
		
		$this->assign('list', $list);
		
		$this->display(T('Home@User/index'));
	}
	
	public function add(){
		echo 'this is add!';
		$data['id'] = 5;
		$data['user'] = 'xxx';
		$data['passwd'] = 'xxxxx';
		$UserModel = M('user');
		$UserModel->add($data);
	}
	
	public function update(){
		$data['user'] = 'update';
		$data['passwd'] = 'update';
		$User = M('user');
		$User->where('id=4')->save($data);
	}
	
	public function delete() {
		$User = M('user');
		$User->where('id=5')->delete();
	}
}