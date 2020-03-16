<?php

namespace frontend\models;

use Yii;
use common\models\UserProfileDb;

class UserProfile extends UserProfileDb{
	public $day;
	public $month;
	public $year;

	public function rules(){
		return [
			[['first_name','last_name','iden','phone','gender','birth_date','story','day', 'month', 'year'], 'string'],
			['day', 'datecheck']
		];
	}

	public function datecheck($attribute, $params){
		if ($this->year%4 == 0) {
			if ($this->month == 2) {
				if ($this->day > 29) {
					$this->addError($attribute, 'Bạn đã nhập một ngày không hợp lệ');
				}
			}else{
				if ($this->month == 4 || $this->month == 6 || $this->month ==  9 || $this->month == 11) {
					if ($this->day > 30) {
						$this->addError($attribute, 'Bạn đã nhập một ngày không hợp lệ');
					}
				}
			}
		}else{
			if ($this->month == 2) {
				if ($this->day > 28) {
					$this->addError($attribute, 'Bạn đã nhập một ngày không hợp lệ');
				}
			}else{
				if ($this->month == 4 || $this->month == 6 || $this->month ==  9 || $this->month == 11) {
					if ($this->day > 30) {
						$this->addError($attribute, 'Bạn đã nhập một ngày không hợp lệ');
					}
				}
			}
		}
	}
}
?>