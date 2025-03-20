

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    discount_price DECIMAL(10,2) NOT NULL,
    rating FLOAT NOT NULL,
    image VARCHAR(255) NOT NULL
);

INSERT INTO products (name, price, discount_price, rating, image) VALUES
('Sandwich Bread', 24.00, 18.00, 4.5, 'images/product-thumb-26.png'),
('Whole Wheat Bread', 20.00, 15.00, 4.8, 'images/product-thumb-30.png'),
('Baguette', 22.00, 19.00, 4.2, 'images/product-thumb-24.png'),
('Croissant', 18.00, 14.00, 4.7, 'images/product-thumb-25.png'),
('Croissant', 18.00, 14.00, 4.7, 'images/product-thumbnail-3.jpg'),
('Multigrain Bread', 26.00, 21.00, 4.3, 'images/product-large-5.jpg');
