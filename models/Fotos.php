<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fotos".
 *
 * @property int $id
 * @property string|null $nombre
 * @property resource|null $contenido
 * @property string|null $alternativo
 */
class Fotos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fotos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['contenido'], 'string'],
            [['nombre', 'alternativo'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'contenido' => 'Contenido',
            'alternativo' => 'Alternativo',
        ];
    }
}
