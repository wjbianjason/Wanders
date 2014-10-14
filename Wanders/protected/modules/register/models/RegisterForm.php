<?php

/**
 * RegisterForm class.
 * RegisterForm is the data structure for keeping
 */

class RegisterForm extends CFormModel
{
	public $username;
	public $password;
	public $password2;
	public $email;
	public $school;
	public $number;
	public $realname;
	public $verifyCode;


	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			// name, email, subject and body are required
			array('username, password, password2, email, school, number, realname', 'required'),
			// name,password and password are stricted to String and 255 
			array('username', 'password', 'password2', 'string'),
			// password and password2 must be equal
			array('password2', 'compare','compareAttribute' => 'password'),
			// email has to be a valid email address
			array('email', 'email'),
			// verifyCode needs to be entered correctly
			array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
		);
	}

	public function attributeLabels()
	{
		return array(
			'username'=>'用户名',
			'password'=>'密码',
			'password2'=>'确认密码',
			'email'=>'电子邮箱',
			'school'=>'所在学校',
			'number'=>'学号',
			'realname'=>'真实姓名',
			'verifyCode'=>'验证码',
		);
	}
}