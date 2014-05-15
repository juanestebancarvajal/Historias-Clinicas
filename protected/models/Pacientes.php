<?php

/**
 * This is the model class for table "tbl_pacientes".
 *
 * The followings are the available columns in table 'tbl_pacientes':
 * @property integer $id
 * @property string $nombre
 * @property string $apellido
 * @property string $lugar_nacimiento
 * @property string $fecha_nacimiento
 * @property string $genero
 * @property string $raza
 * @property string $nacionalidad
 * @property string $estado_civil
 * @property string $profesion
 * @property string $religion
 * @property integer $telefono
 * @property string $otros_lugares
 * @property string $escolaridad
 * @property string $seguridad_social
 * @property string $eps
 */
class Pacientes extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pacientes the static model class
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
		return 'tbl_pacientes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, apellido, lugar_nacimiento, fecha_nacimiento, genero, raza, nacionalidad, estado_civil, profesion, religion, telefono, otros_lugares, escolaridad, seguridad_social', 'required'),
			array('telefono', 'numerical', 'integerOnly'=>true),
			array('nombre, apellido, lugar_nacimiento, fecha_nacimiento, genero, raza, nacionalidad, estado_civil, profesion, religion, otros_lugares, escolaridad, eps', 'length', 'max'=>30),
			array('seguridad_social', 'length', 'max'=>2),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombre, apellido, lugar_nacimiento, fecha_nacimiento, genero, raza, nacionalidad, estado_civil, profesion, religion, telefono, otros_lugares, escolaridad, seguridad_social, eps', 'safe', 'on'=>'search'),
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
			'nombre' => 'Nombre',
			'apellido' => 'Apellido',
			'lugar_nacimiento' => 'Lugar Nacimiento',
			'fecha_nacimiento' => 'Fecha Nacimiento',
			'genero' => 'Genero',
			'raza' => 'Raza',
			'nacionalidad' => 'Nacionalidad',
			'estado_civil' => 'Estado Civil',
			'profesion' => 'Profesion',
			'religion' => 'Religion',
			'telefono' => 'Telefono',
			'otros_lugares' => 'Otros Lugares',
			'escolaridad' => 'Escolaridad',
			'seguridad_social' => 'Seguridad Social',
			'eps' => 'Eps',
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
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('lugar_nacimiento',$this->lugar_nacimiento,true);
		$criteria->compare('fecha_nacimiento',$this->fecha_nacimiento,true);
		$criteria->compare('genero',$this->genero,true);
		$criteria->compare('raza',$this->raza,true);
		$criteria->compare('nacionalidad',$this->nacionalidad,true);
		$criteria->compare('estado_civil',$this->estado_civil,true);
		$criteria->compare('profesion',$this->profesion,true);
		$criteria->compare('religion',$this->religion,true);
		$criteria->compare('telefono',$this->telefono);
		$criteria->compare('otros_lugares',$this->otros_lugares,true);
		$criteria->compare('escolaridad',$this->escolaridad,true);
		$criteria->compare('seguridad_social',$this->seguridad_social,true);
		$criteria->compare('eps',$this->eps,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}