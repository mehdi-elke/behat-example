Feature: UI

    Scenario: Homepage
        Given I am on the homepage
        Then I should see "The price of the cart is 0 €"

    @javascript
    Scenario: Add new product
        Given I am on the homepage
        And I wait for 5 seconds
        When I fill in "newPrice" with "12"
        And I wait for 5 seconds
        And click on "addToCart" button
        And I wait for 5 seconds
        Then I should see "The price of the cart is 12 €"
        And I wait for 5 seconds
