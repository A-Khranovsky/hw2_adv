<?php
class Color
{
    private int $red;
    private int $green;
    private int $blue;

    private function setRed(int $redValue):void
    {
        if ($redValue < 0) {
            exit('Значение красного не должно быть меньше нуля');
        }
        if ($redValue > 255) {
           exit('Значение красного не должно быть больше 255');
        }
        $this->red = $redValue;
    }
    private function setGreen(int $greenValue):void
    {
        if ($greenValue < 0) {
            exit('Значение зеленого не должно быть меньше нуля');
        }
        if ($greenValue > 255) {
            exit('Значение зеленого не должно быть больше 255');
        }
        $this->green = $greenValue;
    }
    private function setBlue(int $blueValue):void
    {
        if ($blueValue < 0) {
            exit('Значение синего не должно быть меньше нуля');
        }
        if ($blueValue > 255) {
            exit('Значение синего не должно быть больше 255');
        }
        $this->blue = $blueValue;
    }

    public function getRed():int
    {
        return $this->red;
    }
    public function getGreen():int
    {
        return $this->green;
    }
    public function getBlue():int
    {
        return $this->blue;
    }

    public function __construct(int $_red, int $_green, int $_blue)
    {
        $this->setRed($_red);
        $this->setGreen($_green);
        $this->setBlue($_blue);
    }

    public function equals (Color $value) :bool {
        return (
            $this->red == $value->getRed()
            &&
            $this->green == $value->getGreen()
            &&
            $this->blue == $value->getBlue()
            );
    }

    public function mix(Color $valueColor): Color
    {
        $buffRed = $valueColor->getRed();
        $buffGreen = $valueColor->getGreen();
        $buffBlue = $valueColor->getBlue();

        $buffRed = intdiv($buffRed + $this->getRed(),2);
        $buffGreen = intdiv($buffGreen + $this->getGreen(),2);
        $buffBlue = intdiv($buffBlue + $this->getBlue(),2);

        return (new Color ($buffRed, $buffGreen, $buffBlue));
    }

}
$color = new Color(200, 200, 200);
$mixedColor = $color->mix(new Color(100, 100, 100));
$mixedColor->getRed(); // 150
$mixedColor->getGreen(); // 150
$mixedColor->getBlue(); // 150

if (!$color->equals($mixedColor)) {
    echo 'Цвета не равні';
}