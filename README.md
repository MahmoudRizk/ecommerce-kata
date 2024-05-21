# Intro

The aim of this project is to implement a subset of an e-commerce application using <b>vertical sliced architecture</b> & Laravel.

#### The e-commerce handles the following feature

### Phase 1: Main flow

In this phase, it will be needed to implement the minimal basic business flow of the project.

##### 1. Admin

-   Admin can list products catalog.
-   Admin can add new product & update existing ones.

##### 2. Shopper

-   Customer can register and add more than one address.
-   Customer can browse products catalog.
-   Customer can submit order.
-   Customer can list related orders.
    <br>

-   Each product has a price & description.
    <br>

-   Each order holds information about the products purchased and the total amount is the sum of one item's quantity multiplied by its price.
-   Order's initial status is draft & when the customer confirms it, it changes to ready to be picked.

##### 3. Orders preparation and items picking

-   Picker can list the pending orders to be picked & picks one to work on.
-   No more than one picker can work on the same order.
-   Picker can't work on more than one order at a time.
-   After order is picked it status can be changed to "ready for delivery".

##### 4. Orders delivery

-   Delivery agent can list "ready for delivery" orders.
-   Delivery agent can choose more than one order and deliver them together.
-   Once the delivery agent picks an order, it status changes to "on delivery".

### Phase 2: Adding taxes, discounts & stocks

In this phase, taxes & discounts will be introduced. The admin will define tax types for each product and it will be applied to the customers orders.

##### 1. Admin

-   Admin will define tax & discount to the products.
    -   Tax can be a fixed value or a percentage of the product's price.
    -   Prices will always be tax excluded.
    -   Product's discount will always be a fixed value not a percentage.
-   Admin will define for each product the available stock.

##### 2. Shopper

-   Order calculations shall now considers taxes and discounts
    -   For each product's line, discounts are deducted first from the original price then taxes are applied.
-   Products list will show products with no stock label if out of stock.
-   Stocks will be deducted only when the customer confirms the order.


