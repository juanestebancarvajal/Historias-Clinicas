<?php

/**
 * This is the model class for table "tbl_consulta".
 *
 * The followings are the available columns in table 'tbl_consulta':
 * @property integer $id
 * @property integer $id_paciente
 * @property string $consulta
 *
 * The followings are the available model relations:
 * @property TblPacientes $tblPacientes
 */
class TblConsulta extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TblConsulta the static model class
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
		return 'tbl_consulta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('consulta', 'required'),
			array('id_paciente', 'numerical', 'integerOnly'=>true),
			array('consulta', 'length', 'max'=>300),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_paciente, consulta', 'safe', 'on'=>'search'),
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
			'tblPacientes' => array(self::HAS_ONE, 'TblPacientes', 'id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_paciente' => 'Id Paciente',
			'consulta' => 'Consulta',
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
		$criteria->compare('id_paciente',$this->id_paciente);
		$criteria->compare('consulta',$this->consulta,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}