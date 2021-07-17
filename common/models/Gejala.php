<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "gejala".
 *
 * @property string $kode_gejala
 * @property string $nama_gejala
 *
 * @property HasilKonsultasi[] $hasilKonsultasis
 * @property Pakar[] $pakars
 */
class Gejala extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gejala';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_gejala', 'nama_gejala'], 'required'],
            [['kode_gejala'], 'string', 'max' => 10],
            [['nama_gejala'], 'string', 'max' => 255],
            [['kode_gejala'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_gejala' => 'Kode Gejala',
            'nama_gejala' => 'Nama Gejala',
        ];
    }

    /**
     * Gets query for [[HasilKonsultasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHasilKonsultasis()
    {
        return $this->hasMany(HasilKonsultasi::className(), ['hkode_gejala' => 'kode_gejala']);
    }

    /**
     * Gets query for [[Pakars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPakars()
    {
        return $this->hasMany(Pakar::className(), ['pkode_gejala' => 'kode_gejala']);
    }
}
