<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "hasil_konsultasi".
 *
 * @property int $id_hasil_konsultasi
 * @property int $konsultasi_id
 * @property string $hkode_gejala
 * @property int $jawaban
 * @property float $cf_user
 *
 * @property Gejala $hkodeGejala
 * @property Konsultasi $konsultasi
 */
class HasilKonsultasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hasil_konsultasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['konsultasi_id', 'hkode_gejala', 'jawaban', 'cf_user'], 'required'],
            [['konsultasi_id', 'jawaban'], 'integer'],
            [['cf_user'], 'number'],
            [['hkode_gejala'], 'string', 'max' => 10],
            [['konsultasi_id'], 'exist', 'skipOnError' => true, 'targetClass' => Konsultasi::className(), 'targetAttribute' => ['konsultasi_id' => 'id_konsultasi']],
            [['hkode_gejala'], 'exist', 'skipOnError' => true, 'targetClass' => Gejala::className(), 'targetAttribute' => ['hkode_gejala' => 'kode_gejala']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_hasil_konsultasi' => 'Id Hasil Konsultasi',
            'konsultasi_id' => 'Konsultasi ID',
            'hkode_gejala' => 'Hkode Gejala',
            'jawaban' => 'Jawaban',
            'cf_user' => 'Cf User',
        ];
    }

    /**
     * Gets query for [[HkodeGejala]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHkodeGejala()
    {
        return $this->hasOne(Gejala::className(), ['kode_gejala' => 'hkode_gejala']);
    }

    /**
     * Gets query for [[Konsultasi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKonsultasi()
    {
        return $this->hasOne(Konsultasi::className(), ['id_konsultasi' => 'konsultasi_id']);
    }
}
