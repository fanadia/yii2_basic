<?php 
namespace app\controllers;
class HelloController extends \yii\web\Controller{
	public function actionIndex(){
		return $this->render('index',[
			'firstname'=>'เดีย',
			'lastname'=>'เอง'
			]
			);
	}

	public function actionProfile(){
		return $this->render('profile');
	}
}


 ?>