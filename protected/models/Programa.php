<?php

/**
 * This is the model class for table "programa".
 *
 * The followings are the available columns in table 'programa':
 * @property integer $id_programa
 * @property integer $status
 * @property string $fecha
 * @property string $file
 * @property integer $id_materia
 */
class Programa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'programa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('status, fecha, file, id_materia', 'required'),
			array('status, id_materia', 'numerical', 'integerOnly'=>true),
			array('file', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_programa, status, fecha, file, id_materia', 'safe', 'on'=>'search'),
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
			'id_programa' => 'Id Programa',
			'status' => 'Estatus',
			'fecha' => 'Fecha',
			'file' => 'Documento',
			'id_materia' => 'Asignatura',
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

		$criteria->compare('id_programa',$this->id_programa);
		$criteria->compare('status',$this->status);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('file',$this->file,true);
		$criteria->compare('id_materia',$this->id_materia);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Programa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
