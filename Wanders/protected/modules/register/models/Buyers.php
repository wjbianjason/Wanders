<?php

/**
 * This is the model class for table "nb_buyers".
 *
 * The followings are the available columns in table 'nb_buyers':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property integer $gender
 * @property string $address
 * @property string $regtime
 * @property integer $levels
 * @property integer $tradenum
 * @property integer $credit
 * @property integer $status
 */
class Buyers extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Buyers the static model class
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
		return 'nb_buyers';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, password2, email, address, verifyCode', 'required'),
			array('password2', 'compare', 'compareAttribute'=>'password'),
			array('email', 'email'),
			array('gender, levels, tradenum, credit, status', 'numerical', 'integerOnly'=>true),
			array('username, password, email, address', 'length', 'max'=>40),
			array('regtime', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, password, email, gender, address, regtime, levels, tradenum, credit, status', 'safe', 'on'=>'search'),
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
			'email' => '电子邮箱',
			'gender' => '性别',
			'address' => '地址',
			'regtime' => 'Regtime',
			'levels' => 'Levels',
			'tradenum' => 'Tradenum',
			'credit' => 'Credit',
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
		$criteria->compare('email',$this->email,true);
		$criteria->compare('gender',$this->gender);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('regtime',$this->regtime,true);
		$criteria->compare('levels',$this->levels);
		$criteria->compare('tradenum',$this->tradenum);
		$criteria->compare('credit',$this->credit);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}