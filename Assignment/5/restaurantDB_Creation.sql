## restaurant DB schema for assignment 4 ##

use restaurants;

create table customers( 
	customerid int unsigned not null auto_increment primary key, 
	firstname char(30) not null,
	lastname char(30) not null, 
	address char(50) not null, 
	city char(30) not null
	);

create table restaurants ( 
	restaurantid int unsigned not null auto_increment primary key, 
	name char(40) not null, 
	address char(50) not null, 
	city char(30) not null
); 
		
create table dishes ( 
	dishid int unsigned not null auto_increment primary key,
	name char(50) not null,
	cuisineID char(30) not null
	
); 

create table restaurant_dish (
	restaurantid int unsigned not null,
	dishid int unsigned not null,
	price float(4,2) not null,
		
	primary key (restaurantid, dishid)
);
	 
create table dish_review ( 
	restaurantid int unsigned not null,
	dishid int unsigned not null, 	
	customerid int unsigned not null,
	rating tinyint unsigned not null,
	review text not null,

	primary key (customerid, dishid)
	##primary key (restaurantid, dishid)
); 

create table restaurant_review ( 
	restaurantid int unsigned not null,
	customerid int unsigned not null,
	rating tinyint unsigned not null,
	review text not null,

	primary key (restaurantid, customerid)
);

create table favorite_cuisines ( 
	customerid int unsigned not null,
	cuisineID int unsigned not null, 

	primary key (customerid, cuisineID)
);

create table cuisines ( 
	cuisineID int unsigned not null primary key,
	name char(50) not null
);