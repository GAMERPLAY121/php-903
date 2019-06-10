<?php


class Form
{

    /**
     * @var FormElement []
     */

    private $elements;

    public  function add(FormElement $element)
    {
        $this->elements[$element->getName()] = $element;
    }

    public  function  getElements()
    {
        return $this->elements;
    }

    public function render()
    {
        $html = '<form>';
        foreach ($this->elements as $element){
            $html .=$element->render() . '<br><br>';
    }

        $html .='</form>';

        return $html;

    }

}