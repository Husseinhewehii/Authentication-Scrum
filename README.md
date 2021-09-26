
## The Application

A Web Appication that allows User to Register or Login through:
 - Linkedin, Gmail or Manually
*   If you register through a social platform and default password with value "secret" is created .

## The Installation
- Clone : 
    *  SSH: git clone git@github.com:Husseinhewehii/Authentication-Scrum.git
    * HTTPS: git clone https://github.com/Husseinhewehii/Authentication-Scrum.git
- composer install
- cp .env.example .env
- setup your database as following :
 * DB_DATABASE=database-name
 * DB_USERNAME=database-username
 * DB_PASSWORD=database-password
- php artisan migrate
- php artisan generate:key
- add your client ID and secret key in .env file as following:  
    * GL_ID=your-google-client-id
    * GL_SECRET=your-google-client-secret

    * LK_ID=your-linkedin-client-id
    * LK_SECRET=your-linkedin-client-secret


