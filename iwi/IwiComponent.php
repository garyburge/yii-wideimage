<?php


// GLB: change to vendor directory alias
Yii::import('wideimage.Iwi');

// GLB: change to vendor directory alias
Yii::import('wideimage.vendors.image.CImageComponent');

/**
 * Description of CImageComponent
 *
 * @author Administrator
 */
class IwiComponent extends CImageComponent
{
    public function load($image)
    {
        $config = array(
            'driver' => $this->driver,
            'params' => $this->params,
        );

        return new Iwi($image, $config);
    }
}

?>
