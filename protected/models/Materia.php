<?php

/**
 * This is the model class for table "materia".
 *
 * The followings are the available columns in table 'materia':
 * @property string $nombre_mat
 * @property string $descripcion
 * @property string $status
 * @property integer $id_departamento
 * @property integer $id_materia
 * @property string $cod_materia
 * @property integer $anio_final
 * @property string $cod_materia_padre
 */
class Materia extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'materia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_mat, descripcion, status, id_departamento, cod_materia', 'required'),
			array('id_departamento, anio_final', 'numerical', 'integerOnly'=>true),
			array('nombre_mat, descripcion', 'length', 'max'=>50),
			array('status', 'length', 'max'=>2),
			array('cod_materia, cod_materia_padre', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('nombre_mat, descripcion, status, id_departamento, id_materia, cod_materia, anio_final, cod_materia_padre', 'safe', 'on'=>'search'),
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
			'nombre_mat' => 'Asignatura',
			'descripcion' => 'Descripción',
			'status' => 'Estatus',
			'id_departamento' => 'Departamento',
			'id_materia' => 'Asignatura',
			'cod_materia' => 'Código Asignatura',
			'anio_final' => 'Año Final',
			'cod_materia_padre' => 'Código de asignatura padre',
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

		$criteria->compare('nombre_mat',$this->nombre_mat,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('id_departamento',$this->id_departamento);
		$criteria->compare('id_materia',$this->id_materia);
		$criteria->compare('cod_materia',$this->cod_materia,true);
		$criteria->compare('anio_final',$this->anio_final);
		$criteria->compare('cod_materia_padre',$this->cod_materia_padre,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Materia the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
