<?php 
use \Codeception\Util\Locator;
class SigninCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        
        $I->wantTo('Test the response code for the homepage');
        $I->amOnPage('/');
        $I->see('FEATURED PRODUCTS');
        $I->wantTo('Test the product description');
        $I->click('//*[@id="category-grid"]/div[1]/div/div[3]/a');
        $I->see('HP 14-inch A4/4GB/128GB SSD Laptop - Natural Silver');
        $I->click('//*[@id="btn-add-to-cart"]/span');
        $I->see('$522');
       

        
    }
}
