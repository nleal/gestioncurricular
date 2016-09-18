<?php

/**
 * This is the model class for table "acta".
 *
 * The followings are the available columns in table 'acta':
 * @property integer $id_acta
 * @property string $reunion
 * @property integer $id_agenda
 * @property string $lugar
 * @property string $hora
 * @property string $fecha
 * @property string $file
 */
class Acta extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'acta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('reunion, lugar, hora, fecha, file', 'required'),
			array('id_agenda', 'numerical', 'integerOnly'=>true),
			array('reunion, lugar', 'length', 'max'=>50),
			array('file', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_acta, reunion, id_agenda, lugar, hora, fecha, file', 'safe', 'on'=>'search'),
			array('file', 'file', 'types' => 'pdf', 'minSize'=>100, 'maxSize'=>1000000 , 'allowEmpty'=>false),
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
			'id_acta' => 'Id Acta',
			'reunion' => 'Reunion',
			'id_agenda' => 'Id Agenda',
			'lugar' => 'Lugar',
			'hora' => 'Hora',
			'fecha' => 'Fecha',
			'file' => 'Documento',
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

		$criteria->compare('id_acta',$this->id_acta);
		$criteria->compare('reunion',$this->reunion,true);
		$criteria->compare('id_agenda',$this->id_agenda);
		$criteria->compare('lugar',$this->lugar,true);
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('file',$this->file,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Acta the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
