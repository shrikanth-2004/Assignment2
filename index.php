<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h1>Registration Form</h1>
        <form id="registrationForm" action="#" method="POST">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required pattern="[0-9]{10}">

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>

            <button type="submit">Submit</button>
        </form>
        <div class="res">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $dob = htmlspecialchars($_POST['dob']);
        $gender = htmlspecialchars($_POST['gender']);
        
        echo "<h1>Registration Successful</h1>
              <p><strong>Name:</strong> $name</p>
              <p><strong>Email:</strong> $email</p>
              <p><strong>Phone:</strong> $phone</p>
              <p><strong>Date of Birth:</strong> $dob</p>
              <p><strong>Gender:</strong> $gender</p>";
    }
    ?>
</div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   
</body>
</html>
