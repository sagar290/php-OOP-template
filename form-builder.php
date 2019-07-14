<?php 

class Sodium 
{
    static function addForm($id): Sodium {}
    function addColumn($columnSize): Sodium {}
    function addFields(FieldInterface ...$fields): Sodium {}
}

class FieldFactory {

    static function createTextField(): FieldInterface {}
    static function createRadioField(): FieldInterface {}
}

class TextField  extends AbstractField {

}

class Radio  extends AbstractField {

}
class GoogleMap extends AbstractField {

}

class AbstractField implements FieldInterface {
    public static function create($id): FieldInterface{}
    function setId(): FieldInterface {}
    function setLabel(): FieldInterface {}
    function setDefault(): FieldInterface {}
    function setValue(): FieldInterface {}
}

interface FieldInterface {
    static function create($id): FieldInterface;
    function setId(): FieldInterface;
    function setLabel(): FieldInterface;
    function setDefault(): FieldInterface;
    function setValue(): FieldInterface;

}

Sodium::addForm('myid')->addColumn(22)->addFields([
    FieldFactory::createTextField()->setId()->setDefault(),
    FieldFactory::createRadioField()->setDefault()
]);

Sodium::addForm('myid')->addColumn(22)->addFields(
    FieldFactory::createTextField()->setId()->setDefault(),
    FieldFactory::createRadioField()->setDefault()
);

Sodium::addForm('form')->addFields(
    TextField::create('id')->setValue()->setLabel(),
    GoogleMap::create('map')->setLabel()
);