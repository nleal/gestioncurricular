<?php

/**
 * This is the model class for table "resolucion".
 *
 * The followings are the available columns in table 'resolucion':
 * @property integer $id_resolucion
 * @property integer $id_acta
 * @property integer $id_punto
 * @property string $resolucion
 * @property integer $id_materia
 */
class Resolucion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'resolucion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_acta, id_punto, resolucion', 'required'),
			array('id_acta, id_punto, id_materia', 'numerical', 'integerOnly'=>true),
			array('resolucion', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_resolucion, id_acta, id_punto, resolucion, id_materia', 'safe', 'on'=>'search'),
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
			'id_resolucion' => 'Id Resolucion',
			'id_acta' => 'Id Acta',
			'id_punto' => 'Id Punto',
			'resolucion' => 'Resolucion',
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

		$criteria->compare('id_resolucion',$this->id_resolucion);
		$criteria->compare('id_acta',$this->id_acta);
		$criteria->compare('id_punto',$this->id_punto);
		$criteria->compare('resolucion',$this->resolucion,true);
		$criteria->compare('id_materia',$this->id_materia);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Resolucion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
