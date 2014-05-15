<?php

/**
 * This is the model class for table "tbl_sintomas".
 *
 * The followings are the available columns in table 'tbl_sintomas':
 * @property integer $id
 * @property string $sintomas
 * @property string $fecha_sintomas
 * @property string $evolucion
 * @property string $examenes
 * @property string $resultados
 * @property integer $id_paciente
 */
class Sintomas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Sintomas the static model class
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
		return 'tbl_sintomas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sintomas, fecha_sintomas', 'required'),
			array('id_paciente', 'numerical', 'integerOnly'=>true),
			array('sintomas', 'length', 'max'=>300),
			array('evolucion, resultados', 'length', 'max'=>100),
			array('examenes', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, sintomas, fecha_sintomas, evolucion, examenes, resultados, id_paciente', 'safe', 'on'=>'search'),
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
			'sintomas' => 'Sintomas',
			'fecha_sintomas' => 'Fecha Sintomas',
			'evolucion' => 'Evolucion',
			'examenes' => 'Examenes',
			'resultados' => 'Resultados',
			'id_paciente' => 'Id Paciente',
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
		$criteria->compare('sintomas',$this->sintomas,true);
		$criteria->compare('fecha_sintomas',$this->fecha_sintomas,true);
		$criteria->compare('evolucion',$this->evolucion,true);
		$criteria->compare('examenes',$this->examenes,true);
		$criteria->compare('resultados',$this->resultados,true);
		$criteria->compare('id_paciente',$this->id_paciente);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}