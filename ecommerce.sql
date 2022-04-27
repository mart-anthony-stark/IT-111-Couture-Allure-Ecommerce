-- Create table for products
CREATE TABLE product(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    name VARCHAR(255) NOT NULL, 
    category VARCHAR(11) NOT NULL, 
    image VARCHAR(255) NOT NULL, 
    price INT NOT NULL
)

    -- VALUES(null, "Rib-knit Puff Sleeve Sexy Dress", "dresses", "https://github.com/mart-anthony-stark/Couture-Allure-Assets/blob/main/Dresses/2.jpg?raw=true", 1200)
-- INSERT PRODUCTS
INSERT INTO product 
    VALUES(null,"Sexy korean plain dress","dresses","https://github.com/mart-anthony-stark/Couture-Allure-Assets/blob/main/Dresses/2.jpg?raw=true", 700),
    (null,"Off shoulder maxi korean elegant dress","dresses","https://github.com/mart-anthony-stark/Couture-Allure-Assets/blob/main/Dresses/3.jpg?raw=true", 1300),
    (null,"ANNIKA Bangkok Floral Ribbon Dress","dresses","https://github.com/mart-anthony-stark/Couture-Allure-Assets/blob/main/Dresses/4.jpg?raw=true", 999)