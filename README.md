# Coffee Shop Management System
## Introduction
The Coffee Shop Management System is a web-based application designed to manage the operations of a coffee shop. It allows for the management of customers, orders, products, order items, and payments. The system is built using PHP and MySQL, with a Bootstrap frontend for a responsive user interface.

## Features
Add, view, and manage customers.
Add, view, and manage orders.
Add, view, and manage products.
Add, view, and manage order items.
Add, view, and manage payments.

## Installation
To set up the project locally, follow these steps:

### 1. Clone the repository:
`git clone https://github.com/yourusername/coffeeshop-management-system.git`
`cd coffeeshop-management-system`

### 2. Set up the database:

Ensure you have MySQL installed and running.
Create a new database and import the database.sql file provided in the repository.
`mysql -u yourusername -p yourpassword < database.sql`

### 3. Configure the database connection:

Update the db_connect_dy.php file with your database credentials.

```
$servername = "localhost";
$username = "your_db_username";
$password = "your_db_password";
$dbname = "L11_Yusufzoda_58330_mid2_coffego";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
```

### 4. Run the application:

Place the project in your web server's root directory (e.g., htdocs for XAMPP, www for WAMP).
Start your web server and navigate to the project in your browser.

## Usage
1. Add Customers:
Navigate to addCustomers_dy.php to add new customers.

2. Add Products:
Navigate to addProducts_dy.php to add new products.

3. Add Orders:
Navigate to addOrders_dy.php to create new orders.

4. Add Order Items:
Navigate to addOrderItems_dy.php to add items to an order.

5. Add Payments:
Navigate to addPayments_dy.php to add payments for orders.

## Technologies Used
Frontend:
-HTML
-CSS
-Bootstrap

Backend:
-PHP
-MySQL

## Database Schema
The database schema includes the following tables:

Customers_DY
Orders_DY
Products_DY
OrderItems_DY
Payments_DY

P.S: Each table has the necessary foreign key constraints to maintain data integrity.

