<?php


class InputElement extends FormElement
{

    private $type ='text';

    public function render(): string
    {
        $html = sprintf('<label for="%s">%s</label>',$this->getName(), $this->getLabel());
        $html .= sprintf('<input type="%s" name="%s" id="%s">', $this->type,$this->getName(),$this->getName());

        return $html;
    }
}