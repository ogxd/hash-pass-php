# Hsh-Pswd
Handy but ultra secure simple hash based password generation

## Demo
![demo](https://raw.githubusercontent.com/Ogx8/Hsh-Pswd/master/demo.jpg)

## How to setup
- Copy repo content to an FTP server.
- Include `get_password.php`
- Call `getPassword($key, $service)` or get `./get_password_text.php?key=MASTERKEY&service=SERVICENAME`

## How to use
- Memorize a master password. Never write it in a place you don't 100% trust.
- Use straightforward names for services names. e.g : Facebook (case is not sensitive for service)
- Request password from key and service name. 