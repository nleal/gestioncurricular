<?php

/**
 * This is the model class for table "agenda".
 *
 * The followings are the available columns in table 'agenda':
 * @property integer $id_agenda
 * @property string $num_agenda
 * @property string $lugar
 * @property string $fecha
 * @property string $hora
 * @property string $fecha_creacion
 * @property string $fecha_cierre
 * @property string $status
 * @property string $temario
 * @property integer $id_usuario
 * @property integer $id_acta
 * @property string $file
 */
class Agenda extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'agenda';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('lugar, fecha, fecha_cierre, status, id_usuario', 'required'),
			array('id_usuario, id_acta', 'numerical', 'integerOnly'=>true),
			array('lugar', 'length', 'max'=>50),
			array('status', 'length', 'max'=>2),
			array('temario', 'length', 'max'=>200),
			array('num_agenda', 'length', 'max'=>15),
			array('file', 'length', 'max'=>255),
			array('hora, fecha_creacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_agenda, num_agenda, lugar, fecha, hora, fecha_creacion, fecha_cierre, status, temario, id_usuario, id_acta, file', 'safe', 'on'=>'search'),
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
			'id_agenda' => 'id Agenda',
			'num_agenda' => 'Numero Agenda',
			'lugar' => 'Lugar',
			'fecha' => 'Fecha',
			'hora' => 'Hora',
			'fecha_creacion' => 'Fecha Creacion',
			'fecha_cierre' => 'Fecha Cierre',
			'status' => 'Estatus',
			'temario' => 'Temario',
			'id_usuario' => 'Id Usuario',
			'id_acta' => 'Id Acta',
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

		$criteria->compare('id_agenda',$this->id_agenda);
		$criteria->compare('num_agenda',$this->num_agenda,true);
		$criteria->compare('lugar',$this->lugar,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('fecha_cierre',$this->fecha_cierre,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('temario',$this->temario,true);
		$criteria->compare('id_usuario',$this->id_usuario);
		$criteria->compare('id_acta',$this->id_acta);
		$criteria->compare('file',$this->file,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Agenda the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
