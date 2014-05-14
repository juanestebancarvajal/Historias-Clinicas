<?php

/**
 * This is the model class for table "tbl_sintomas".
 *
 * The followings are the available columns in table 'tbl_sintomas':
 * @property integer $id
 * @property string $fecha_sintoma
 * @property string $inicio_sintoma
 * @property string $evolucion
 * @property string $examenes
 * @property string $resultados
 * @property string $diagnostico
 * @property string $id_paciente
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
			array('fecha_sintoma, inicio_sintoma, evolucion, examenes, resultados, diagnostico, id_paciente', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, fecha_sintoma, inicio_sintoma, evolucion, examenes, resultados, diagnostico, id_paciente', 'safe', 'on'=>'search'),
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
			'fecha_sintoma' => 'Fecha Sintoma',
			'inicio_sintoma' => 'Inicio Sintoma',
			'evolucion' => 'Evolucion',
			'examenes' => 'Examenes',
			'resultados' => 'Resultados',
			'diagnostico' => 'Diagnostico',
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
		$criteria->compare('fecha_sintoma',$this->fecha_sintoma,true);
		$criteria->compare('inicio_sintoma',$this->inicio_sintoma,true);
		$criteria->compare('evolucion',$this->evolucion,true);
		$criteria->compare('examenes',$this->examenes,true);
		$criteria->compare('resultados',$this->resultados,true);
		$criteria->compare('diagnostico',$this->diagnostico,true);
		$criteria->compare('id_paciente',$this->id_paciente,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}