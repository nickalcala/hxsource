<?php

/**
 * This is the model class for table "doctors".
 *
 * The followings are the available columns in table 'doctors':
 * @property string $id
 * @property string $fname
 * @property string $lname
 * @property string $mname
 * @property string $license_no
 * @property string $ptr_no
 * @property string $s2_no
 * @property string $type
 * @property string $schedule
 * @property string $other_info
 * @property string $contact_no
 * @property string $years_practise
 * @property string $certifications
 * @property string $expertise
 * @property string $create_dte
 * @property string $create_id
 * @property string $modify_dte
 * @property string $modify_id
 */
class Doctors extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'doctors';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, type, license_no, ptr_no, s2_no', 'length', 'max'=>11),
			array('fname, lname, mname, certifications', 'length', 'max'=>50),
			array('schedule, other_info, contact_no', 'length', 'max'=>255),
			array('years_practise', 'length', 'max'=>25),
			array('lat, long, address, suffix', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fname, lname, mname, license_no, ptr_no, s2_no, type, lat, long, address, schedule, other_info, contact_no, years_practise, certifications', 'safe', 'on'=>'search'),
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
            'doctorType' => array(self::BELONGS_TO, 'DoctorTypes', 'type'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fname' => 'Firstname',
			'lname' => 'Lastname',
			'mname' => 'Middlename',
			'suffix' => 'Suffix',
            'address' => 'Clinic Address',
            'lat' => 'Clinic Latitude',
            'long' => 'Clinic Longitude',
			'license_no' => 'License No',
			'ptr_no' => 'Professional Tax Registration #',
			's2_no' => 'Official Yellow Prescription # (S2)',
			'type' => 'Specialty',
			'schedule' => 'Schedule',
			'other_info' => 'Other Schedule Information',
			'contact_no' => 'Contact No',
			'years_practise' => 'Years of Practice',
			'certifications' => 'Certifications',
			'expertise' => 'Expertise',
			'create_dte' => 'Create Dte',
			'create_id' => 'Create',
			'modify_dte' => 'Modify Dte',
			'modify_id' => 'Modify',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('fname',$this->fname,true);
		$criteria->compare('lname',$this->lname,true);
		$criteria->compare('mname',$this->mname,true);
		$criteria->compare('license_no',$this->license_no,true);
		$criteria->compare('ptr_no',$this->ptr_no,true);
		$criteria->compare('s2_no',$this->s2_no,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('schedule',$this->schedule,true);
		$criteria->compare('other_info',$this->other_info,true);
		$criteria->compare('contact_no',$this->contact_no,true);
		$criteria->compare('years_practise',$this->years_practise,true);
		$criteria->compare('certifications',$this->certifications,true);
		$criteria->compare('expertise',$this->expertise,true);
		$criteria->compare('create_dte',$this->create_dte,true);
		$criteria->compare('create_id',$this->create_id,true);
		$criteria->compare('modify_dte',$this->modify_dte,true);
		$criteria->compare('modify_id',$this->modify_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Doctors the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public function getFullname() {
        return trim(ucwords($this['fname']) . ' ' . ucwords($this['lname']) . ' ' . strtoupper($this['suffix']));
    }

    public function getDoctorTypes() {
        $doctorTypes = DoctorTypes::model()->findAll();
        return CHtml::listData($doctorTypes, 'id', 'name');
    }
}
