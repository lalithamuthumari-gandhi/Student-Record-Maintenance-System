<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Student Registration Form </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="registration-container">
        <h2> Registration </h2>
        <section class="details-section">
            <form action="" class="registration-form">
                <!-- Personal Details Section -->
                <h4> Personal Details </h4>
                <section class="personal-details">
                    <div class="three-details-item">
                        <label for="name">
                            <p>First Name</p>
                            <input type="text" name="name" id="name" placeholder="Enter your name">
                        </label>
                        <label for="name">
                            <p>Middle Name</p>
                            <input type="text" name="name" id="name" placeholder="Enter your name">
                        </label>
                        <label for="name">
                            <p>Last Name</p>
                            <input type="text" name="name" id="name" placeholder="Enter your name">
                        </label>
                        <label for="name">
                            <p>Age</p>
                            <input type="text" name="name" id="name" placeholder="Enter your name">
                        </label>
                        <label for="name">
                            <p>Date of birth</p>
                            <input type="date" name="name" id="name" placeholder="Enter your name">
                        </label>
                        
                        <label for="name">
                            <p>Gender</p>
                            <input type="text" name="name" id="name" placeholder="Enter your name">
                        </label>
                        
                        <label for="ph">
                            <p> Mobile Number</p>
                            <input type="tel" name="phone" id="ph" placeholder="Enter mobile number">
                        </label>

                        <label for="address">
                            <p> Address </p>
                            <input type="text" name="address" id="address" placeholder="Enter your Address">
                        </label>

                        
                    </div>

                    <div class="three-details-item">
                        <label for="fName">
                            <p> Father Name </p>
                            <input type="text" name="fName" id="fName" placeholder="Enter father name">
                        </label>
                        <label for="mName">
                            <p>Mother Name</p>
                            <input type="text" name="mName" id="mName" placeholder="Enter mother name">
                        </label>

                        <label for="ph">
                            <p> Parents mobile Number</p>
                            <input type="tel" name="phone" id="ph" placeholder="Enter mobile number">
                        </label>
                        
                        <label for="email">
                            <p>Email</p>
                            <input type="email" name="email" id="email" placeholder="Enter your email">
                        </label>
                    </div>
                    
                    <div class="three-details-item">
                        
                    </div>
                </section>

                <hr>

                <!-- Identity Details Section -->
                <h4> Other Details </h4>
                <section class="identity-details">
                    <div class="three-details-item">
                        <label for="stream">
                            <p> Stream </p>
                            <input type="text" name="stream" id="stream" placeholder="Enter your stream">
                        </label>
                        <label for="previousClass">
                            <p> Previous Class </p>
                            <input type="text" name="previousClass" id="previousClass"
                                placeholder="Enter previous class">
                        </label>
                        <label for="hobbies">
                            <p> Hobbies </p>
                            <input type="text" name="hobbies" id="hobbies" placeholder="Enter your hobbies">
                        </label>
                    </div>
                    <div class="three-details-item">
                        <label for="accNo">
                            <p> Account Number </p>
                            <input type="text" name="accNo" id="accNo" placeholder="Enter account number">
                        </label>
                        <label for="religion">
                            <p> Religion </p>
                            <input type="text" name="religion" id="religion" placeholder="Enter your religion">
                        </label>
                        <label for="category">
                            <p> Category </p>
                            <input type="text" name="category" id="category" placeholder="Enter your category">
                        </label>
                    </div>
                </section>
                <button class="submit-btn"> Submit </button>
            </form>
        </section>
    </section>
</body>

</html>