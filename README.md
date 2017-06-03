# Scoreboard
Scoreboard application to display scores of individual players.
Clicking on any player name will increment that player's score by 5 points.

## Installation
Create a folder "Scoreboard" in www folder of your wamp or lamp installation directory
and copy the file index.php and insert.php inside it. Also copy the two folders css and js inside the Scoreboard folder.

You need to import the scoreboard_db.sql file using phpmyadmin to create the necessary mysql tables and data.

The index.php and insert.php file connects to mysql database as 'root' with no password. If it is different in your system then you have to do changes in these files at line number 33 and 5 respectively.
