<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "konsultasi".
 *
 * @property int $id_konsultasi
 * @property string $nama_penderita
 * @property string $jenis_kelamin
 * @property int $usia_penderita
 * @property string $alamat_penderita
 * @property string $kode_diagnosa
 * @property string $hasil_cf
 * @property string $tanggal
 * @property int $id_user
 *
 * @property HasilKonsultasi[] $hasilKonsultasis
 * @property Diagnosa $kodeDiagnosa
 * @property User $user
 */
class Konsultasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'konsultasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_penderita', 'jenis_kelamin', 'usia_penderita', 'alamat_penderita', 'kode_diagnosa', 'hasil_cf', 'tanggal', 'id_user'], 'required'],
            [['usia_penderita', 'id_user'], 'integer'],
            [['alamat_penderita'], 'string'],
            [['tanggal'], 'safe'],
            [['nama_penderita', 'hasil_cf'], 'string', 'max' => 255],
            [['jenis_kelamin', 'kode_diagnosa'], 'string', 'max' => 10],
            [['kode_diagnosa'], 'exist', 'skipOnError' => true, 'targetClass' => Diagnosa::className(), 'targetAttribute' => ['kode_diagnosa' => 'kode_diagnosa']],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_konsultasi' => 'Id Konsultasi',
            'nama_penderita' => 'Nama Penderita',
            'jenis_kelamin' => 'Jenis Kelamin',
            'usia_penderita' => 'Usia Penderita',
            'alamat_penderita' => 'Alamat Penderita',
            'kode_diagnosa' => 'Kode Diagnosa',
            'hasil_cf' => 'Hasil Cf',
            'tanggal' => 'Tanggal',
            'id_user' => 'Id User',
        ];
    }

    /**
     * Gets query for [[HasilKonsultasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHasilKonsultasis()
    {
        return $this->hasMany(HasilKonsultasi::className(), ['konsultasi_id' => 'id_konsultasi']);
    }

    /**
     * Gets query for [[KodeDiagnosa]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeDiagnosa()
    {
        return $this->hasOne(Diagnosa::className(), ['kode_diagnosa' => 'kode_diagnosa']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
}
