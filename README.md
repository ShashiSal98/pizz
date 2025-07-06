# pizz - Online Pizza Ordering System for WPS Pizzeria
A simple PHP &amp; MySQL web application for managing an online pizza ordering system with user registration, category management (pizza menu), cart, order placement, feedback, and admin management.

![pizz](https://github.com/user-attachments/assets/97f86df0-9648-4f00-af90-3b92c8007359)

## Features

- User registration and login
- Browse pizza categories and menu
- Add pizzas to cart and place orders
- Select pickup time
- Order history and status tracking
- Admin panel for managing pizzas, categories, and orders
- Feedback and inquiry forms

## Project Structure

- `pizz.sql` &mdash; Database schema and sample data
- PHP source files &mdash; Application logic and UI (place in your web server root, e.g., `htdocs/pizz`)

## Setup Instructions

1. **Clone the repository:**
   ```sh
   git clone https://github.com/ShashiSal98/pizz.git
   ```

2. **Import the database:**
   - Open phpMyAdmin or MySQL CLI.
   - Create a database named `pizz`.
   - Import `pizz.sql` into the `pizz` database.

3. **Configure your environment:**
   - Place the project files in your web server directory (e.g., `C:\xampp\htdocs\pizz`).
   - Update database connection settings in the PHP files if needed.

4. **Run the application:**
   - Start Apache and MySQL via XAMPP.
   - Open `http://localhost/pizz` in your browser.

## Default Admin Login

- **Username:** admin
- **Password:** admin (or as set in the database)

## License

This project is for educational and demonstration

## Author
[Shashi Salwathura](https://github.com/ShashiSal98)

Happy Coding! 🚀
