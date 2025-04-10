<?php

abstract class UIControl
{
    abstract public function draw();
}

class TextBox extends UIControl
{

    public function draw()
    {
        echo "Drawing a text box\n";
    }
}

class Checkbox extends UIControl
{

    public function draw()
    {
        echo "Drwing a check box\n";
    }
}


//// static typing
//function showControl(UIControl $control)
//{
//    $control->draw();
//}


// Duck typing
function showControl($control)
{
    $control->draw();
}

class Button
{

    public function draw()
    {
        echo "Drwing a button\n";
    }
}

// Polymorphic collection

$controls = [new TextBox(), new Checkbox(), new Button()];

foreach ($controls as $control)
    showControl($control);