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
    <script src="https://unpkg.com/jquery/dist/jquery.min.js"></script>
    <script defer src="/__/firebase/init.js?useEmulator=true"></script>
    <script>
        $(document).ready(function() { // FirebaseUI config.

            // Set the configuration for your app
            // TODO: Replace with your project's config object
            var config = {
                apiKey: "{YOUR_API_KEY}",
                authDomain: "{YOUR_AUTH_DOMAIN}",
                // For databases not in the us-central1 location, databaseURL will be of the
                // form https://[databaseName].[region].firebasedatabase.app.
                // For example, https://your-database-123.europe-west1.firebasedatabase.app
                databaseURL: "{YOUR_DATABASE_URL}/",
                storageBucket: "wasteinfonet.com"
            };
            //            firebase.initializeApp(config);

            logout = function() {
                firebase.auth().signOut();
            }


            function getLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition);
                } else {

                }
            }

            function showPosition(position) {
                if (position) {
                    localStorage.setItem('latitude', position.coords.latitude)
                    localStorage.setItem('longitude', position.coords.longitude)
                }
            }
            updateProfile = function() {
                console.log("Update Profile")
                let user = JSON.parse(localStorage.getItem("user"));

                firebase.database().ref('users/' + user.uid).set({
                    firstname: document.getElementById('Name').value,
                    lastname: document.getElementById('Surename').value,
                    country: document.getElementById('Country').value,
                    city: document.getElementById('City').value,
                    address: document.getElementById('Address').value,
                    zip: document.getElementById('Postal Code').value,
                    age: document.getElementById('Age').value,
                    latitude: localStorage.getItem('latitude'),
                    longitude: localStorage.getItem('longitude'),
                    completeRegistration: true
                }).then(() => {
                    window.location = "email-sent.html";
                });


            };

            loadProfile = function() {
                const dbRef = firebase.database().ref();
                let user = JSON.parse(localStorage.getItem("user"));
                $('#firebaseui-auth-container').hide();
                if (user) {
                    dbRef.child("users").child(user.uid).get().then((snapshot) => {
                        if (snapshot.exists()) {
                            let profile = snapshot.val();
                            if (profile.completeRegistration !== undefined) {
                                if (profile.completeRegistration) {
                                    window.location = "login.html";
                                }
                            }
                        } else {
                            console.log("No data available");
                        }
                    }).catch((error) => {
                        console.error(error);
                    });
                }
            };

            initApp = function() {

                firebase.auth().onAuthStateChanged(function(user) {
                        if (user) {
                            user.sendEmailVerification()
                            localStorage.setItem('user', JSON.stringify(user));
                            user.getIdToken().then(function(accessToken) {
                                localStorage.setItem('token', JSON.stringify(accessToken));
                            });
                        } else {
                            window.location = "login.html";
                        }
                    },
                    function(error) {
                        console.log(error);
                    });
            };

            loadProfile();
            showPosition();
            var uiConfig = {
                signInOptions: [
                    // Leave the lines as is for the providers you want to offer your users.
                    firebase.auth.GoogleAuthProvider.PROVIDER_ID,
                    firebase.auth.EmailAuthProvider.PROVIDER_ID
                ],
                // tosUrl and privacyPolicyUrl accept either url string or a callback
                // function.
                // Terms of service url/callback.
                tosUrl: '<your-tos-url>',
                // Privacy policy url/callback.
                privacyPolicyUrl: function() {
                    window.location.assign('<your-privacy-policy-url>');
                }
            };

            // Initialize the FirebaseUI Widget using Firebase.
            var ui = new firebaseui.auth.AuthUI(firebase.auth());
            // The start method will wait until the DOM is loaded.
            ui.start('#firebaseui-auth-container', uiConfig);
        });
    </script>
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

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
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
    </style>
    <script>
        function gotoEmailSent() {
            window.location = "email-sent.html";
        }
    </script>
    <script src="https://www.gstatic.com/firebasejs/ui/4.8.0/firebase-ui-auth.js"></script>
    <link type="text/css" rel="stylesheet" href="https://www.gstatic.com/firebasejs/ui/4.8.0/firebase-ui-auth.css" />


    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5-qrcode/2.0.1/html5-qrcode.min.js" integrity="sha512-JXdlXFkKGAhP2yUubNT7hXNjEtPrAJz1Gs7oztdP47KhqL5ux88uof5FnIm2D0Ud/TdqiAe1mM1179kJDy/HKA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <ons-page id="registration">
        <div id="firebaseui-auth-container" style="margin-top:10px"></div>
        <img src="wasteinfonet-logo.png" alt="logo" class="center" style="width: 50%;">
        <div style="text-align: center; margin-top: 30px;">

            <p>
                <ons-input class="round-btn" id="Name" modifier="underbar" placeholder="Name" float></ons-input>
            </p>
            <p>
                <ons-input class="round-btn" id="Surename" modifier="underbar" placeholder="Surename" float></ons-input>
            </p>
            <p>
                <ons-input class="round-btn" id="Country" modifier="underbar" placeholder="Country" float></ons-input>
            </p>
            <p>
                <ons-input class="round-btn" id="City" modifier="underbar" placeholder="City" float></ons-input>
            </p>
            <p>
                <ons-input class="round-btn" id="Address" modifier="underbar" placeholder="Address" float></ons-input>
            </p>
            <p>
                <ons-input class="round-btn" id="Postal Code" modifier="underbar" placeholder="Postal Code" float></ons-input>
            </p>
            <p>
                <ons-input class="round-btn" id="Age" modifier="underbar" type="number" placeholder="Age" float></ons-input>
            </p>

            <p>
                <ons-button class="round-btn" id="create-account" onclick="updateProfile()">Complete registration</ons-button>
            </p>
            <p>We already sent an email, check it or review the spam folder and complete the registration process.</p>
            <p>By tapping “save information and create your account” you are accepting the
                <a href="#">Terms and Conditions & Policy of the WasteInfonet App</a>. </p>
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
        background-color: white !important;
    }

    .round-btn {
        margin: auto !important;
        width: 85%;
        text-align: center;
        border-radius: 30px !important;
    }
</style>

</html>
<?php /**PATH C:\laragon\www\wasteapp2\resources\views/registration.blade.php ENDPATH**/ ?>