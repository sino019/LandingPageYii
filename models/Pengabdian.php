<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pengabdian".
 *
 * @property int $id
 * @property string|null $judul
 * @property string|null $deskripsi
 * @property string|null $tanggal_mulai
 * @property string|null $tanggal_selesai
 * @property string|null $koordinator
 * @property float|null $anggaran
 * @property string|null $status
 */
class Pengabdian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengabdian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['deskripsi', 'status'], 'string'],
            [['tanggal_mulai', 'tanggal_selesai'], 'safe'],
            [['anggaran'], 'number'],
            [['judul'], 'string', 'max' => 255],
            [['koordinator'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'judul' => 'Judul',
            'deskripsi' => 'Deskripsi',
            'tanggal_mulai' => 'Tanggal Mulai',
            'tanggal_selesai' => 'Tanggal Selesai',
            'koordinator' => 'Koordinator',
            'anggaran' => 'Anggaran',
            'status' => 'Status',
        ];
    }
}
