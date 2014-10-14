<?php

/**
 * This is the model class for table "{{projects}}".
 *
 * The followings are the available columns in table '{{projects}}':
 * @property integer $id
 * @property string $title
 * @property integer $bid
 * @property string $busername
 * @property integer $sid
 * @property string $susername
 * @property integer $kind
 * @property string $body
 * @property string $reltime
 * @property integer $money
 * @property string $starttime
 * @property string $deadline
 * @property integer $weight
 * @property integer $vistors
 * @property integer $bidders
 * @property integer $status
 * @property integer $levels
 */
class Projects extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Projects the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{projects}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, bid, busername, sid, susername, kind, body, money, starttime, deadline', 'required'),
			array('bid, sid, kind, money, weight, vistors, bidders, status, levels', 'numerical', 'integerOnly'=>true),
			array('title, busername, susername', 'length', 'max'=>40),
			array('reltime', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, bid, busername, sid, susername, kind, body, reltime, money, starttime, deadline, weight, vistors, bidders, status, levels', 'safe', 'on'=>'search'),
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
			'title' => 'Title',
			'bid' => 'Bid',
			'busername' => 'Busername',
			'sid' => 'Sid',
			'susername' => 'Susername',
			'kind' => 'Kind',
			'body' => 'Body',
			'reltime' => 'Reltime',
			'money' => 'Money',
			'starttime' => 'Starttime',
			'deadline' => 'Deadline',
			'weight' => 'Weight',
			'vistors' => 'Vistors',
			'bidders' => 'Bidders',
			'status' => 'Status',
			'levels' => 'Levels',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('bid',$this->bid);
		$criteria->compare('busername',$this->busername,true);
		$criteria->compare('sid',$this->sid);
		$criteria->compare('susername',$this->susername,true);
		$criteria->compare('kind',$this->kind);
		$criteria->compare('body',$this->body,true);
		$criteria->compare('reltime',$this->reltime,true);
		$criteria->compare('money',$this->money);
		$criteria->compare('starttime',$this->starttime,true);
		$criteria->compare('deadline',$this->deadline,true);
		$criteria->compare('weight',$this->weight);
		$criteria->compare('vistors',$this->vistors);
		$criteria->compare('bidders',$this->bidders);
		$criteria->compare('status',$this->status);
		$criteria->compare('levels',$this->levels);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}