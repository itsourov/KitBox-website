<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?php echo $siteUrl; ?>main.css?Asj">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body id="body">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <a href="<?php echo $siteUrl; ?>" class="navbar-brand"><img class="logo" src="https://bongofix.com/wp-content/uploads/2021/06/bongofix-logo-300x91.png" height="40px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    <li class="nav-item "><a class="nav-link" href="<?php echo $siteUrl; ?>">Home</a></li>
        

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Features
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?php echo $siteUrl; ?>features/privacy-policy-generator.php">Privacy Policy Generator</a></li>
                            <li><a class="dropdown-item" href="<?php echo $siteUrl; ?>features/terms-and-conditions-generator.php">Terms & Conditions Generator</a></li>
                            <li><a class="dropdown-item" href="<?php echo $siteUrl; ?>features/disclaimer-generator.php">Disclaimer Generator</a></li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="<?php echo $siteUrl; ?>features/all-in-one-generator.php">All in one</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="<?php echo $siteUrl; ?>features/all-in-one-generator.php">Newspaper Theme Activator</a></li>
                       
                        </ul>
                    </li>
                    <li class="nav-item "><a class="nav-link" href="<?php echo $siteUrl; ?>pages/about-us.php">About Us</a></li>
                    <li class="nav-item "><a class="nav-link" href="<?php echo $siteUrl; ?>pages/contact-us.php">Contact Us</a></li>
        
                </ul>
            </div>

        </div>


    </nav>