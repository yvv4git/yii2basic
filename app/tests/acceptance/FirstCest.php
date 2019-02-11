<?php

use yii\helpers\Ulr;


class FirstCest
{
    function _before(AcceptanceTester $I)
    {
    }
    
    public function _after(AcceptanceTester $I)
    {        
    }

    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage(Url::toRoute('/site/index'));
        $I->see('My Yii Application');    
    }
    
    public function ensureAboutWork(AcceptanceTester $I)
    {
        $I->amOnPage(Url::toRoute('/site/about'));
        $I->wantTo('some test');
        $I->see('About', 'h1');
    }
    
    public function ensureIndexWork(AcceptanceTester $I)
    {
        $I->amOnPage(Url::toRoute('/site/index'));
        $I->see('My Yii Application');
    }
    
    /*
    public function tryToTest(AceptanceTester $I)
    {
        $I->amOnPage(Url::toRoute('/site/index'));
        $I->see('My Yii Application');        
    }
     * 
     */
}



/*
$I = new AcceptanceTester($scenario);
$I->amOnPage(Url::toRoute('/site/index'));
$I->see('My Yii Application');
*/
