# Bsocial
Bringing students together inside and outside school


##To run on your server
1. Using ```PHPMyAdmin```:
2. Open an existing database or create a new one.
3. With that database selected, run the sql found in ```create_tables.sql```.
4. Open ```config.php``` and change the database info to your own (to use custom tablenames, edit them to match changes in the sql).

##Adding pages
Add this to the beginning of every page: 
```php
<?php require_once('app.php');
?>
```

####app.php 
Handles the creation of instances of:
the Database, CommentManager (```$cm```), GroupManager (```$gm```), NotificationManager (```$nm```), SessionManager (```$sm```), UsersManager (```$um```) classes.

##Protecting pages
####To make sure a page can only be viewed when logged in:
Add ```$um->loggedInElseRedirect();``` on a new line right under ```require_once('app.php');```. 
The final beginning of every protected page will look like: 
```php
<?php require_once('app.php');
	  $um->loggedInElseRedirect();
?>
```

##Examples of getting data using the managers

####Getting all users or groups as array

```php
$usersArr  = $um->getAll(); // All Users
$groupsArr = $gm->getAll(); // All Groups

```

####Getting all unread notifications for the logged in user:
```php
$loggedInAs       = $sm->get_user_id(); // The currently logged in user
$notificationsArr = $nm->getUnreadByUserId($loggedInAs);
```

####Setting a single notification as read:
```php
$nm->setRead(13); // Setting notification with id 13 to read
```