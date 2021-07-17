<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pakar".
 *
 * @property int $id_pakar
 * @property string $pkode_diagnosa
 * @property string $pkode_gejala
 * @property float $evidence
 *
 * @property Diagnosa $pkodeDiagnosa
 * @property Gejala $pkodeGejala
 */
class Pakar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pakar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pkode_diagnosa', 'pkode_gejala', 'evidence'], 'required'],
            [['evidence'], 'number'],
            [['pkode_diagnosa', 'pkode_gejala'], 'string', 'max' => 10],
            [['pkode_gejala'], 'exist', 'skipOnError' => true, 'targetClass' => Gejala::className(), 'targetAttribute' => ['pkode_gejala' => 'kode_gejala']],
            [['pkode_diagnosa'], 'exist', 'skipOnError' => true, 'targetClass' => Diagnosa::className(), 'targetAttribute' => ['pkode_diagnosa' => 'kode_diagnosa']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pakar' => 'Id Pakar',
            'pkode_diagnosa' => 'Diagnosa',
            'pkode_gejala' => 'Gejala',
            'evidence' => 'Evidence',
        ];
    }

    /**
     * Gets query for [[PkodeDiagnosa]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPkodeDiagnosa()
    {
        return $this->hasOne(Diagnosa::className(), ['kode_diagnosa' => 'pkode_diagnosa']);
    }

    /**
     * Gets query for [[PkodeGejala]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPkodeGejala()
    {
        return $this->hasOne(Gejala::className(), ['kode_gejala' => 'pkode_gejala']);
    }
}
