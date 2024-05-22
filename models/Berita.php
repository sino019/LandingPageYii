<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "berita".
 *
 * @property int $ID
 * @property string $Judul
 * @property string $Konten
 * @property string $Penulis
 * @property string $Tanggal_Publikasi
 * @property string|null $Kategori
 * @property string|null $Ringkasan
 * @property string|null $Status
 */
class Berita extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'berita';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Judul', 'Konten', 'Penulis', 'Tanggal_Publikasi'], 'required'],
            [['Konten', 'Ringkasan', 'Status'], 'string'],
            [['Tanggal_Publikasi'], 'safe'],
            [['Judul'], 'string', 'max' => 255],
            [['Penulis'], 'string', 'max' => 100],
            [['Kategori'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Judul' => 'Judul',
            'Konten' => 'Konten',
            'Penulis' => 'Penulis',
            'Tanggal_Publikasi' => 'Tanggal Publikasi',
            'Kategori' => 'Kategori',
            'Ringkasan' => 'Ringkasan',
            'Status' => 'Status',
        ];
    }
}
