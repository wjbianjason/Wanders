<?php

/**
 * This is the model class for table "nb_sellers".
 *
 * The followings are the available columns in table 'nb_sellers':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $school
 * @property string $email
 * @property string $number
 * @property string $realname
 * @property string $gender
 * @property string $regtime
 * @property integer $level
 * @property integer $tradenum
 * @property integer $credit
 * @property integer $ability
 * @property integer $status
 */
class Sellers extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Sellers the static model class
	 */
	public $password2;
	public $verifyCode;
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
     
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'nb_sellers';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, password2, school, email, number, realname, verifyCode', 'required'),
			array('password2', 'compare', 'compareAttribute'=>'password'),
			array('level, tradenum, credit, ability, status', 'numerical', 'integerOnly'=>true),
			array('username', 'length', 'max'=>30),
			array('password, school, email, number, realname, gender', 'length', 'max'=>40),
			array('regtime', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, password, school, email, number, realname, gender, regtime, level, tradenum, credit, ability, status', 'safe', 'on'=>'search'),
		    array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => '用户名',
			'password' => '密码',
			'password2' => '确认密码',
			'school' => '学校',
			'email' => '电子邮箱',
			'number' => '学号',
			'realname' => '真是姓名',
			'gender' => '性别',
			'regtime' => 'Regtime',
			'level' => 'Level',
			'tradenum' => 'Tradenum',
			'credit' => 'Credit',
			'ability' => 'Ability',
			'status' => 'Status',
			'verifyCode' =>'验证码',
		);
	}



	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('school',$this->school,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('number',$this->number,true);
		$criteria->compare('realname',$this->realname,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('regtime',$this->regtime,true);
		$criteria->compare('level',$this->level);
		$criteria->compare('tradenum',$this->tradenum);
		$criteria->compare('credit',$this->credit);
		$criteria->compare('ability',$this->ability);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}