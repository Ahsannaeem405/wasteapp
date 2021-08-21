<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to Firebase Hosting</title>

    <!-- update the version number as needed -->
    <script defer src="/__/firebase/8.6.3/firebase-app.js"></script>
    <!-- include only the Firebase features as you need -->
    <script defer src="/__/firebase/8.6.3/firebase-auth.js"></script>
    <script defer src="/__/firebase/8.6.3/firebase-database.js"></script>
    <!--
      initialize the SDK after all desired features are loaded, set useEmulator to false
      to avoid connecting the SDK to running emulators.
    -->
    <script defer src="/__/firebase/init.js?useEmulator=true"></script>

    <style media="screen">
        body {
            background: #ECEFF1;
            color: rgba(0, 0, 0, 0.87);
            font-family: Roboto, Helvetica, Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        #message {
            background: white;
            max-width: 360px;
            margin: 100px auto 16px;
            padding: 32px 24px;
            border-radius: 3px;
        }

        #message h2 {
            color: #ffa100;
            font-weight: bold;
            font-size: 16px;
            margin: 0 0 8px;
        }

        #message h1 {
            font-size: 22px;
            font-weight: 300;
            color: rgba(0, 0, 0, 0.6);
            margin: 0 0 16px;
        }

        #message p {
            line-height: 140%;
            margin: 16px 0 24px;
            font-size: 14px;
        }

        #message a {
            display: block;
            text-align: center;
            background: #039be5;
            text-transform: uppercase;
            text-decoration: none;
            color: white;
            padding: 16px;
            border-radius: 4px;
        }

        #message,
        #message a {
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        }

        #load {
            color: rgba(0, 0, 0, 0.4);
            text-align: center;
            font-size: 13px;
        }

        @media (max-width: 600px) {
            body,
            #message {
                margin-top: 0;
                background: white;
                box-shadow: none;
            }
            body {
                border-top: 16px solid #ffa100;
            }
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .round-btn {
            margin: auto !important;
            width: 85%;
            text-align: center;
            border-radius: 30px !important;
        }

        .page--material__background {
    background-color: white !important;
    /* background-color: #eceff1; */
}

body {
            background: #ECEFF1;
            color: rgba(0, 0, 0, 0.87);
            font-family: Roboto, Helvetica, Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        #message {
            background: white;
            max-width: 360px;
            margin: 100px auto 16px;
            padding: 32px 24px;
            border-radius: 3px;
        }

        #message h2 {
            color: #ffa100;
            font-weight: bold;
            font-size: 16px;
            margin: 0 0 8px;
        }

        #message h1 {
            font-size: 22px;
            font-weight: 300;
            color: rgba(0, 0, 0, 0.6);
            margin: 0 0 16px;
        }

        #message p {
            line-height: 140%;
            margin: 16px 0 24px;
            font-size: 14px;
        }

        #message a {
            display: block;
            text-align: center;
            background: #039be5;
            text-transform: uppercase;
            text-decoration: none;
            color: white;
            padding: 16px;
            border-radius: 4px;
        }

        #message,
        #message a {
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        }

        #load {
            color: rgba(0, 0, 0, 0.4);
            text-align: center;
            font-size: 13px;
        }

        @media (max-width: 600px) {
            body,
            #message {
                margin-top: 0;
                background: white;
                box-shadow: none;
            }
            body {
                border-top: 16px solid #ffa100;
            }
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .round-btn {
            margin: auto !important;
            width: 85%;
            text-align: center;
            border-radius: 30px !important;
        }
    </style>


    <script>
        function gotoLogin() {
            window.location = "login";
        }
    </script>
    <script src="https://www.gstatic.com/firebasejs/ui/4.8.0/firebase-ui-auth.js"></script>
    <link type="text/css" rel="stylesheet" href="https://www.gstatic.com/firebasejs/ui/4.8.0/firebase-ui-auth.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5-qrcode/2.0.1/html5-qrcode.min.js" integrity="sha512-JXdlXFkKGAhP2yUubNT7hXNjEtPrAJz1Gs7oztdP47KhqL5ux88uof5FnIm2D0Ud/TdqiAe1mM1179kJDy/HKA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body style="position: unset;">


    <?php echo $__env->yieldContent('content'); ?>


</body>
<link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsenui.css">
<link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsen-css-components.min.css">
<script src="https://unpkg.com/onsenui/js/onsenui.min.js"></script>


</html>
<link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsenui.css">
<link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsen-css-components.min.css">
<script src="https://unpkg.com/onsenui/js/onsenui.min.js"></script>

<style>
    .page__content {
        -webkit-background-size: cover !important;
        -moz-background-size: cover !important;
        -o-background-size: cover !important;
        background-size: cover !important;
    }
</style>

</html>

<?php /**PATH C:\laragon\www\wasteapp2\resources\views/layout/default.blade.php ENDPATH**/ ?>