<form action="insert_iot.php" method="post">
    <div class="form-group">
        <label for="zone">Zone:</label>
        <input type="text" class="form-control" id="zone" name="zone" required>
    </div>
    <div class="form-group">    
        <label for="temp">Temperature:</label>
        <input type="number" class="form-control" id="temp" name="temp" required>   
    </div>
    <div class="form-group">    
        <label for="hum">Humidity:</label>
        <input type="number" class="form-control" id="hum" name="hum" required>
    </div>
    <div class="form-group">
        <label for="user">User:</label>
        <input type="text" class="form-control" id="user" name="user" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
</form>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IOT Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>  
    <div class="container mt-5">
        <h2>IOT Sensor Data Form</h2>
        <form action="insert_iot.php" method="post">
            <div class="form-group">
                <label for="zone">Zone:</label>
                <input type="text" class="form-control" id="zone" name="zone" required>
            </div>
            <div class="form-group">    
                <label for="temp">Temperature:</label>
                <input type="number" class="form-control" id="temp" name="temp" required>   
            </div>
            <div class="form-group">    
                <label for="hum">Humidity:</label>
                <input type="number" class="form-control" id="hum" name="hum" required> 
            </div>
            <div class="form-group  ">
                <label for="user">User:</label>
                <input type="text" class="form-control" id="user" name="user" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>   
            <button type="reset" class="btn btn-secondary">Reset</button>
        </form> 
    </div>
</body>
</html>
<?php   
// This is the end of the form_iot.php file.
// The form allows users to input data for zone, temperature, humidity, and user.
// The form submits the data to insert_iot.php for processing.
// The HTML structure includes Bootstrap for styling and layout.
// The form is wrapped in a container for better presentation.

// The form includes a submit button to send the data and a reset button to clear the form fields.
// The form uses POST method to securely send data to the server.
// The form fields are required, ensuring that users cannot submit the form without filling in all fields.
// The form is designed to be user-friendly and responsive, adapting to different screen sizes.
// The form is ready to be integrated into a web application for collecting IoT sensor data.
// The form can be extended or modified as needed for additional functionality or styling.
// The form is a simple yet effective way to gather IoT sensor data from users.
// The form can be tested by running it on a local server or web hosting environment.

// The form can be accessed through a web browser, allowing users to input their data easily.
// The form is a crucial part of the IoT data collection process, enabling users to contribute
// valuable information about their environment.
// The form can be enhanced with additional features such as validation, error handling, or data visualization


// The form is a starting point for building a more comprehensive IoT data management system.
// The form can be integrated with a database to store the collected data for further analysis.