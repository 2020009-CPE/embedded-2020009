<h1>Summer Project Phonebook / API</h1>

<p><strong>Website:</strong> <a href="https://embedded-2020009.000webhostapp.com/" target="_blank">https://embedded-2020009.000webhostapp.com/</a></p>

<h2>Testing the API</h2>
<p>To test the API, you can use the following endpoints:</p>

<ul>
  <li><strong>Add a new user:</strong> <a href="https://embedded-2020009.000webhostapp.com/api_testing/add_user.php" target="_blank">https://embedded-2020009.000webhostapp.com/api_testing/add_user.php</a></li>
  <li><strong>Read the API:</strong> <a href="https://embedded-2020009.000webhostapp.com/api_testing/read_api.php" target="_blank">https://embedded-2020009.000webhostapp.com/api_testing/read_api.php</a></li>
</ul>

<h2>API Location</h2>
<p>The API is located in the <code>API-TESTING</code> folder.</p>

<h2>Database Setup</h2>
<p>To use the API and the Phonebook features, you need to set up the required database tables. Below are the SQL commands to create the necessary tables in your SQL database:</p>

<h3>Table: users</h3>
<pre>
<code>
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
</code>
</pre>
<p>Copy and paste the above SQL code into your SQL database management tool or command line to create the 'users' table.</p>

<h3>Table: contacts</h3>
<pre>
<code>
CREATE TABLE `contacts` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `owner` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
</code>
</pre>
<p>Copy and paste the above SQL code into your SQL database management tool or command line to create the 'contacts' table.</p>

<h3>Table: user (API)</h3>
<pre>
<code>
CREATE TABLE `user` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phoneNumber` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
</code>
</pre>
<p>Copy and paste the above SQL code into your SQL database management tool or command line to create the 'user' table for the API.</p>
