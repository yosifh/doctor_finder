<?php
session_start();

// Check if user is logged in, if not, redirect them back to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

// If form is submitted, handle the form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Your form handling logic here
    $name = $_POST["name"] ?? '';
    $phone = $_POST["phone"] ?? '';
    $city = $_POST["city"] ?? '';
    $location = $_POST["location"] ?? '';
    $discription = $_POST["discription"] ?? '';
    $nots = $_POST["nots"] ?? '';
    $spec = $_POST["spec"] ?? '';

    // Your database insertion logic here
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "app";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
    }

    $sql = "INSERT INTO  doctors (full_name, phone, city_id, location, discription, nots, spec_id) VALUES ('$name','$phone','$city','$location', '$discription','$nots', '$spec')";

    if ($conn->query($sql) === TRUE) {
        echo "تمت إضافة البيانات بنجاح";
    } else {
        echo "خطأ: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        الاسم الكامل <input type="text" name="name">
        رقم هاتق الحجز <input type="text" name="phone">
        موقع العيادة <input type="text" name="location">
        وصف الدكتور <input type="text" name="discription">
        الملاحضات <input type="text" name="nots">
        <select name="city" type="number">
            <option value="16"> كربلاء</option>
        </select>
        <br>
        التخصص <select name="spec" type="number">
            <option value="1">جملة عصبية </option>
        </select>
        <input type="submit" value="حفظ">
    </form>
</body>
</html>
