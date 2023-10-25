<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Clinic</title>
</head>

<body>
    <h1>Satria Pet Clinic</h1>
    <hr>
    <h3>Form Add Doctor</h3>
    <form action="create_doctor_220051.php" method="post">
        <table>
            <tr>
                <th>Name</th>
                <td><input required type="text" name="doctor_name_220051"></td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>
                    <input required type="radio" name="doctor_gender_220051" value="Male"> Male
                    <input required type="radio" name="doctor_gender_220051" value="Female"> Female
                </td>
            </tr>
            <tr>
                <th>Address</th>
                <td>
                    <textarea name="doctor_address_220051" id="doctor_address_220051" cols="30" rows="5"></textarea>
                </td>
            </tr>
            <tr>
                <th>Phone</th>
                <td><input required type="text" name="doctor_phone_220051"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Save" name="save">
                    <input type="reset" value="Reset" name="reset">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>