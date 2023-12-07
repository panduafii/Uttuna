<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="CSS/Profile.css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;500;700;800;900&display=swap" rel="stylesheet">

</head>

<body>
    <!-- Atas -->
    <div class="atas">
        <h1>WONDERFUL NATUNA</h1>
    </div>

    <!-- Bawah -->
    <div class="bawah">
        <div class="header">
            <h1><ion-icon name="person"></ion-icon> Account Settings</h1>
        </div>
        <div class="isi">
            <!-- <h4><ion-icon name="create"></ion-icon> Edit your profile</h4> -->
            <form action="#">
                <!-- Input Form -->
                <!-- Username -->
                <div class="input-box">
                    <span class="icon"><ion-icon name="people"></ion-icon></span>
                    <input type="text" required>
                    <label for="username">Username</label>
                </div>

                <!-- Phone -->
                <div class="input-box">
                    <span class="icon"><ion-icon name="call"></ion-icon></span>
                    <input type="phone" required>
                    <label for="phone">Phone Number</label>
                </div>

                <!-- Email -->
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" required>
                    <label for="email">Email</label>
                </div>

                <!-- Password -->
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="Password" required>
                    <label for="Password">Password</label>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="button">Save Changes</button>
            </form>
        </div>

    <!-- Import Icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    </div>
</body>