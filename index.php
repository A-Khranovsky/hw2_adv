<?php
class MyColor
{
    private $red;
    private $green;
    private $blue;

    private function setRedValue(int $redValue):void
    {
        $this->red = $redValue;
    }
    private function setGreenValue(int $greenValue):void
    {
        $this->green = $greenValue;
    }
    private function setBlueValue(int $blueValue):void
    {
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
    }

    public function View(){
        return 'red= '.$this->getRedValue().' green = '.$this->getGreenValue().' blue = '.$this->getBlueValue();
    }

}

$color = new MyColor(200, 200, 200);
echo $color->View();

//$mixedColor = $color->mix(new Color(100, 100, 100));
//$mixedColor->getRed(); // 150
//$mixedColor->getGreen(); // 150
//$mixedColor->getBlue(); // 150
//
//if (!$color->equals($mixedColor)) {
//    echo 'Цвета не равні';
//}
?>