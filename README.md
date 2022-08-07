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

<img width="1270" alt="getForm.php" src="https://user-images.githubusercontent.com/60073836/183287513-b0c399ae-b955-4cb2-9182-851f9912c284.png">

## 2. Create a database to store the entries.
Open XAMPP and run Apache Web Server and MySQL Database
Go to application and open phpmyadmin by searching http://localhost/phpmyadmin/
From the bar, create a new database ( from new button ), let's say its name is (db)
Create a table inside the database, let's say its name is (table)
For our example, we only need one column of type int , let's say its name is (value)

Choose Save, now our database is ready!
