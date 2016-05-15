<?php

/**
 * This is the model class for table "punto".
 *
 * The followings are the available columns in table 'punto':
 * @property integer $id_punto
 * @property string $descripcion
 * @property string $status
 * @property integer $id_usuario
 * @property integer $id_agenda
 * @property integer $id_materia
 */
class Punto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'punto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descripcion, status, id_usuario, id_agenda', 'required'),
			array('id_usuario, id_agenda, id_materia', 'numerical', 'integerOnly'=>true),
			array('descripcion', 'length', 'max'=>500),
			array('status', 'length', 'max'=>2),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_punto, descripcion, status, id_usuario, id_agenda, id_materia', 'safe', 'on'=>'search'),
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
			'id_punto' => 'Id Punto',
			'descripcion' => 'Descripcion',
			'status' => 'Status',
			'id_usuario' => 'Id Usuario',
			'id_agenda' => 'Id Agenda',
			'id_materia' => 'Id Materia',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_punto',$this->id_punto);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('id_usuario',$this->id_usuario);
		$criteria->compare('id_agenda',$this->id_agenda);
		$criteria->compare('id_materia',$this->id_materia);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Punto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
