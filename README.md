# livechatmsg
Web Based live chat system using PHP

To run the files on web browser you are requied xampp server.

To get xampp server follow the link : https://www.apachefriends.org/download.html

you can download the latest version as per your system configuration.

After installation you have to configuire the port number to 8080 or else you 
edit the code based on your port number to accesess those files.

after that you need to create a database to run the backend system for which 
you need to access the phpmyadmin via link : //localhost:(your port number)/phpmyadmin
for example my port number is 8080, so the link will be, //localhost:8080/phpmyadmin

after entering the database create a database named as "chatsystem", it shuold be same as mentioned
otherwise it will not work,
then import the tables by following the path= http://localhost:8080/phpmyadmin/db_import.php?db=chatsystem
tables that will be imported are: 1) user_login_details.sql
				  2) room.sql

After following all the above procedure just open the index.php file 
and login if user exixst or signup for new user.
