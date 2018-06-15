<?php
namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;
use app\models\NoticiasImg;

class UploadForm extends Model
{
    /**
     * @var UploadedFile[]
     */
    public $imageFiles;

    public function rules()
    {
        return [
            [['imageFiles'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg', 'maxFiles' => 10],
        ];
    }
    
    public function upload($nid)
    {
        if ($this->validate()) { 
            foreach ($this->imageFiles as $file) {
                $hash_name = Yii::$app->getSecurity()->generateRandomString();
                $file->saveAs(Yii::getAlias('@webroot').'/images/gallery/' . $hash_name . '.' . $file->extension);
                $img = new NoticiasImg();
                $img->noticia_id = $nid;
                $img->src = $hash_name.'.'.$file->extension;
                $img->save();
            }
            return true;
        } else {
            return false;
        }
    }
}
?>