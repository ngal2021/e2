<?php

class ProductPageCest
{

    // tests
    public function pageLoads(AcceptanceTester $I)
    {
        # Act
        $I->amOnPage('/product?sku=driscolls-strawberries');

        # Assert the correct title is set on the page
        $I->seeInTitle('Driscoll’s Strawberries');

        # Assert the existence of certain text on the page
        $I->see('Driscoll’s Strawberries');

        # Assert the existence of a certain element on the page
        $I->seeElement('.product-thumb');

        # Assert the existence of text within a specific element on the page
        $I->see('$4.99', '[test=product-price]');
    }

    public function reviewAProductTest(AcceptanceTester $I)
    {
        $I->amOnPage('/product?sku=driscolls-strawberries');
        
        $name = 'Bob';
        $I->fillField('[test=reviewer-name-input]', $name);

        $review = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in pulvinar libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in pulvinar libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.';
        $I->fillField('[test=review-textarea]', $review);

        $I->click('[test=review-submit-button]');

        $I->seeElement('[test=review-confirmation]');

        // Confirm we see review on the page
        $I->see($name, '[test=review-name]');
        $I->see($review, '[test=review-content]');
    }


    public function HomeWelcome(AcceptanceTester $I)
    {
        $I->amOnPage('/');

        $I->seeElement('h2');
    
    }

    public function AllProducts(AcceptanceTester $I)
    {
        $I->amOnPage('/products');
        
        $productCount = count($I->grabMultiple('.product-link'));

        $I->assertGreaterThanOrEqual(10, $productCount);
    
    }

    public function NewProduct(AcceptanceTester $I)
    {
        $I->amOnPage('/products/new');

        $I->seeElement('[test=new-confirmation]');

        $description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in pulvinar libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in pulvinar libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.';
        $I->fillField('[test=description-textarea]', $description);
        
        $productCount = count($I->grabMultiple('.product-link'));

        $I->assertGreaterThanorEqual(10, $productCount);
    
    }

    public function PageNotFound(AcceptanceTester $I)
    {
        # Act
        $I->amOnPage('/product?sku={{ $sku }}');

        # Assert the existence of a certain element on the page
        $I->seeElement('.product-show');

    }

}
