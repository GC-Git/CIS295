<?php
/**
 * Created by PhpStorm.
 * User: Gordon
 * Date: 4/16/2018
 * Time: 12:49 PM
 */

$potato = new Product("Potato", "Exactly what you think", .50, "vegetable");

print '<pre>';
print_r($potato);
print '</pre>';



class Product {

    // Properties
    private $name;
    private $description;
    private $cost;
    private $category;

    // Constructor
    public function __construct($name, $description, $cost, $category)
    {
        // You can validate by using setters to assign as so:
        // $this->setName($name);
        $this->$name = $name;
        $this->$description = $description;
        $this->$cost = $cost;
        $this->$category = $category;
    }

    // Getters
    public function getCategory()
    {
        return $this->category;
    }

    public function getCost()
    {
        return $this->cost;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getName()
    {
        return $this->name;
    }

    // Setters
    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function setCost($cost)
    {
        $this->cost = $cost;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}

?>