<?php

use Behat\MinkExtension\Context\MinkContext;

class WebContext extends MinkContext {

      /**
     * @When I wait for :numberOfSeconds seconds
     */
    public function iWaitForSeconds($numberOfSeconds)
    {
        $this->getSession()->wait($numberOfSeconds * 1000);
    }

    /**
     * @When click on :buttonName button
     */
    public function clickOnButton($buttonName)
    {
        $findName = $this->getSession()->getPage()->findById($buttonName);
        if (!$findName) {
            throw new Exception($buttonName . " could not be found");
        } else {
            $findName->click();
        }
    }

}