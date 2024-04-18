<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Form</title>
    <style>
        body {
            display: flex;
            justify-content: center;
           
            height: 100vh;
            margin: 0;
        }
        form {
            width: 100%;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="date"] {
            width: calc(100% - 12px);
            padding: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<form action="proses_tambahsertifikat.php" method="POST">
    <h2 style="text-align: center;">Input Data Event</h2>
  
    <label for="participant_name">Participant Name:</label>
    <input type="text" id="participant_name" name="participant_name">
    <label for="event_name">Event Name:</label>
    <input type="text" id="event_name" name="event_name">
    <label for="event_date">Event Date:</label>
    <input type="date" id="event_date" name="event_date">
    <label for="certificate_text">Certificate Text:</label>
    <input type="text" id="certificate_text" name="certificate_text">
    <br><br>
    <input type="submit" value="Submit">

</form>


</body>
</html>