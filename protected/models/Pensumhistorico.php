<?php

/**
 * This is the model class for table "pensumhistorico".
 *
 * The followings are the available columns in table 'pensumhistorico':
 * @property integer $id_pensum_hist
 * @property integer $id_departamento
 * @property integer $status
 * @property string $fecha
 * @property string $file
 */
class Pensumhistorico extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
		 
	public function tableName()
	{
		return 'pensumhistorico';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_departamento, status, fecha', 'required'),
			array('id_departamento, status', 'numerical', 'integerOnly'=>true),
			array('file', 'length', 'max'=>5000),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pensum_hist, id_departamento, status, fecha, file', 'safe', 'on'=>'search'),
			//Imagen
			array('file', 'required', 'on' => 'insert'),
			array('file', 'file','types'=>'pdf', 'allowEmpty'=>true, 'on'=>'update'),
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
			'id_pensum_hist' => 'Id Pensum Hist',
			'id_departamento' => 'Departamento',
			'status' => 'Estatus',
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

		$rr = Status::model()->find("nombre='".$this->status."'");
		$this->status = $rr['id_status'];
		$rr = Departamento::model()->find("nombre='".$this->id_departamento."'");
		$this->id_departamento = $rr['id_departamento'];

		$criteria=new CDbCriteria;

		$criteria->compare('id_pensum_hist',$this->id_pensum_hist);
		$criteria->compare('id_departamento',$this->id_departamento);
		$criteria->compare('status',$this->status);
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
	 * @return Pensumhistorico the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
}
