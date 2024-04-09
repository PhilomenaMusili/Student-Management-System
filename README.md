# Student Management System

The Student Management System is a web application designed to manage student information, courses, and teacher details within an educational institution.

## Features

- **User Authentication:Secure login system for administrators.
- Teacher Information: Display details of teachers, including name, image, and description.
- Courses: Showcase various courses offered by the institution.
- Admission Form: Allow prospective students to submit admission inquiries.

## Installation

1. Clone the repository:

    git clone https://github.com/your-username/student-management-system.git
  
2. Set up the database:

    - Create a MySQL database named `school_project`.
    - Import the provided SQL file (`database.sql`) into your database.

3. Configure database connection:

    Update the database connection details in your PHP script (`index.php`):

    ```php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "school_project";
    ```

4. Run the application:

    Start a PHP development server:

    php -S localhost:8000
    
    Open your browser and visi [http://localhost:8000/](http://localhost:8000/) to access the Student Management System.

## Usage

To use it follow the following 
- Navigate to the home page to view information about the school, teachers, courses, and access the admission form.

- Teachers' details are dynamically fetched from the database and displayed on the webpage.
- The admission form allows prospective students to submit their details for further processing.

## Customization

- Add, update, or remove teachers by modifying the `teacher` table in the database.
- Customize the course information by updating the content in the "Our Courses" section.
- Modify the CSS styles in `styles.css` to match the visual theme of your institution.

## Contributing

Contributions are welcome! If you find any bugs or have suggestions for improvements, feel free to open an issue or submit a pull request.

**Note:** This README assumes that you have a MySQL database server running locally. Adjust the database connection details based on your environment.

