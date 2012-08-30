<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;

use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

class FeatureContext extends Behat\MinkExtension\Context\MinkContext
{
    public function __construct(array $parameters)
    {
        $this->useContext('string', new StringContext());
    }
    
    
    /**
     * @Given /^Deve ter na tela o elemento "([^"]*)"$/
     */
    public function deveTerNaTelaOElemento($elem)
    {
        $obj = $this->getSession()->getPage()->find('css', $elem);
    
        if(is_null($obj)){
            throw new Exception('Elemento nao encontrado'); 
        }
    }
    
    /**
     * @Given /^o (usuario "[^"]*") está conectado$/
     */
    public function conectarUsuario(User $user)
    {
        
    }
    
    /**
     * @Tranform /^usuario "([^"]*)"$/
     */
    public function criarUsuario($nome)
    {
        return new User($nome);
    }


}
