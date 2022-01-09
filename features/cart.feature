Feature: Cart
    Permet de vérifier que le panier fonctionne

    Scenario: An empty cart
        Given An empty cart
        Then The cart price is 0 €

    Scenario: Products are added to the cart
        Given An empty cart
        And A product costing 5 € is added
        And A product costing 7 € is added
        Then The cart price is 12 €
