<?php

class Acordos extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $datetime_acordo;

    /**
     *
     * @var string
     */
    public $instituicao;

    /**
     *
     * @var string
     */
    public $foto_instituicao;

/*************************************************************/

    // MODEL EVENTS
    // Models allow you to implement events that will be thrown when
    // performing an insert/update/delete. They help define business
    // rules for a certain model. The following are the events supported
    // by Phalcon\Mvc\Model and their order of execution:
    //
    // todos os eventos existentes estão abaixo definidos
    // para mais informação:
// http://docs.phalconphp.com/en/latest/reference/models.html#events-and-events-manager

    // The easier way to make a model react to events is implement a method
    // with the same name of the event in the model’s class.


    public function beforeValidation()
    {
         echo <br> . "The Method beforeValidation was executed!" . <br> ;
    }

    public function beforeValidationOnCreate()
    {
         echo <br> . "The Method beforeValidationOnCreate was executed!" . <br> ;
    }

    public function beforeValidationOnUpdate()
    {
         echo <br> . "The Method beforeValidationOnUpdate was executed!" . <br> ;
    }

    public function onValidationFails()
    {
         echo <br> . "The Method onValidationFails was executed!" . <br> ;
    }

    public function afterValidationOnCreate()
    {
         echo <br> . "The Method afterValidationOnCreate was executed!" . <br> ;
    }

    public function afterValidationOnUpdate()
    {
         echo <br> . "The Method afterValidationOnUpdate was executed!" . <br> ;
    }

    public function afterValidation()
    {
         echo <br> . "The Method afterValidation was executed!" . <br> ;
    }

    public function beforeSave()
    {
         echo <br> . "The Method beforeSave was executed!" . <br> ;
    }

    public function beforeUpdate()
    {
         echo <br> . "The Method beforeUpdate was executed!" . <br> ;
    }

    public function beforeCreate()
    {
         echo <br> . "The Method beforeCreate was executed!" . <br> ;
    }

    public function afterUpdate()
    {
         echo <br> . "The Method afterUpdate was executed!" . <br> ;
    }

    public function afterCreate()
    {
         echo <br> . "The Method afterCreate was executed!" . <br> ;
    }

    public function afterSave()
    {
         echo <br> . "The Method afterSave was executed!" . <br> ;
    }



    // Events can be useful to assign values before performing an operation, for example:

    public function beforeCreate()
    {
        //Set the creation date
        $this->created_at = date('Y-m-d H:i:s');
    }

    public function beforeUpdate()
    {
        //Set the modification date
        $this->modified_in = date('Y-m-d H:i:s');
    }


/*************************************************************/


}
