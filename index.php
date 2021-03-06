<?php
include 'header.php';
include 'config.php';

?>
<title><?php echo $siteName; ?> | <?php echo $siteTag; ?></title>
<div class="container">

    <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-6 d-flex align-items-center">
            <div class="spaces align-middle">
                <h1><b>#1 Solution For Legal Policies.</b></h1>
                <a href="#our_products" class="btn btn-primary mt-auto" style="width: 50%;">Get Started</a>
            </div>

        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-6 ">
            <img class="spaces" src="./images/termify-documents.png" alt="" width="90%">
        </div>

    </div>


    <div class="center-wrapper spaces" id="our_products">
        <h1 class="center">Our Awesome Tools</h1>
    </div>








    <div class="row g-3" style="margin-top: 3vh;">


        <div class="col-12 col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
            <div class="card">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 90 91" fill="none">
                    <g clip-path="url(#clip0)">
                        <path d="M73.125 90.1433H16.875C7.55447 90.1433 0 82.5888 0 73.2683V17.0183C0 7.69778 7.55447 0.143311 16.875 0.143311H73.125C82.4455 0.143311 90 7.69778 90 17.0183V73.2683C90 82.5888 82.4455 90.1433 73.125 90.1433Z" fill="#F5E6FE"></path>
                        <path d="M35.3785 45.2083C40.3603 45.2083 44.1185 41.4501 44.1185 36.4683C44.1185 31.4865 40.3603 27.7283 35.3785 27.7283C30.3968 27.7283 26.6386 31.4865 26.6386 36.4683C26.6386 41.4501 30.3968 45.2083 35.3785 45.2083ZM37.8757 47.5755H32.8814C25.9968 47.5755 20.3958 53.1766 20.3958 60.0612V62.5583H22.8929H25.39H45.3671H47.8642H50.3613V60.0612C50.3613 53.1766 44.7603 47.5755 37.8757 47.5755ZM66.0783 35.819L55.3406 46.5367L52.1143 43.3104L48.5834 46.8414L55.3406 53.5936L69.6042 39.355L66.0783 35.819Z" fill="#A817FF"></path>
                    </g>
                    <defs>
                        <clipPath id="clip0">
                            <rect width="90" height="90" fill="white" transform="translate(0 0.143311)"></rect>
                        </clipPath>
                    </defs>
                </svg>
                <h4>Generate Privacy Policy</h4>
                <p> Privacy Policy is a legal document that states how a company or website maintain privacy of visitors.</p>
                <a href="<?php echo $siteUrl; ?>features/privacy-policy-generator.php" class="btn btn-primary mt-auto">Create</a>
            </div>
        </div>


        <div class="col-12 col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
            <div class="card ">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 90 91" fill="none">
                    <path d="M73.125 90.1433H16.875C7.55438 90.1433 0 82.5889 0 73.2683V17.0183C0 7.69769 7.55438 0.143311 16.875 0.143311H73.125C82.4456 0.143311 90 7.69769 90 17.0183V73.2683C90 82.5889 82.4456 90.1433 73.125 90.1433Z" fill="#DFFDE5"></path>
                    <path d="M59.8076 26.81H53.4615V22.2266H49.2307V26.81H40.7692V22.2266H36.5384V26.81H30.1923C27.859 26.81 25.9615 28.8656 25.9615 31.3933V63.4766C25.9615 66.0043 27.859 68.06 30.1923 68.06H59.8076C62.1409 68.06 64.0384 66.0043 64.0384 63.4766V31.3933C64.0384 28.8656 62.1409 26.81 59.8076 26.81ZM30.1923 63.4766V33.685H36.5384H40.7692H49.2307H53.4615H59.8076V31.3933L59.8119 63.4766H30.1923Z" fill="#2BC24F"></path>
                    <path d="M34.423 38.2683H55.5769V42.8516H34.423V38.2683ZM34.423 47.435H45V52.0183H34.423V47.435Z" fill="#2BC24F"></path>
                </svg>
                <h4>Generate Terms & Condition</h4>
                <p>Terms and Conditions is the agreement of guidelines of acceptable behavior.</p>

                <a href="<?php echo $siteUrl; ?>features/terms-and-conditions-generator.php" class="btn btn-primary mt-auto mt-auto">Create</a>


            </div>
        </div>


        <div class="col-12 col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
            <div class="card">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 90 91" fill="none">
                    <path d="M73.125 90.1433H16.875C7.55438 90.1433 0 82.5889 0 73.2683V17.0183C0 7.69769 7.55438 0.143311 16.875 0.143311H73.125C82.4456 0.143311 90 7.69769 90 17.0183V73.2683C90 82.5889 82.4456 90.1433 73.125 90.1433Z" fill="#FFE6E2"></path>
                    <path d="M60.4583 25.2683H29.5417C27.1059 25.2683 25.125 27.2492 25.125 29.685V60.6016C25.125 63.0374 27.1059 65.0183 29.5417 65.0183H47.2083C47.4976 65.0183 47.7825 64.9609 48.0497 64.8505C48.3169 64.7401 48.562 64.5789 48.7696 64.3713L64.228 48.9129C64.4179 48.723 64.5526 48.5 64.6608 48.2659C64.6917 48.1996 64.7094 48.1312 64.7337 48.0605C64.7955 47.875 64.8352 47.6851 64.8463 47.4886C64.8507 47.4422 64.875 47.398 64.875 47.3516V29.685C64.875 27.2492 62.8941 25.2683 60.4583 25.2683ZM29.5417 29.685H60.4583V45.1433H47.2083C45.9871 45.1433 45 46.1326 45 47.3516V60.6016H29.5417V29.685ZM49.4167 57.4791V49.56H57.3358L49.4167 57.4791Z" fill="#FF6249"></path>
                </svg>
                <h4>Generate Disclaimer</h4>
                <p> Disclaimer is an official statement in which you say you are not legally responsible for something.</p>
                <a href="<?php echo $siteUrl; ?>features/disclaimer-generator.php" class="btn btn-primary mt-auto">Create</a>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
            <div class="card">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 90 91" fill="none">
                    <path d="M73.125 90.1433H16.875C7.55438 90.1433 0 82.5889 0 73.2683V17.0183C0 7.69769 7.55438 0.143311 16.875 0.143311H73.125C82.4456 0.143311 90 7.69769 90 17.0183V73.2683C90 82.5889 82.4456 90.1433 73.125 90.1433Z" fill="#EFECFF"></path>
                    <path d="M45 67.2267C56.9713 67.2267 67.0833 57.1147 67.0833 45.1433C67.0833 33.172 56.9713 23.06 45 23.06C33.0286 23.06 22.9166 33.172 22.9166 45.1433C22.9166 57.1147 33.0286 67.2267 45 67.2267ZM45 27.4767C54.5775 27.4767 62.6666 35.5658 62.6666 45.1433C62.6666 54.7209 54.5775 62.81 45 62.81C35.4224 62.81 27.3333 54.7209 27.3333 45.1433C27.3333 35.5658 35.4224 27.4767 45 27.4767Z" fill="#6656B9"></path>
                    <path d="M45 56.185C46.9897 56.185 50.6997 55.814 53.1863 53.3318L50.0638 50.2048C49.0855 51.1831 47.1907 51.7683 45 51.7683C41.4093 51.7683 38.375 48.734 38.375 45.1433C38.375 41.5525 41.4093 38.5183 45 38.5183C47.1929 38.5183 49.0877 39.1035 50.0638 40.0796L53.1863 36.957C50.702 34.4726 46.9897 34.1016 45 34.1016C38.9117 34.1016 33.9584 39.0549 33.9584 45.1433C33.9584 51.2317 38.9117 56.185 45 56.185Z" fill="#6656B9"></path>
                </svg>
                <h4>Generate DMCA</h4>
                <p>DMCA stands for Digital Millennium Copyright Act. As the name implies, it was created around the turn of the last millennium.</p>
                <a href="<?php echo $siteUrl; ?>features/privacy-policy-generator.php" class="btn btn-primary mt-auto">Create</a>
            </div>
        </div>



    </div>

    <div class="row" style="margin-top: 3vh;">

        <div class="col-12">
            <div class="card">

                <h4>Generate All at once</h4>
                <a href="<?php echo $siteUrl; ?>features/all-in-one-generator.php" class="btn btn-warning ">Create</a>
            </div>
        </div>
    </div>
    <hr class="bg-danger border-2 border-top border-danger">
  



</div>



<?php
include 'footer.php';

?>