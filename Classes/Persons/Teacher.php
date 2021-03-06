<?php namespace Com\Iesebre\Dam2\albertmayor\Persons;

/**
 * Created by PhpStorm.
 * User: albert
 * Date: 5/10/15
 * Time: 18:07
 */
class Teacher extends Person
{

    use Worker;

    /**
     * @var
     */
    public $specialization;

    /**
     * @return mixed
     */
    public function getSpecialization()
    {
        return $this->specialization;
    }

    /**
     * @param mixed $specialization
     */
    public function setSpecialization($specialization)
    {
        $this->specialization = $specialization;
    }

    public function render()
    {
        $this->type = "Professor";
        parent::render();
    }

}