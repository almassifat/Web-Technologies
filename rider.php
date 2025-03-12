<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIUB RideZ- Rider Registration</title>
</head>
<body>
    <h2>AIUB RideZ- Rider Registration</h2>
    <form>
        <table>
            <tr>
                <th colspan="2">Personal Information</th>
            </tr>
            <tr>
                <td>Full Name:</td>
                <td><input type="text" name="full_name" required></td>
            </tr>
            <tr>
                <td>AIUB Student ID:</td>
                <td><input type="text" name="student_id" required></td>
            </tr>
            <tr>
                <td>University Email:</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Phone Number:</td>
                <td><input type="tel" name="phone" required></td>
            </tr>
            <tr>
                <td>Date of Birth:</td>
                <td><input type="date" name="dob" required></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                    <label><input type="radio" name="gender" value="male" required> Male</label>
                    <label><input type="radio" name="gender" value="female"> Female</label>
                    <label><input type="radio" name="gender" value="other"> Other</label>
                </td>
            </tr>
            <tr>
                <th colspan="2">Vehicle Information</th>
            </tr>
            <tr>
                <td>Vehicle Type:</td>
                <td>
                    <select name="vehicle_type">
                        <option value="car">Car</option>
                        <option value="motorcycle">Motorcycle</option>
                        <option value="other">Other</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Vehicle Model & Year:</td>
                <td><input type="text" name="vehicle_model"></td>
            </tr>
            <tr>
                <td>Vehicle Registration Number:</td>
                <td><input type="text" name="vehicle_registration"></td>
            </tr>
            <tr>
                <td>Vehicle Color:</td>
                <td><input type="text" name="vehicle_color"></td>
            </tr>
            <tr>
                <td>Seating Capacity:</td>
                <td><input type="number" name="seating_capacity" min="1"></td>
            </tr>
            <tr>
                <th colspan="2">Ride Availability & Preferences</th>
            </tr>
            <tr>
                <td>Pickup & Drop-off Locations:</td>
                <td><input type="text" name="ride_locations"></td>
            </tr>
            <tr>
                <td>Preferred Ride Times:</td>
                <td>
                    <label><input type="radio" name="ride_time" value="morning"> Morning</label>
                    <label><input type="radio" name="ride_time" value="evening"> Evening</label>
                    <label><input type="radio" name="ride_time" value="both"> Both</label>
                </td>
            </tr>
            <tr>
                <td>Days Available:</td>
                <td>
                    <label><input type="checkbox" name="days" value="sunday"> Sunday</label>
                    <label><input type="checkbox" name="days" value="monday"> Monday</label>
                    <label><input type="checkbox" name="days" value="tuesday"> Tuesday</label>
                    <label><input type="checkbox" name="days" value="wednesday"> Wednesday</label>
                    <label><input type="checkbox" name="days" value="thursday"> Thursday</label>
                </td>
            </tr>
            <tr>
                <td>Preferred Passengers:</td>
                <td>
                    <label><input type="radio" name="passenger_preference" value="no_preference"> No Preference</label>
                    <label><input type="radio" name="passenger_preference" value="same_gender"> Same Gender Only</label>
                </td>
            </tr>
            <tr>
                <th colspan="2">Identification & Verification</th>
            </tr>
            <tr>
                <td>AIUB Student ID (Upload):</td>
                <td><input type="file" name="student_id_upload"></td>
            </tr>
            <tr>
                <td>Driving License (Upload):</td>
                <td><input type="file" name="license_upload"></td>
            </tr>
            <tr>
                <td>Vehicle Registration Document (Upload):</td>
                <td><input type="file" name="registration_upload"></td>
            </tr>
            <tr>
                <th colspan="2">Terms & Conditions Agreement</th>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    I agree to the terms & conditions of the AIUB Ride-Sharing System. <input type="checkbox" name="terms" required><br>
                    I confirm that my vehicle is legally registered and insured. <input type="checkbox" name="insurance" required>
                </td>
            </tr>
        </table>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
