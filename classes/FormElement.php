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

    /**
     * @var string
     */

    protected $value;

    protected $required = false;

    protected $error='';

    public function __construct(string $name, string $label, bool $required = false)
    {
        $this->name=$name;
        $this->label=$label;
        $this->required=$required;

    }

    public function getName(): string
    {
        return $this->name;
    }


    public function getLabel(): string
    {
        return $this->label;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): void
    {
        $this->value = $value;

        if (empty($value) && $this->required){
            $this->error = 'Поле не должно быть пустым!';
        }
    }

    public function getError(): string
    {
        return $this->error;
    }

  abstract  public function render(): string;

}


