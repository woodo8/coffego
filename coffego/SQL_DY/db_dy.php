<?php
$servername = "localhost";
$username = "root"; // Change to your database username
$password = ""; // Change to your database password

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$dbname = "L11_Yusufzoda_58330_mid2_coffego";
$sql = "CREATE DATABASE $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully\n";
} else {
    echo "Error creating database: " . $conn->error;
}

// Use the created database
$conn->select_db($dbname);

// Create tables
$sql = "
CREATE TABLE Customers_DY (
    customer_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(15)
);

CREATE TABLE Orders_DY (
    order_id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT,
    order_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    total_amount DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (customer_id) REFERENCES Customers_DY(customer_id)
);

CREATE TABLE Products_DY (
    product_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    description TEXT
);

CREATE TABLE OrderItems_DY (
    order_item_id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT,
    product_id INT,
    quantity INT NOT NULL,
    FOREIGN KEY (order_id) REFERENCES Orders_DY(order_id),
    FOREIGN KEY (product_id) REFERENCES Products_DY(product_id)
);

CREATE TABLE Payments_DY (
    payment_id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT,
    payment_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    amount DECIMAL(10, 2) NOT NULL,
    method VARCHAR(50),
    FOREIGN KEY (order_id) REFERENCES Orders_DY(order_id)
);
";

if ($conn->multi_query($sql) === TRUE) {
    echo "Tables created successfully\n";
} else {
    echo "Error creating tables: " . $conn->error;
}

// Wait for multiple queries to complete
while ($conn->more_results() && $conn->next_result()) {}

// Populate tables with sample data
$sql = "
INSERT INTO Customers_DY (name, email, phone) VALUES 
('John Doe', 'john@example.com', '1234567890'),
('Jane Smith', 'jane@example.com', '0987654321'),
('Alice Johnson', 'alice@example.com', '1231231234');

INSERT INTO Products_DY (name, price, description) VALUES 
('Espresso', 3.50, 'Rich and bold espresso.'),
('Cappuccino', 4.00, 'Smooth and creamy cappuccino.'),
('Latte', 4.50, 'Delicious latte with steamed milk.');

INSERT INTO Orders_DY (customer_id, total_amount) VALUES 
(1, 8.00),
(2, 9.00);

INSERT INTO OrderItems_DY (order_id, product_id, quantity) VALUES 
(1, 1, 2),
(1, 2, 1),
(2, 3, 2);

INSERT INTO Payments_DY (order_id, amount, method) VALUES 
(1, 8.00, 'Credit Card'),
(2, 9.00, 'Cash');
";

if ($conn->multi_query($sql) === TRUE) {
    echo "Tables populated successfully\n";
} else {
    echo "Error populating tables: " . $conn->error;
}

$conn->close();

