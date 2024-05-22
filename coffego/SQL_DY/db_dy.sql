-- Create database
CREATE DATABASE IF NOT EXISTS L11_Yusufzoda_58330_mid2_coffego;

-- Use the created database
USE L11_Yusufzoda_58330_mid2_coffego;

-- Create Customers_DY table
CREATE TABLE Customers_DY (
    customer_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(15)
);

-- Create Orders_DY table
CREATE TABLE Orders_DY (
    order_id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT,
    order_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    total_amount DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (customer_id) REFERENCES Customers_DY(customer_id)
);

-- Create Products_DY table
CREATE TABLE Products_DY (
    product_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    description TEXT
);

-- Create OrderItems_DY table
CREATE TABLE OrderItems_DY (
    order_item_id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT,
    product_id INT,
    quantity INT NOT NULL,
    FOREIGN KEY (order_id) REFERENCES Orders_DY(order_id),
    FOREIGN KEY (product_id) REFERENCES Products_DY(product_id)
);

-- Create Payments_DY table
CREATE TABLE Payments_DY (
    payment_id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT,
    payment_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    amount DECIMAL(10, 2) NOT NULL,
    method VARCHAR(50),
    FOREIGN KEY (order_id) REFERENCES Orders_DY(order_id)
);

-- Insert sample data into Customers_DY table
INSERT INTO Customers_DY (name, email, phone) VALUES 
('John Doe', 'john@example.com', '1234567890'),
('Jane Smith', 'jane@example.com', '0987654321'),
('Alice Johnson', 'alice@example.com', '1231231234');

-- Insert sample data into Products_DY table
INSERT INTO Products_DY (name, price, description) VALUES 
('Espresso', 3.50, 'Rich and bold espresso.'),
('Cappuccino', 4.00, 'Smooth and creamy cappuccino.'),
('Latte', 4.50, 'Delicious latte with steamed milk.');

-- Insert sample data into Orders_DY table
INSERT INTO Orders_DY (customer_id, total_amount) VALUES 
(1, 8.00),
(2, 9.00);

-- Insert sample data into OrderItems_DY table
INSERT INTO OrderItems_DY (order_id, product_id, quantity) VALUES 
(1, 1, 2),
(1, 2, 1),
(2, 3, 2);

-- Insert sample data into Payments_DY table
INSERT INTO Payments_DY (order_id, amount, method) VALUES 
(1, 8.00, 'Credit Card'),
(2, 9.00, 'Cash');
