<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ride-Sharing App Registration</title>
</head>
<body>
    <h1>Register for the Ride-Sharing App</h1>
    <form action="action.php" method="post">
        <!-- Basic Information -->
        <fieldset>
            <legend>Basic Information</legend>
            <label for="fullName">Full Name:</label><br>
            <input type="text" id="fullName" name="fullName" required><br><br>

            <label for="email">Email Address:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="phone">Phone Number:</label><br>
            <input type="tel" id="phone" name="phone" required><br><br>

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br><br>

            <label for="profilePhoto">Profile Photo (optional):</label><br>
            <input type="file" id="profilePhoto" name="profilePhoto"><br><br>
        </fieldset>

        <!-- User Type Dropdown -->
        <fieldset>
            <legend>User Type</legend>
            <label for="userType">Select your user type:</label><br>
            <select id="userType" name="userType" required>
                <option value="rider">Rider</option>
                <option value="driver">Driver</option>
            </select><br><br>
        </fieldset>

        <!-- Preferences Checklist -->
        <fieldset>
            <legend>Preferences</legend>
            <label for="preferences">Select your preferences (multiple choices allowed):</label><br>
            <input type="checkbox" id="smoking" name="preferences[]" value="smoking">
            <label for="smoking">Smoking allowed</label><br>
            <input type="checkbox" id="pets" name="preferences[]" value="pets">
            <label for="pets">Pets allowed</label><br>
            <input type="checkbox" id="music" name="preferences[]" value="music">
            <label for="music">Music preference</label><br><br>
        </fieldset>

        <!-- Gender Radio Buttons -->
        <fieldset>
            <legend>Gender</legend>
            <label for="gender">Select your gender:</label><br>
            <input type="radio" id="male" name="gender" value="male" required>
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label><br><br>
        </fieldset>

        <!-- Submit Button -->
        <input type="submit" value="Register">
    </form>
</body>
</html>
