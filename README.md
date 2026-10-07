Manalili TFA4 – CodeIgniter POS
A CodeIgniter 4 POS project featuring customer and user account pages, upgraded with authentication, sessions, protected routes, and logout functionality.

Setup
To get started, simply import the SQL database export into phpMyAdmin, configure your local database connection inside the .env file, open the project folder in your terminal, and run php spark serve to spin up the local server and head to /login.

Features
Authentication & Security: Passwords are stored securely as hashes and verified upon login, while a dedicated filter automatically secures customer and user account pages against unauthorized access.

Session & State Management: Sessions track the currently logged-in user seamlessly, and the logout feature instantly ends the active session to redirect users straight back to the login page.