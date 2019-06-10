<?php


abstract class FormElement
{
    /**
     * @var string
     */

    private $name;

    /**
     * @var string
     */

    private $label;

    public function __construct(string $name, string $label)
    {
        $this->name=$name;
        $this->label=$label;

    }

    public function getName(): string
    {
        return $this->name;
    }


    public function getLabel(): string
    {
        return $this->label;
    }

  abstract  public function render(): string;


}