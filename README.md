# Docker PHP environment example

## Description
While browsing the internet it came to my attention that many people struggled to get docker to work with PHP, MYSQL, PHPmyadmin, and some necessary extensions. I remember how hard it was for me to start with docker as well, and this is why I decided to create this example to make life easier for most of us.

## Features
- PHP version 8.0.13 (Latest version)
- Mysql 8.0.27 (Latest version)
- PHPmyadmin (Latest version)
- MYSQLI Support
- PDO & pdo_mysql support
- Supports OpenSSL
- PHP init custom config
- Check for updates and upgrade if there are any.
- Supports Mysql persistent data in docker with the volume named dbdata
- .htaccess support
- Includes a mysqli connection example within the index.php file
- Does not need to be restarted to view changes on the server.

## Default MYSQL config
- Database host: mysql pr host.docker.internal
- Database name: dockerexample
- Database user: user
- Database password: password
- Default DB port: 3306

## Default PHPmyadmin config
- PHPmyadmin default user: root
- PHPmyadmin default password: admin
- Default PHPmyadmin port: 8081
- Link to PHPmyadmin: http://localhost:8081

## Default PHP config
- Default port: 80

## Working directory
By default it will use the same directory where the docker-composer and Dockerfile are. If you would like to change this behavior go to the docker-compose file and change line #9 to your desire directory.

## Notes
If everything works you should see a DB connected message when visiting http://localhost

## First time use
- execute `docker-compose build`

## start the server
- execute `docker-compose up`

## maintained by 
- Jerry Urena @jerryurenaa

## License
MIT  included within this project.