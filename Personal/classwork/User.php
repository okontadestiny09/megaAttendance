<?php 
session_start();
include "Validation.php"; 

class User extends Validation {

    public function save($name, $phone, $password, $dob) {
        if (!$this->validName($name)) {
            return array("status" => "error", "message" => "Name is required");
        }
        elseif (!$this->validPhone($phone)) {
            return array("status" => "error", "message" => "Phone number must be 11 digits");
        }
        elseif (!$this->validPassword($password)) {
            return array("status" => "error", "message" => "Password must be more than 6 characters");
        }
        elseif (!$this->validDOB($dob)) {
            return array("status" => "error", "message" => "You must be 18 years or older");
        }
        else {
            return array("status" => "success", "message" => "Valid data, saved successfully");
        }
    }
}

$result = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"] ?? "";
    $phone = $_POST["phone"] ?? "";
    $password = $_POST["password"] ?? "";
    $dob = $_POST["dob"] ?? "";
    
    $user = new User();
    $result = $user->save($name, $phone, $password, $dob);
    
    if ($result["status"] == "error") {
        $_SESSION["form_data"] = array(
            "name" => $name,
            "phone" => $phone,
            "password" => $password,
            "dob" => $dob
        );
    } else {
        unset($_SESSION["form_data"]);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php if ($result): ?>
            <div class="alert <?php echo $result['status']; ?>">
                <?php echo $result['message']; ?>
            </div>
            <a href="User.php" class="back-btn">Back</a>
        <?php endif; ?>
        
        <form method="POST" action="User.php" id="userForm">
            <div class="form-group">
                <label for="name">Name:</label>
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    placeholder="Enter your full name" 
                    value="<?php echo isset($_SESSION['form_data']['name']) ? $_SESSION['form_data']['name'] : ''; ?>"
                    required
                >
            </div>

            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input 
                    type="text" 
                    id="phone" 
                    name="phone" 
                    placeholder="Enter 11-digit phone number" 
                    value="<?php echo isset($_SESSION['form_data']['phone']) ? $_SESSION['form_data']['phone'] : ''; ?>"
                    maxlength="11"
                    required
                >
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    placeholder="At least 6 characters" 
                    value="<?php echo isset($_SESSION['form_data']['password']) ? $_SESSION['form_data']['password'] : ''; ?>"
                    required
                >
            </div>
             <div class="form-group">
                <label for="dob">Date Of Birth:</label>
                <input 
                    type="date" 
                    id="dob" 
                    name="dob" 
                    value="<?php echo isset($_SESSION['form_data']['dob']) ? $_SESSION['form_data']['dob'] : ''; ?>"
                    style="padding: 10px; font-size: 16px; border: 2px solid #ddd; border-radius: 4px; width: 100%; box-sizing: border-box; transition: border-color 0.3s; cursor: pointer;"
                    required
                >
            </div>

            <div class="button-group">
                <button type="submit">Submit</button>
                <button type="reset">Clear</button>
            </div>
        </form>

        

            <!-- <div class="info">
                <strong>Validation Requirements:</strong>
                • Name: Required (not empty)<br>
                • Phone: Must be exactly 11 digits<br>
                • Password: At least 6 characters
            </div> -->
    </div>
</body>
</html>