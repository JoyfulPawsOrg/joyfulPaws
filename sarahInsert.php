<?php
include ('sarahConfig.php');
include ('checkUp-service.php');
include ('vaccination-service.php');
include ('woundTreatment-service.php');
include ('medical-services.php');   

/**********************************************Check up service form***********************************************/
if (isset($_POST['CUToDB'])) {
    // vars
    $serviceType = "Check up";
    $servicePrice= 100.00;

    $petName = $_POST['petName'];
    $petGender = $_POST['petGender'];
    $petType = $_POST['petType'];
    $appointmentDate = date('Y-m-d', strtotime($_POST['appointmentDate'])); //date format
    $appointmentTime = $_POST['appointmentTime'];
    $addInfo = $_POST['addInfo'];
    $contactInfo = $_POST['contactInfo'];

    // Check if the appointment date and time are available
    $sql = "SELECT * FROM clinicSchedule";
    $result = $conn->query($sql);
    $appointmentExists = false;

    //checking
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row['appointmentDate'] === $appointmentDate && $row['appointmentTime'] === $appointmentTime && $row['serviceType'] === $serviceType) {
                $appointmentExists = true;
                break; // Exit the loop if a matching appointment is found
            }
        }
    }
    //After checking
    if ($appointmentExists === true) {
            ?>
            <script> swal('Sorry, it seems that there is an appointment booked on the same day/time. \n Please select another date/time.').then(function() {
            window.location.href = 'checkUp-service.php'; // Redirect after user clicks "OK"
        });</script>
            <?php
    } else {
            $insert = "INSERT INTO clinicSchedule (serviceType, petName, petGender, petType, appointmentDate, appointmentTime, addInfo, contactInfo,servicePrice) 
            VALUES ('$serviceType', '$petName', '$petGender', '$petType', '$appointmentDate', '$appointmentTime', '$addInfo', '$contactInfo','$servicePrice')";
            //did the insertion go well?
            if ($conn->query($insert) === TRUE) {
                ?>
                <script> 
                swal('Thank you!', 'You booked an appointment successfully!', 'success').then(function() {
                window.location.href = 'medical-services.php'; // Redirect after successful booking
            }); </script>;
                <?php
            } else {
                echo "Error: " . $insert . "<br>" . $conn->error;
                
            }
    }
}//EndOfOuterIF
/**********************************************Vaccinations service form***********************************************/
if (isset($_POST['VacToDB'])) {
    // vars
    $serviceType = "Vaccination";
    $servicePrice= 185.50;
    $petName = $_POST['petName'];
    $petGender = $_POST['petGender'];
    $petType = $_POST['petType'];
    $appointmentDate = date('Y-m-d', strtotime($_POST['appointmentDate'])); //date format
    $appointmentTime = $_POST['appointmentTime'];
    $addInfo = $_POST['addInfo'];
    $contactInfo = $_POST['contactInfo'];
    // Check if the appointment date and time are available
    $sql = "SELECT * FROM clinicSchedule";
    $result = $conn->query($sql);
    $appointmentExists = false;
    //checking
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row['appointmentDate'] === $appointmentDate && $row['appointmentTime'] === $appointmentTime  && $row['serviceType'] === $serviceType) {
                $appointmentExists = true;
                break; // Exit the loop if a matching appointment is found
            }
        }
    }
    //After checking
    if ($appointmentExists === true) {
        ?>
        <script> swal('Sorry, it seems that there is an appointment booked on the same day/time. \n Please select another date/time.').then(function() {
            window.location.href = 'vaccination-service.php'; // Redirect after user clicks "OK"
        });</script>
        <?php
} else {
        $insert = "INSERT INTO clinicSchedule (serviceType, petName, petGender, petType, appointmentDate, appointmentTime, addInfo, contactInfo,servicePrice) 
        VALUES ('$serviceType', '$petName', '$petGender', '$petType', '$appointmentDate', '$appointmentTime', '$addInfo', '$contactInfo','$servicePrice')";
        //did the insertion go well?
        if ($conn->query($insert) === TRUE) {
            ?>
            <script> 
            swal('Thank you!', 'You booked an appointment successfully!', 'success').then(function() {
                window.location.href = 'medical-services.php'; // Redirect after successful booking
            }); </script>;
            <?php
        } else {
            echo "Error: " . $insert . "<br>" . $conn->error;
            
        }
}
}//EndOfOuterIF
/**********************************************Wounds treatment service form***********************************************/
if (isset($_POST['WTToDB'])) {
    // vars
    $serviceType = "Wound treatment";
    $servicePrice= 150.00;
    $petName = $_POST['petName'];
    $petGender = $_POST['petGender'];
    $petType = $_POST['petType'];
    $appointmentDate = date('Y-m-d', strtotime($_POST['appointmentDate'])); //date format
    $appointmentTime = $_POST['appointmentTime'];
    $addInfo = $_POST['addInfo'];
    $contactInfo = $_POST['contactInfo'];
    // Check if the appointment date and time are available
    $sql = "SELECT * FROM clinicSchedule";
    $result = $conn->query($sql);
    $appointmentExists = false;
    //checking
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row['appointmentDate'] === $appointmentDate && $row['appointmentTime'] === $appointmentTime  && $row['serviceType'] === $serviceType) {
                $appointmentExists = true;
                break; // Exit the loop if a matching appointment is found
            }
        }
    }
   //After checking
   if ($appointmentExists === true) {
    ?>
    <script> swal('Sorry, it seems that there is an appointment booked on the same day/time. \n Please select another date/time.').then(function() {
            window.location.href = 'woundTreatment-service.php'; // Redirect after user clicks "OK"
        });</script>
    <?php
} else {
    $insert = "INSERT INTO clinicSchedule (serviceType, petName, petGender, petType, appointmentDate, appointmentTime, addInfo, contactInfo,servicePrice) 
    VALUES ('$serviceType', '$petName', '$petGender', '$petType', '$appointmentDate', '$appointmentTime', '$addInfo', '$contactInfo','$servicePrice')";
    //did the insertion go well?
    if ($conn->query($insert) === TRUE) {
        ?>
        <script> 
        swal('Thank you!', 'You booked an appointment successfully!', 'success').then(function() {
                window.location.href = 'medical-services.php'; // Redirect after successful booking
            }); </script>;
        <?php
        //header('location: medical-services.php'); // Redirect after successful booking
    } else {
        echo "Error: " . $insert . "<br>" . $conn->error;
        
    }
}
}//EndOfOuterIF
?>