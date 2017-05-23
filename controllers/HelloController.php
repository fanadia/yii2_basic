<?php 
namespace app\controllers;
class HelloController extends \yii\web\Controller{
	public function actionIndex(){
		$weigth=50;
		return $this->render('index',[
			'firstname'=>'เดีย',
			'lastname'=>'เอง',
			'weigth'=> $weigth
			]
			);
	}

	public function actionProfile(){
		return $this->render('profile');
	}
}


 ?>