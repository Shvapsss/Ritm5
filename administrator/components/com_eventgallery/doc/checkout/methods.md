## Payment {#payment}

Define how an order can be payed. You can add additional messages which show up on review and confirmation pages. Using those messages you can create a payment method like Cash in Advance where you can name the right way for the customer to send you the money. 

![Configuration options](img/backend/backend_paymentmethodes.jpg)

![Configuration options](img/backend/backend_paymentmethod.jpg)

### Paypal Adaptive Payments {#paypaladaptive}

Paypal is a specific payment method. Once configured in the right way the order is marked automatically as payed if the customer pays with PayPal. To use this method you need to set up an app at PayPal and enter the necessary data at the PalPal tab. 

![Configuration options](img/backend/backend_paymentmethod_paypal.jpg)

In order to get this payment method running you need to create a PayPal application here: https://apps.paypal.com. In addition you need to get the credential for accessing the application from your PayPal account. Follow the steps described here https://developer.paypal.com/webapps/developer/docs/classic/lifecycle/goingLive/ to get your site live.

If the user is not redirected to the Palpal payment page after he submitted an order usually the credentials described below are invalid. If an error occurs, there will be a new entry in a log file /logs/plg_eventgallery_paypal.log.php. Make sure you check this file since it will tell you what kind of issue occurred.

#### Fields

- *Receiver* - the email address of the receivers account

You can get the necessary credentials like described here: https://developer.paypal.com/webapps/developer/docs/classic/lifecycle/goingLive/#credentials

- *Credentials - User ID* - the API credentials of the user who wants to use the API
- *Credentials - Password*  - the API credentials of the user who wants to use the API
- *Credentials - Signature*  - the API credentials of the user who wants to use the API

To get the App ID for your production environment you need to got to https://apps.paypal.com and create a new application. Once it is verified PayPal will send you the necessary App ID.

- *Credentials - App ID* - the ID which Paypal sends you once it's verified your application

If you run this plugin in Sandbox mode the App ID is always APP-80W284485P519543T. You need to change it if you set the payment plugin into production mode. 

### Paypal Basic {#paypalbasic}

Paypal Basic allows you to receive payments using Paypal. Once a user has created an order he get a Paypal button which he has to click in order to pay. This button is available in the order confirmation page as well as on the order tracking page. It'll disappears once the order is marked as paid. 

#### Fields

- *Receiver* - the email address of the receivers account
- *Production Mode* - if set to production you can start earning real money. Otherwise the sandbox mode is used. Make sure you entered a sandbox receiver.


## Shipping {#shipping}

Somehow the costumer has to get the order. Define shipping methods from which he can select from. 

![Configuration options](img/backend/backend_shippingmethodes.jpg)

![Configuration options](img/backend/backend_shippingmethod.jpg)

## Surcharge {#surcharge}

Create surcharges if you want to add a special amount to the total if the order is less than a specific amount to make sure your expenses are covered.

![Configuration options](img/backend/backend_surcharges.jpg)

![Configuration options](img/backend/backend_surcharge.jpg)