<?php

/**
 * This is the model class for table "tbl_paciente".
 *
 * The followings are the available columns in table 'tbl_paciente':
 * @property integer $id
 * @property string $fecha_ingreso
 * @property string $nombre
 * @property string $apellido
 * @property string $lugar_nacimiento
 * @property string $edad
 * @property string $genero
 * @property string $raza
 * @property string $nacionalidad
 */
class Paciente extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Paciente the static model class
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
		return 'tbl_paciente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, apellido, lugar_nacimiento, edad, genero, raza, nacionalidad', 'length', 'max'=>45),
			array('fecha_ingreso', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, fecha_ingreso, nombre, apellido, lugar_nacimiento, edad, genero, raza, nacionalidad', 'safe', 'on'=>'search'),
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
			'fecha_ingreso' => 'Fecha Ingreso',
			'nombre' => 'Nombre',
			'apellido' => 'Apellido',
			'lugar_nacimiento' => 'Lugar Nacimiento',
			'edad' => 'Edad',
			'genero' => 'Genero',
			'raza' => 'Raza',
			'nacionalidad' => 'Nacionalidad',
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
		$criteria->compare('fecha_ingreso',$this->fecha_ingreso,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('lugar_nacimiento',$this->lugar_nacimiento,true);
		$criteria->compare('edad',$this->edad,true);
		$criteria->compare('genero',$this->genero,true);
		$criteria->compare('raza',$this->raza,true);
		$criteria->compare('nacionalidad',$this->nacionalidad,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}