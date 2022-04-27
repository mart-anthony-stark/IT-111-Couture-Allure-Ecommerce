-- Create table for products
CREATE TABLE product(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    name VARCHAR(255) NOT NULL, 
    category VARCHAR(11) NOT NULL, 
    image VARCHAR(255) NOT NULL, 
    price INT NOT NULL
)


-- INSERT DRESS PRODUCTS
INSERT INTO product 
    VALUES(null, "Rib-knit Puff Sleeve Sexy Dress", "dresses", "https://github.com/mart-anthony-stark/Couture-Allure-Assets/blob/main/Dresses/2.jpg?raw=true", 1200),
    (null,"Sexy korean plain dress","dresses","https://github.com/mart-anthony-stark/Couture-Allure-Assets/blob/main/Dresses/2.jpg?raw=true", 700),
    (null,"Off shoulder maxi korean elegant dress","dresses","https://github.com/mart-anthony-stark/Couture-Allure-Assets/blob/main/Dresses/3.jpg?raw=true", 1300),
    (null,"ANNIKA Bangkok Floral Ribbon Dress","dresses","https://github.com/mart-anthony-stark/Couture-Allure-Assets/blob/main/Dresses/4.jpg?raw=true", 999)

-- INSERT DRESS 2 PRODUCTS
INSERT INTO product
    VALUES(null, "Black dress women's summer", "dresses", "https://raw.githubusercontent.com/mart-anthony-stark/Couture-Allure-Assets/3b9524db136fcfbb8f0a2a5337e5aa06807e5cdb/Dresses/16073967351bc7e8763e3e6a3393824611c7e5db19_thumbnail_600x%201.svg", 1299),
    (null, "Ruffle Puff Ruched Dresses", "dresses", "https://raw.githubusercontent.com/mart-anthony-stark/Couture-Allure-Assets/3b9524db136fcfbb8f0a2a5337e5aa06807e5cdb/Dresses/1615865022841dea753bc01df5c8cd51807d689752_thumbnail_600x%201.svg", 800),
    (null, "Selena Tiered Smocked Dress", "dresses", "https://raw.githubusercontent.com/mart-anthony-stark/Couture-Allure-Assets/3b9524db136fcfbb8f0a2a5337e5aa06807e5cdb/Dresses/f%201.svg", 999),
    (null, "Luca Puff Sleeve Casual Dress", "dresses", "https://raw.githubusercontent.com/mart-anthony-stark/Couture-Allure-Assets/3b9524db136fcfbb8f0a2a5337e5aa06807e5cdb/Dresses/g%201.svg", 1200);



-- INSERT BAG PRODUCTS
INSERT INTO product
    VALUES(null, "Chain fashion Lady crossbody bag", "bags","https://github.com/mart-anthony-stark/Couture-Allure-Assets/blob/main/Bags/5.jpg?raw=true", 2500),
    (null, "Korean Fashion Leather Sling Bag", "bags","https://github.com/mart-anthony-stark/Couture-Allure-Assets/blob/main/Bags/6.jpg?raw=true", 1999),
    (null, "YZ Korean fashion Canvas sling bag", "bags","https://github.com/mart-anthony-stark/Couture-Allure-Assets/blob/main/Bags/7.jpg?raw=true", 1299),
    (null, "Flagship Korean Fashion Shoulder Leather Bag", "bags","https://github.com/mart-anthony-stark/Couture-Allure-Assets/blob/main/Bags/8.jpg?raw=true", 1999)

