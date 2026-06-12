hi nathan 
make the admin dashboard, relevant css styling is already provided
for context just check the group chat for how its supposed to look provided by jn

also for context btw this is how u test the database and all that with ur admin dashboard:
1. have fucking XAMPP
2. start Apache and MYSQL
3. download the code and whatever and follow the proper structure condensed into one folder in the htdocs folder for XAMPP
4. open ur web brows then type localhost/phpmyadmin
5. on left sidebar click new and make a fucking database
6. name it exactly users_db, it should appear on the left navigation pane\
7. click on it, click on SQL and enter and press go once u paste this EXACT code:
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('user', 'admin') NOT NULL
);

8. type this to ur browser localhost/jnkd/pages/signup.php (change jnkd to whatever you named the folder in the htdocs folder, i just named it that way)
9. to check if ur users and pass save click on the users_db thing, once it appears click users table and youll see the saved shit there
10. goodluck with the admin dashboard
