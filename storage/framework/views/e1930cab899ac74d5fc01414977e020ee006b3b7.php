
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

    <script src="https://www.gstatic.com/firebasejs/ui/4.8.0/firebase-ui-auth.js"></script>
    <link type="text/css" rel="stylesheet" href="https://www.gstatic.com/firebasejs/ui/4.8.0/firebase-ui-auth.css" />

    <script>
        function gotoLogin() {
            window.location = "login.html";
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5-qrcode/2.0.1/html5-qrcode.min.js" integrity="sha512-JXdlXFkKGAhP2yUubNT7hXNjEtPrAJz1Gs7oztdP47KhqL5ux88uof5FnIm2D0Ud/TdqiAe1mM1179kJDy/HKA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body style="
    position: unset;">
    <ons-page>
        <img src="<?php echo e(asset('/assets/wasteinfonet-logo.png')); ?>" alt="logo" class="center" style="width: 50%;">
        <div class="center" style="width:100%;display:grid;position: absolute;bottom:20px;">
            <p style="margin:auto; text-align: center;width: 80%;padding-bottom: 15px;color:white">Join us and work with us and get amazing rewards and benefits.
            </p>
            <a href="<?php echo e(url('login')); ?>" style="text-align: center;">
                <ons-button class="round-btn" >Participate now</ons-button>
            </a>

        </div>
    </ons-page>
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
        background: url(background.png) no-repeat center center fixed !important;
        background-image: linear-gradient(to bottom, rgba(245, 246, 252, 0.52), rgb(0 90 7 / 72%)), url(background.png) !important;
        -webkit-background-size: cover !important;
        -moz-background-size: cover !important;
        -o-background-size: cover !important;
        background-size: cover !important;
    }
</style>

</html>
<?php /**PATH C:\laragon\www\wasteapp2\resources\views/index.blade.php ENDPATH**/ ?>