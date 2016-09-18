<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property string $nombre
 * @property string $apellido
 * @property string $password
 * @property string $cargo
 * @property integer $id_usuario
 * @property integer $id_departamento
 * @property string $usuario
 * @property string $email
 */
class Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, apellido, password, cargo, id_departamento, usuario', 'required'),
			array('id_departamento', 'numerical', 'integerOnly'=>true),
			array('nombre, apellido, password, cargo', 'length', 'max'=>50),
			array('usuario', 'length', 'max'=>30),
			array('email', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('nombre, apellido, password, cargo, id_usuario, id_departamento, usuario, email', 'safe', 'on'=>'search'),
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
			'nombre' => 'Nombre',
			'apellido' => 'Apellido',
			'password' => 'Password',
			'cargo' => 'Cargo',
			'id_usuario' => ' Usuario',
			'id_departamento' => 'Departamento',
			'usuario' => 'Usuario',
			'email' => 'Email',
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

		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('cargo',$this->cargo,true);
		$criteria->compare('id_usuario',$this->id_usuario);
		$criteria->compare('id_departamento',$this->id_departamento);
		$criteria->compare('usuario',$this->usuario,true);
		$criteria->compare('email',$this->email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
