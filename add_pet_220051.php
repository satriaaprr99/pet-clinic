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
    <h3>Form Add Pet</h3>
    <form action="create_pet_220051.php" method="post">
        <table>
            <tr>
                <th>Name</th>
                <td><input required type="text" name="pet_name_220051"></td>
            </tr>
            <tr>
                <th>Type</th>
                <td>
                    <select required name="pet_type_220051" id="pet_type_220051">
                        <option value="">Choose</option>
                        <option value="Cat">Cat</option>
                        <option value="Dog">Dog</option>
                        <option value="Reptil">Reptil</option>
                        <option value="Bird">Bird</option>
                        <option value="Rodent">Rodent</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>
                    <input required type="radio" name="pet_gender_220051" value="Male"> Male
                    <input required type="radio" name="pet_gender_220051" value="Female"> Female
                </td>
            </tr>
            <tr>
                <th>Age</th>
                <td><input required type="number" name="pet_age_220051"></td>
            </tr>
            <tr>
                <th>Owner</th>
                <td><input required type="text" name="pet_owner_220051"></td>
            </tr>
            <tr>
                <th>Address</th>
                <td>
                    <textarea name="pet_address_220051" id="pet_address_220051" cols="30" rows="5"></textarea>
                </td>
            </tr>
            <tr>
                <th>Phone</th>
                <td><input required type="text" name="pet_phone_220051"></td>
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