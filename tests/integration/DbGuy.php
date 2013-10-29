<?php
// This class was automatically generated by build task
// You should not change it manually as it will be overwritten on next build
// @codingStandardsIgnoreFile


use \Codeception\Maybe;
use Codeception\Module\PhalconApiHelper;
use Codeception\Module\PhalconDbHelper;

/**
 * Inherited methods
 * @method void execute($callable)
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void offsetGet($offset)
 * @method void offsetSet($offset, $value)
 * @method void offsetExists($offset)
 * @method void offsetUnset($offset)
*/

class DbGuy extends \Codeception\AbstractGuy
{
    
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\PhalconApiHelper::getDi()
     * @return \Codeception\Maybe
     */
    public function getDi() {
        $this->scenario->addStep(new \Codeception\Step\Action('getDi', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\PhalconApiHelper::addService()
     * @return \Codeception\Maybe
     */
    public function addService($name, $function) {
        $this->scenario->addStep(new \Codeception\Step\Action('addService', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\PhalconApiHelper::getService()
     * @return \Codeception\Maybe
     */
    public function getService($name) {
        $this->scenario->addStep(new \Codeception\Step\Action('getService', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\PhalconApiHelper::withDi()
     * @return \Codeception\Maybe
     */
    public function withDi($service) {
        $this->scenario->addStep(new \Codeception\Step\Action('withDi', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     * Empties a table in the database.
     *
     * @param $table
     *
     * @return boolean
     *
     * @author Nikos Dimopoulos <nikos@phalconphp.com>
     * @since  2012-11-08
     * @see Codeception\Module\PhalconDbHelper::emptyTable()
     * @return \Codeception\Maybe
     */
    public function emptyTable($table) {
        $this->scenario->addStep(new \Codeception\Step\Action('emptyTable', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     * Populates a table with default data
     *
     * @param      $table
     * @param null $records
     *
     * @author Nikos Dimopoulos <nikos@phalconphp.com>
     * @since  2012-11-08
     * @see Codeception\Module\PhalconDbHelper::populateTable()
     * @return \Codeception\Maybe
     */
    public function populateTable($table, $records = null) {
        $this->scenario->addStep(new \Codeception\Step\Action('populateTable', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }
}
