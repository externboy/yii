<?php

namespace common\models;

use TS\TActiveRecord;
use components\base\BaseActiveRecord;
/**
 * This is the model class for table "yii_tpl_conver_category".
 *
 * @property integer $id
 * @property string $name
 * @property string $note
 */
class TplChannelCategory extends BaseActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'yii_tpl_channel_category';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['name'], 'required'],
			[['name', 'note'], 'string', 'max' => 80]
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'name' => 'Name',
			'note' => 'Note',
		];
	}
}
