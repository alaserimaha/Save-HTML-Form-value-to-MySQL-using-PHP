# Save HTML Form Value to MySQL using PHP
How can we receive input value from web page by GET method and store it in MySQL database using php?

We have to do some steps،
but before that to use your PC as a server to complete the task, you have to download [XAMPP](www.apachefriends.org) to use Apache Web Server and MySQL Database

![Xampp_logo svg](https://user-images.githubusercontent.com/60073836/183281815-8af7178e-5d0a-4a85-beb3-e72803eef009.png)

[click here to download](www.apachefriends.org)


## 1. Create a web page to receive input.
## 2. Create a database to store the entries.
## 3. Create a php page to connect a web page to a database.

## 1. Create a web page to receive input.
Let's say we want a web page to receive an integer, 
we will create a simple html page (and save it as a php file) you can find the example code from the attachments above [getForm.php](https://github.com/alaserimaha/Save-HTML-Form-value-to-MySQL-using-PHP/blob/main/getForm.php)

The most important thing when writing input form let method="get" and action=(the name of php page)

<img width="1270" alt="getForm.php" src="https://user-images.githubusercontent.com/60073836/183287513-b0c399ae-b955-4cb2-9182-851f9912c284.png">

## 2. Create a database to store the entries.
1) Open XAMPP and run Apache Web Server and MySQL Database
2) Go to application and open phpmyadmin by searching http://localhost/phpmyadmin/
3) From the bar, create a new database ( from new button ), let's say its name is (db)
4) Create a table inside the database, let's say its name is (table)
5) For our example, we only need one column of type int , let's say its name is (value)

Click Save, now our database is ready!
<img width="1314" alt="database" src="https://user-images.githubusercontent.com/60073836/183287918-c37e2834-8537-489a-b026-08f08d833a29.png">

## 3. Create a php page to connect a web page to a database.
We write a php file that stores the value of the number entered, and then sends it to the database
If the storage task is successful, a message will be displayed (The number ..... has been stored Successfully)
you can find the example code from the attachments above [get.php](https://github.com/alaserimaha/Save-HTML-Form-value-to-MySQL-using-PHP/blob/main/get.php)


<img width="440" alt="get.php" src="https://user-images.githubusercontent.com/60073836/183288193-96f88524-b040-411a-8b20-92377839b311.png">

Finally, inside the (xampp >> htdocs) folder you have to create a folder and save two php files in it

Now let's open the first php file with Apache Web Server ( http://localhost/getForm.php ) and enter number 1 for example
We will see that the browser has converted us to get.php web and that the url contains the value we entered

<img width="554" alt="‏urlphoto" src="https://user-images.githubusercontent.com/60073836/183288556-3c4e9118-1855-4130-8cfe-569cf59d17fb.png">

And if we open the database, we will find that the number 1 has already been stored!

<img width="851" alt="database" src="https://user-images.githubusercontent.com/60073836/183288806-82e60b79-1185-4798-b73a-702705033ac7.png">


