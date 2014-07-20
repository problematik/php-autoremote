# PHP-AutoRemote

PHP-AutoRemote is a PHP wrapper for [AutoRemote] [1]. It uses method chaning for easy setup and can set all attributes listed on the [AutoRemoteWebInterface] [2].

## Installation

To include PHP-AutoRemote in your project edit your project's `composer.json` file to require `problematik/php-autoremote`
```
"require": {
    "problematik\php-autoremote": "~1.0.2"
}
```
## Usage

PHP-AutoRemote is meant to be simple to use.
To send an notification to your device all you need to do is the following:
```php
<?php

use Problematik\AutoRemote\AutoRemote;
use Problematik\AutoRemote\AutoRemoteNotification;

$notification = new AutoRemoteNotification();
$notification->title("Hello World!")->text("This will be the notification message!");

$autoremote = new AutoRemote("YOUR_API_KEY");
$autoremote->send($notification);
```
Done, that's it! You should now see the notification on your device!
You've send the notification and something went wrong? Then the `AutoRemoteException` will be thrown

Don't want to chain methods together, you would rater pass an array of properties to the constructor? Thats fine to...
```php
$notification = new AutoRemoteNotification(array("title" => "title", "text" => "text");
```
But sometimes you just want to send an `AutoRemote message`, that can be done like so
```php
<?php

use Problematik\AutoRemote\AutoRemote;
use Problematik\AutoRemote\AutoRemoteMessage;

$message = new AutoRemoteMessage();
$message->message("message");

$autoremote = new AutoRemote("YOUR_API_KEY");
$autoremote->send($notification);
```

Want to add a button to your notification?
```php
<?php

use Problematik\AutoRemote\AutoRemote;
use Problematik\AutoRemote\AutoRemoteIcon;
use Problematik\AutoRemote\AutoRemoteNotification;
use Problematik\AutoRemote\AutoRemoteNotificationButton;

$button = new AutoRemoteNotificationButton("message to send on button click", "Click me", AutoRemoteIcon::ACTION_HELP);

$anotherButton = new AutoRemoteNotificationButton("another message", "Edit me!", AutoRemoteIcon::CONTENT_EDIT);

$notification = new AutoRemoteNotification();
$notification->title("I've added buttons!")->text("Please click on the button!");
$notification->addButton($button)->addButton($anotherButton);

$autoremote = new AutoRemote("YOUR_API_KEY");
$autoremote->send($notification);
```
We just added a button to a notification using the `AutoRemoteNotificationButton` class which takes in `message, label, icon` respectively.  
For the icon we used the `AutoRemoteIcon` class, that has predefined constants with the icons you can use in your notifications, but you can use any string value as long it is listed in the AutoRemote Notification action in Tasker under the Button icon field, like so:
```php
$button = new AutoRemoteNotificationButton("message to send on button click", "Click me", "action_help");
```
> Please note that the `AutoRemoteIcon` class list only the icons which can be found in the `AutoRemoteNotification` apk under the `res/drawable-hdpi`, so some are missing (but that should still be enough, you have 350 icons predefined))

## Properties
All the properties names can be found on the [AutoRemoteWebInterface] [2].
The names are derived like so:

* `Message` => `message` // (all are lowercase)
* `Target (optional)` => `target` (all are without parentheses)
* `Act as Sender (Optional)` => `actAsSender` (all are camelCase)

with the exception of

* `Message validity time in seconds (Optional)` => `messageValidity`
* `Picture URL` => `pictureUrl`
* `Led On ms` => `ledOnMS`
* `Led Off ms` => `ledOffMS`
* `Icon URL` => `iconUrl`

## Some more examples
Send a notification with vibration pattern:
```php
$notification = new AutoRemoteNotification();
$notification->title("title")->text("text");

$notification->vibrationPattern("100,200,100,200");
```
Send a notification with led color:
```php
$notification = new AutoRemoteNotification();
$notification->title("title")->text("text");

$notification->ledColor("red");
$notification->ledOnMS(200)->ledOffMS(200);
```
or use the shorthand method
```php
$notification->led("red", 200, 200);
```
Send a notification with progress bar
```php
$notification = new AutoRemoteNotification();
$notification->title("title")->text("text");

$notification->notificationId("my-id");
$notification->maxProgress(100);
$notification->currentProgress(30);
```


[1]:http://joaoapps.com/autoremote/
[2]:http://autoremotejoaomgcd.appspot.com/
