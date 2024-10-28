<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking Management System - README</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 20px;
        }
        h1, h2 {
            color: #2C3E50;
        }
        img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            margin-top: 10px;
            margin-bottom: 20px;
        }
        pre {
            background: #f4f4f4;
            padding: 10px;
            border-radius: 5px;
            overflow-x: auto;
        }
        code {
            font-family: Consolas, monospace;
            background-color: #f4f4f4;
            padding: 2px 4px;
            border-radius: 4px;
        }
        a {
            color: #3498DB;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        ul {
            margin-top: 10px;
        }
    </style>
</head>
<body>

<h1>Parking Management System for The Next Center</h1>

<p>A Laravel-based Parking Management System developed as a summer project at <strong>Thames International College</strong>. This system is designed to streamline parking management at The Next Center by reducing congestion and improving operational efficiency.</p>

<h2>Table of Contents</h2>
<ul>
    <li><a href="#project-overview">Project Overview</a></li>
    <li><a href="#features">Features</a></li>
    <li><a href="#technologies-used">Technologies Used</a></li>
    <li><a href="#installation">Installation</a></li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#testing">Testing</a></li>
    <li><a href="#limitations">Limitations</a></li>
    <li><a href="#future-enhancements">Future Enhancements</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
</ul>

<h2 id="project-overview">Project Overview</h2>
<p>The <strong>Parking Management System (PMS)</strong> was created to address parking challenges at The Next Center, a commercial complex that experiences high traffic. Developed as a summer project, this system provides a modern solution for tracking parking availability, managing parking entries and exits, and automating payment processing.</p>

<h2 id="features">Features</h2>
<ul>
    <li><strong>User Module</strong>:
        <ul>
            <li>Real-time display of parking space availability</li>
            <li>Streamlined entry and exit processes</li>
            <li><img src="path/to/your/screenshot/user-module.png" alt="User Module Screenshot"></li>
        </ul>
    </li>
    <li><strong>Admin Module</strong>:
        <ul>
            <li>Manage parking spot availability and monitor usage</li>
            <li>Generate and view parking utilization reports</li>
            <li>Set dynamic rates based on demand</li>
            <li><img src="path/to/your/screenshot/admin-dashboard.png" alt="Admin Dashboard Screenshot"></li>
        </ul>
    </li>
    <li><strong>Payment Integration</strong>:
        <ul>
            <li>Integrated online payment processing for parking fees</li>
            <li><img src="path/to/your/screenshot/payment-page.png" alt="Payment Processing Screenshot"></li>
        </ul>
    </li>
</ul>

<h2 id="technologies-used">Technologies Used</h2>
<ul>
    <li><strong>Backend</strong>: Laravel (PHP framework)</li>
    <li><strong>Frontend</strong>: HTML, CSS, Bootstrap</li>
    <li><strong>Database</strong>: MySQL (using XAMPP)</li>
    <li><strong>Tools and IDE</strong>: Visual Studio Code</li>
    <li><strong>Browsers</strong>: Google Chrome and Microsoft Edge for testing</li>
    <li><strong>Version Control</strong>: Git and GitHub</li>
</ul>

<h2 id="installation">Installation</h2>

<h3>Prerequisites</h3>
<ul>
    <li><a href="https://www.apachefriends.org/index.html">XAMPP</a> (for Apache and MySQL)</li>
    <li><a href="https://getcomposer.org/">Composer</a> (for Laravel dependencies)</li>
</ul>

<h3>Setup Steps</h3>
<pre><code>1. Install XAMPP and Start Services:
   - Start Apache and MySQL services from the XAMPP Control Panel.
   - Open phpMyAdmin (usually at http://localhost/phpmyadmin) and create a database named "parking_management".
   - Alternatively, you can import the provided database file directly into phpMyAdmin.

2. Clone the Repository:
   git clone https://github.com/your-username/parking-management-system.git
   cd parking-management-system

3. Install Dependencies:
   composer install
   npm install && npm run dev

4. Configure Environment Variables:
   - Copy .env.example to .env and set the following:
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=parking_management
     DB_USERNAME=root
     DB_PASSWORD= (leave empty if no password set)

5. Generate Application Key:
   php artisan key:generate

6. Run Migrations (if not using the provided database file):
   php artisan migrate

7. Start the Application:
   php artisan serve

   Access the application at http://localhost:8000.</code></pre>

<h2 id="usage">Usage</h2>
<ul>
    <li><strong>Admin Dashboard</strong>: Access the admin dashboard to manage parking spaces, monitor usage, and view reports.
        <img src="path/to/your/screenshot/admin-dashboard.png" alt="Admin Dashboard Screenshot">
    </li>
    <li><strong>User Module</strong>: Users can view available parking spaces and complete parking-related transactions.
        <img src="path/to/your/screenshot/user-module.png" alt="User Module Screenshot">
    </li>
</ul>

<h2 id="testing">Testing</h2>
<p>The system has been tested for:</p>
<ul>
    <li><strong>Functionality</strong>: Core features like user login, parking availability tracking, and payment processing.</li>
    <li><strong>Performance</strong>: Load testing to handle multiple users concurrently.</li>
    <li><strong>Security</strong>: Basic testing for data integrity and input validation.</li>
</ul>

<h2 id="limitations">Limitations</h2>
<ul>
    <li>Dependence on a stable internet connection for real-time data updates.</li>
    <li>High initial setup costs and dependency on XAMPP for local hosting.</li>
    <li>Limited scalability for larger parking lots or more complex systems.</li>
</ul>

<h2 id="future-enhancements">Future Enhancements</h2>
<ul>
    <li><strong>Smart Parking Sensors</strong>: Integrating IoT sensors for real-time availability updates.</li>
    <li><strong>Advanced Analytics</strong>: Data analysis for usage insights and dynamic rate optimization.</li>
    <li><strong>Automated License Plate Recognition (ALPR)</strong>: To streamline vehicle entry and exit tracking.</li>
</ul>

<h2 id="license">License</h2>
<p>This project is licensed under the MIT License. See the <code>LICENSE</code> file for more details.</p>

<h2 id="contact">Contact</h2>
<p>Developed by Kirtan Shrestha <br>
Thames International College <br>
<a href="mailto:your-email@example.com">your-email@example.com</a></p>

</body>
</html>
