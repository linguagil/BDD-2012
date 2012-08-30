<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;

use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

class StringContext extends BehatContext
{
    
    /**
     * @Given /^que eu tenho uma string "([^"]*)"$/
     */
    public function iHaveTheString($str)
    {
        $this->str = $str;
    }

    /**
     * @When /^eu usar a função "([^"]*)"$/
     */
    public function iUseTheFunction($func)
    {
        $this->result = $func($this->str);
    }

    /**
     * @Then /^eu tenho como resultado "([^"]*)"$/
     */
    public function iHaveAsResult($result)
    {
        if ($this->result != $result)
        throw new Exception("ERRO: $this->result != $result");
    }
    
    /**
     * @Then /^eu tenho como resultado (\d+)$/
     */
    public function iHaveNumberAsResult($num)
    {
        if ($this->result != $num)
            throw new Exception("ERRO: $this->result != $num");
    }
    
}