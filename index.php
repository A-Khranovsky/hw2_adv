<?php

class Color
{
    private int $red;
    private int $green;
    private int $blue;

    private $errorBag = [
    'red' => [],
    'green' => [],
    'blue' => []
    ];
    private function setRedValue(int $redValue):void
    {
        if ($redValue < 0) {
            $this->errorBag['red'] [] = 'Значение красного не должно быть меньше нуля';
        }
        if ($redValue > 255) {
            $this->errorBag['red'] [] = 'Значение красного не должно быть больше 255';
        }
        $this->red = $redValue;
    }
    private function setGreenValue(int $greenValue):void
    {
        if ($greenValue < 0) {
            $this->errorBag['red'] [] = 'Значение зеленого не должно быть меньше нуля';
        }
        if ($greenValue > 255) {
            $this->errorBag['red'] [] = 'Значение зеленого не должно быть больше 255';
        }
        $this->green = $greenValue;
    }
    private function setBlueValue(int $blueValue):void
    {
        if ($blueValue < 0) {
            $this->errorBag['red'] [] = 'Значение синего не должно быть меньше нуля';
        }
        if ($blueValue > 255) {
            $this->errorBag['red'] [] = 'Значение синего не должно быть больше 255';
        }
        $this->blue = $blueValue;
    }

    public function getRedValue():int
    {
        return $this->red;
    }
    public function getGreenValue():int
    {
        return $this->green;
    }
    public function getBlueValue():int
    {
        return $this->blue;
    }

    public function __construct(int $_red, int $_green, int $_blue)
    {
        $this->setRedValue($_red);
        $this->setGreenValue($_green);
        $this->setBlueValue($_blue);
        $this ->checkErrors();
    }
    private function checkErrors():void
    {
        $errorsCounter = count(
            $this->errorBag['red'] +
            $this->errorBag['green'] +
            $this->errorBag['blue']
        );
        if ($errorsCounter > 0) {
            foreach ($this->errorBag as $item){
                foreach ($item as $item_item )
                echo $item_item.'<br>';
            }
            exit();
        }
    }

    public function View(){
        return 'red= '.$this->getRedValue().' green = '.$this->getGreenValue().' blue = '.$this->getBlueValue();
    }

    public function equals (Color $value) :bool {
        return (
            $this->red == $value->getRedValue()
            &&
            $this->green == $value->getGreenValue()
            &&
            $this->blue == $value->getBlueValue()
            );
    }

    public function mix(Color $valueColor): Color
    {
        $buffRed = $valueColor->getRedValue();
        $buffGreen = $valueColor->getGreenValue();
        $buffBlue = $valueColor->getBlueValue();

        $buffRed = ($buffRed + $this->getRedValue()) / 2;
        $buffGreen = ($buffGreen + $this->getGreenValue()) / 2;
        $buffBlue = ($buffBlue + $this->getBlueValue()) / 2;

        return (new Color ($buffRed, $buffGreen, $buffBlue));
    }

}

$color = new Color(200, 200, 200);
$color1 = new Color(100, 100, 100);
echo $color->View();
echo '<br>';
//echo $color->equals($color1);

$mixedColor = $color->mix(new Color(100, 100, 100));
echo $mixedColor->View();

//$mixedColor->getRed(); // 150
//$mixedColor->getGreen(); // 150
//$mixedColor->getBlue(); // 150
//
//if (!$color->equals($mixedColor)) {
//    echo 'Цвета не равні';
//}
?>