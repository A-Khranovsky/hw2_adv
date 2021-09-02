<?php
class Color {
    private int $red;
    private int $green;
    private int $blue;

    private function setRedValue(int $value){
        $this->red = $value;
    }
    private function setGreenValue(int $value){
        $this->green = $value;
    }
    private function setBlueValue(int $value){
        $this->blue = $value;
    }

    public function getRedValue(): int{
        return $this->red;
    }
    public function getGreenValue(): int{
        return $this->green;
    }
    public function getBlueValue(): int{
        return $this->blue;
    }

    public function __construct(int $_red, int $_green, int $_blue) {
        $this->setRedValue($_red);
        $this->setGreenValue($_green);
        $this->setBlueValue($_blue);
    }

    public function View(): string{
        return 'red= '.$this->getRedValue().' green = '.$this->getGreenValue().' blue = '.$this->getBlueValue();
    }

}

$color = new Color(200, 200, 200);
$color->View();

//$mixedColor = $color->mix(new Color(100, 100, 100));
//$mixedColor->getRed(); // 150
//$mixedColor->getGreen(); // 150
//$mixedColor->getBlue(); // 150
//
//if (!$color->equals($mixedColor)) {
//    echo 'Цвета не равні';
//}
