<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "agenda_lppm".
 *
 * @property int $id
 * @property string|null $tanggal
 * @property string|null $waktu
 * @property string|null $kegiatan
 * @property string|null $pic
 * @property string|null $lokasi
 * @property string|null $catatan
 */
class AgendaLppm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'agenda_lppm';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'waktu'], 'safe'],
            [['catatan'], 'string'],
            [['kegiatan', 'lokasi'], 'string', 'max' => 255],
            [['pic'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tanggal' => 'Tanggal',
            'waktu' => 'Waktu',
            'kegiatan' => 'Kegiatan',
            'pic' => 'Pic',
            'lokasi' => 'Lokasi',
            'catatan' => 'Catatan',
        ];
    }
}
