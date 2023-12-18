# car_rental
## create database call (car_rental) with four tables (cars,customer,rents,users);
### 1 cars (id 	int(11) ,	category	varchar(255),description	text,	price	varchar(255),image	varchar(255),	isrented	tinyint(1)).
### 2 customer (	id Primary	int(11),	name	varchar(255)	,driving_licenese	varchar(255)	,	identity_number	varchar(255),address	varchar(500)	,	phone	varchar(20),user_id	int(11)).
### 3 rents (id Primary	int(11),	car_id	int(11),customer_id	int(11),created	timestamp	,	started	timestamp	,	ended	timestamp,total	int(11)).
### 4 users (	Id Primary	int(11),user_name	varchar(255)	,	user_password	varchar(255),role	int(11)).
