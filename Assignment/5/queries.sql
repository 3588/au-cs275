/*A list of restaurants that serve a specific dish or a specific type of cuisine*/
SELECT *
FROM  `restaurant` 
WHERE  `Name` LIKE  '%name%'
LIMIT 0 , 30

/*type of cuisine (e.g., Italian, American, etc.) */
SELECT *
FROM  `restaurant` 
WHERE  `Type` LIKE  'cuisine'
LIMIT 0 , 30

/*specific dishes served at a restaurant */
SELECT *
FROM  `restaurant` 
WHERE  `SpecificDishes` LIKE  '%dishes%'
LIMIT 0 , 30

/average visitor rating (rating scale is from 1 (worst) to 10 (best)) /
SELECT avg(rating)
FROM  `restaurant_rating` 
WHERE  `idRestaurant` = 3
LIMIT 0 , 30

/* A rating for a specific restaurant and a specific dish */
INSERT INTO  `restaurants`.`restaurant_rating` (
`idRating` ,
`idRestaurant` ,
`rating`
)
VALUES (
NULL ,  '3',  '6'
);


INSERT INTO  `restaurants`.`dish_rating` (
`idRating` ,
`idDish` ,
`rating`
)
VALUES (
NULL ,  '2',  '4'
);

/* An average rating for a specific restaurant or a specific dish */
SELECT avg(rating)
FROM  `restaurant_rating` 
WHERE  `idRestaurant` =3
LIMIT 0 , 30


SELECT avg(rating)
FROM  `dish_rating` 
WHERE  `idDish` =3
LIMIT 0 , 30

/*A list of reviews for a specific restaurant and a specific dish */
SELECT `content` 
FROM  `restaurant_reviews` 
WHERE  `idRestaurant` =1
LIMIT 0 , 30


SELECT `content` 
FROM  `dish_reviews` 
WHERE  `idDish` =1
LIMIT 0 , 30

/*A list of restaurants that serve a specific dish or a specific type of cuisine*/
SELECT `SpecificDishes` 
FROM  `restaurant` 
WHERE  `idRestaurant` =1
LIMIT 0 , 30


SELECT `Type` 
FROM  `restaurant` 
WHERE  `idRestaurant` =1
LIMIT 0 , 30

/*A list of reviews for dishes and restaurants written by a specific customer*/
SELECT `content` 
FROM  `restaurant_reviews` 
WHERE  `idCustomer` =1
LIMIT 0 , 30


SELECT `content` 
FROM  `dish_reviews` 
WHERE  `idCustomer` =1
LIMIT 0 , 30

/* A list of all dishes in a particular price range specified by the customer */
SELECT * 
FROM  `price` 
WHERE  `price` 
BETWEEN 1 
AND 10 
LIMIT 0 , 30