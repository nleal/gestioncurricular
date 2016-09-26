<?php

/**
 * This is the model class for table "mat_dep_nivel".
 *
 * The followings are the available columns in table 'mat_dep_nivel':
 * @property integer $id_materia
 * @property integer $id_departamento
 * @property integer $nivel
 * @property integer $id_mat_dep_nivel
 */
class MatDepNivel extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mat_dep_nivel';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_materia, id_departamento, nivel', 'required'),
			array('id_materia, id_departamento, nivel', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_materia, id_departamento, nivel, id_mat_dep_nivel', 'safe', 'on'=>'search'),
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
			'id_materia' => 'Id Materia',
			'id_departamento' => 'Id Departamento',
			'nivel' => 'Nivel',
			'id_mat_dep_nivel' => 'Id Mat Dep Nivel',
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

		$criteria->compare('id_materia',$this->id_materia);
		$criteria->compare('id_departamento',$this->id_departamento);
		$criteria->compare('nivel',$this->nivel);
		$criteria->compare('id_mat_dep_nivel',$this->id_mat_dep_nivel);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MatDepNivel the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
