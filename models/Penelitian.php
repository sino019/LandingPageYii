<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penelitian".
 *
 * @property int $id_penelitian
 * @property string $judul_penelitian
 * @property string $peneliti_utama
 * @property string $tanggal_mulai
 * @property string|null $tanggal_selesai
 * @property string $status
 */
class Penelitian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penelitian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul_penelitian', 'peneliti_utama', 'tanggal_mulai'], 'required'],
            [['tanggal_mulai', 'tanggal_selesai'], 'safe'],
            [['status'], 'string'],
            [['judul_penelitian'], 'string', 'max' => 255],
            [['peneliti_utama'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_penelitian' => 'Id Penelitian',
            'judul_penelitian' => 'Judul Penelitian',
            'peneliti_utama' => 'Peneliti Utama',
            'tanggal_mulai' => 'Tanggal Mulai',
            'tanggal_selesai' => 'Tanggal Selesai',
            'status' => 'Status',
        ];
    }
}
