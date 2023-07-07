# Live G|ames Broadcasting of Yokyo 2023 FunOlympic Website
This project demonstrates how to watch live video games by user sites, forgot password section and also an admin panel seperately where admin can manage user interaction by users and contents of the yokyo 2023 website.

#Overview of the project
Yokyo 2023 FunOlympic website contain both functional and non-functional which have both user interaction site and admin panel dashboard. However, the user can watch different live broadcast games while only authenticated user have only access to watch live broadcast games.
In the admin panel, only administrator can edit, update and delete the website. The admin panel contain manage users, manage comments & rating, manages news, add new posts , upload sports games and upload live videos.
However, User can comment and rate the live videos after login only. The techniques has been used HTML5, CSS3, JS, JQUERY, Bootstrap, PHP and MySQL in this website. However there is weaknesses in OOP.
Lastly, there is a forgot password section, if user or admin want to reset his/her password. User can register an account, before login user need to verify his/her account. User will received a OTP code send by PHPMailer.
User can reset his/her password, user will received a new url link send by PHPMailer to reset his/her new password. I have created a database named yokyo2023 which has three table comment, posts and users where every latest posts,
register users details and comment of the users in live video games will be stored.

I've updated the register and login system more security.
1) allow multiple user login
2) validation of password strength
3) get user password as hash password
4) check user for the verification status

How to use this source code:
Requirement:
1) install xampp
here is the link to install xampp
apachefriends.org/index.html

First step:
1) download this repo 
2) create a folder name as yokyo-> extract to your xampp folder -> htdocs -> on folder yokyo
3) go to phpmyadmin -> create database yokyo2023
4) copy all the query command from yokyo2023.sql -> paste it under the database of yokyo.
5) copy the path of php index.php-> paste the link -> before C:\xampp\htdocs\yokyo/index.php-> modify to http://localhost:4433/yokyo/index.php
8) now you are ready to run your yokyo project !
9) Happy Coding

Note: 4433 is my default port number. It may not be needed or may have different port according to the system local manchine.

default user: 
username: sajeet, karishma, purna
password: Sajeet@123, Karishma@123, Purna@123

For the admin login: 
localhost:4433/yokyo/admin

To view demonstration of yokyo 2023 website and more details refer to this youtube video with clear explanation
https://youtu.be/Knm11KOIRq4

Thank you!


