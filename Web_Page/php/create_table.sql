CREATE TABLE IF NOT EXISTS `guvidb` (
    'id' int(11) NOT NULL AUTO_INCREMENT,
    'email' varchar(50) NOT NULL,
    'password' varchar(50) NOT NULL,
    'firstname' varchar(50) NOT NULL,
    'lastname' varchar(50) NOT NULL,
    'gender' varchar(10) NOT NULL,
    'mobile' number(10) NOT NULL,
    'dob' date NOT number
    'designation' varchar(50) NOT NULL,
    'address' varchar(50) NOT NULL,
    PRIMARY KEY (`email`)
 );