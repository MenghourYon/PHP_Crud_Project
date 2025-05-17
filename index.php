<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "insert into crud (name, email ,mobile , password) 
        values ('$name', '$email', '$mobile', '$password')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "Data Inserted Successfully";
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}
?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Operation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<h1>Welcome to My Crud Project</h1>

<body>
    <div class="container my-3">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter Your Name" name="name" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter Your Email" name="email" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Enter Your Mobile Number" name="mobile" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Enter Your Password" name="password" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
    <title>My Blog</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        /* Button Styling */
        button {
            padding: 10px 20px;
            font-size: 15px;
            cursor: pointer;
            border: none;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Modal Background */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        /* Modal Content Box */
        .modal-content {
            background-color: #fff;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #ccc;
            width: 80%;
            max-width: 400px;
            border-radius: 8px;
            position: relative;
        }

        /* Close Button */
        .close {
            color: #aaa;
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover {
            color: black;
        }
    </style>
    </head>

    <body>
        <!-- About Me Button -->
        <button onclick="openModal()">About Me</button>

        <!-- Modal -->
        <div id="aboutModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <h2>About Me</h2>
                <p>Name : Menghour Yon</p>
                <p>Year : 3</p>
                <p>Class : A6</p>
                <p>Room : 202</p>


            </div>
        </div>

        <!-- JavaScript -->
        <script>
            function openModal() {
                document.getElementById("aboutModal").style.display = "block";
            }

            function closeModal() {
                document.getElementById("aboutModal").style.display = "none";
            }

            // Optional: Close modal if clicking outside content
            window.onclick = function(event) {
                const modal = document.getElementById("aboutModal");
                if (event.target === modal) {
                    modal.style.display = "none";
                }
            }
        </script>
    </body>

</html>