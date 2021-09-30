
## The Application

A Web Appication that allows User to Register or Login through:
 - Linkedin, Gmail or Manually
*   If you register through a social platform a default password with value "secret" is created .
*   A Middleware is configured that filters routes' access for user based on their status (logged in or logged out) 

## The Installation
- Clone(SSH or HTTPS) : 
    * git clone git@github.com:Husseinhewehii/Authentication-Scrum.git
    * git clone https://github.com/Husseinhewehii/Authentication-Scrum.git
- cd Authentication-Scrum
- composer install
- cp .env.example .env
- setup your database in .env file as following:
    * DB_DATABASE=your-database-name
    * DB_USERNAME=your-database-username
    * DB_PASSWORD=your-database-password
- php artisan migrate
- php artisan generate:key
- add your client ID and secret key in .env file as following:  
    * GL_ID=your-google-client-id
    * GL_SECRET=your-google-client-secret

    * LK_ID=your-linkedin-client-id
    * LK_SECRET=your-linkedin-client-secret


