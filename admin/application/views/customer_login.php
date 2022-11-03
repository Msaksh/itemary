<!DOCTYPE html>

<html>

<head>

    <title>Login Page</title>

    <!--Made with love by Mutiullah Samim -->

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!--Bootsrap 4 CDN-->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles-->

    <link rel="stylesheet" type="text/css" href="styles.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->


    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>



</head>

<body>

    <style type="text/css">
    /* Made with love by Mutiullah Samim*/



    @import url('https://fonts.googleapis.com/css?family=Numans');



    html,
    body {

        background-image: url('<?=base_url('../')?>assets/images/blog2.png');

        background-size: cover;

        background-repeat: no-repeat;

        height: 100%;

        font-family: 'Numans', sans-serif;

    }



    .container {

        height: 100%;

        align-content: center;

    }



    .card {

        height: 370px;

        margin-top: auto;

        margin-bottom: auto;

        width: 400px;

        background-color: rgba(0, 0, 0, 0.5) !important;

    }



    .social_icon span {

        font-size: 60px;

        margin-left: 10px;

        color: #FFC312;

    }



    .social_icon span:hover {

        color: white;

        cursor: pointer;

    }



    .card-header h3 {

        color: white;

    }



    .social_icon {

        position: absolute;

        right: 20px;

        top: -45px;

    }



    .input-group-prepend span {

        width: 50px;

        background-color: #FFC312;

        color: black;

        border: 0 !important;

    }



    input:focus {

        outline: 0 0 0 0 !important;

        box-shadow: 0 0 0 0 !important;



    }



    .remember {

        color: white;

    }



    .remember input {

        width: 20px;

        height: 20px;

        margin-left: 15px;

        margin-right: 5px;

    }



    .login_btn {

        color: black;

        background-color: #FFC312;

        width: 100px;

    }



    .login_btn:hover {

        color: black;

        background-color: white;

    }



    .links {

        color: white;

    }



    .links a {

        margin-left: 4px;

    }

    .error {

        color: red;

    }



    @media only screen and (max-width: 992px) {

        .modal-dialog {

            width: 90% !important;

            margin-left: 20px !important;

            top: 10% !important;

        }

    }
    </style>



    <div class="container">

        <div class="d-flex justify-content-center h-100">

            <div class="card">

                <div class="card-header">

                    <h3>Sign In</h3>

                    <div class="d-flex justify-content-end social_icon">

                        <span><i class="fab fa-facebook-square"></i></span>

                        <span id="login"><i class="fab fa-google-plus-square"></i> </span>

                        <!-- <span><i class="fab fa-twitter-square"></i></span> -->

                    </div>

                </div>

                <div class="card-body">

                    <form>

                        <div class="input-group form-group">

                            <div class="input-group-prepend">

                                <span class="input-group-text"><i class="fas fa-mobile"></i></span>

                            </div>

                            <input type="text" id="number" class="form-control" placeholder="Enter Mobile Number">

                        </div>

                        <div class="form-group">

                            <div id="recaptcha-container"></div>

                            <button style="margin-top: 10px;margin-bottom: 10px" type="button" class="btn btn-primary"
                                onclick="phoneAuth();">Send otp</button><span style="color:green;margin-left: 50px;"
                                id="sms"></span>

                            <div id="verify"></div>

                        </div>

                    </form>

                </div>

                <div class="card-footer">


                </div>

            </div>

        </div>

    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


</body>

</html>


<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>


<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>

<script>
// Your web app's Firebase configuration
var firebaseConfig = {
    // apiKey: "AIzaSyBDxYgmdzKIiUFRK5rmIOCWLUj5QtPSTf4",
    // authDomain: "aktechnology.firebaseapp.com",
    // projectId: "aktechnology",
    // storageBucket: "aktechnology.appspot.com",
    // messagingSenderId: "634141880859",
    // appId: "1:634141880859:web:98aa4d77c902229b2b3ebe",
    // measurementId: "G-KQY23MW9HV"

    apiKey: "AIzaSyA0wnZxQaVp97bjqGQ7UpogufYR0GQaPCk",
    authDomain: "itemary-68292.firebaseapp.com",
    projectId: "itemary-68292",
    storageBucket: "itemary-68292.appspot.com",
    messagingSenderId: "988175432392",
    appId: "1:988175432392:web:046c64a210d6f09cf0c3fd",
    measurementId: "G-GNST3C5ER3"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);
</script>
<script>
window.onload = function() {
    render();
};

function render() {
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
    recaptchaVerifier.render();
}

function phoneAuth() {
    //get the number
    var num = '+91';
    var number = document.getElementById('number').value;
    var number = num + number;
    //phone number authentication function of firebase
    //it takes two parameter first one is number,,,second one is recaptcha
    firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function(confirmationResult) {
        //s is in lowercase
        window.confirmationResult = confirmationResult;
        coderesult = confirmationResult;
        console.log(coderesult);
        var text = "OTP Send Successfully";
        var text1 =
            '<input type="text"  onkeydown="return (event.keyCode!=13);" class="form-control" id="verificationCode" placeholder="Enter verification code"><button type="button" class="btn btn-success mt-2"  onclick="codeverify();">Verify code</button><span style="color:red;margin-left: 50px;" id="error"></span>';
        document.getElementById('verify').innerHTML = text1;
        document.getElementById("sms").innerHTML = text;
    }).catch(function(error) {
        alert(error.message);

    });
}

function codeverify() {
    var code = document.getElementById('verificationCode').value;
    coderesult.confirm(code).then(function(result) {
        // $('.signup').click();
        // $("#signup").modal('hide');   
        customer_login();

        var user = result.user;
        // console.log(user);

    }).catch(function(error) {
        // alert(error.message);     
        var text = "Try Again !!  Invalid OTP";
        document.getElementById("error").innerHTML = text;
    });
}
</script>

<div class="modal fade" id="getCodeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg signup-modal" style="width: 50%;margin-left: 26%;">

        <div class="modal-content">

            <div class="modal-header">

                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->

                <h4 class="modal-title " id="myModalLabel"> Signup Form </h4>

            </div>

            <div class="modal-body" id="getCode" style="overflow-x: scroll;">

                <form id="register-form11144" action="<?=base_url('../')?>customer/customer_signup" method="post">



                    Name: <input id="name" class="form-control mt-0" type="text" name="name" required /><br>



                    Email: <input id="email" class="form-control mt-0" type="email" name="email" required /><br>

                    Moblie: <input id="mobile" class="form-control mt-0" type="text" name="mobile" required /><br>



                    Pincode: <input id="zip" class="form-control mt-0" type="text" name="pin" required><br>



                    Address Type:<select class="form-control" name="addressType" id="addressType"><br>

                        <option>Home</option>

                        <option>Office</option>

                    </select><br>



                    Delivery Address: <input id="address" class="form-control" type="text" name="address"><br>



                    <button class="btn btn-success mt-4 left " type="submit" name="button">Submit

                </form>

            </div>

        </div>

    </div>

</div>


<script type="text/javascript">
$('#register-form').submit(function(event) {

    event.preventDefault();

    var number = document.getElementById('mobile').value;

    var name = document.getElementById('name').value;

    var email = document.getElementById('email').value;

    var address = document.getElementById('address').value;

    var addressType = document.getElementById('addressType').value;

    var zip = document.getElementById('zip').value;


    $.ajax({
        url: '<?=base_url('../')?>customer/customer_signup',
        method: 'post',
        data: {
            name: name,
            number: number,
            email: email,
            address: address,
            zip: zip,
            addressType: addressType
        },
        success: function(event) {
            if (event == 1) {

                toastr.success('Login successfully!');

                window.location.href = "<?=base_url('../cart')?>";

            } else {

                toastr.error('Something went wrong');

            }

        }

    });

});
</script>

<script type="text/javascript">
function customer_login() {

    phone = document.getElementById('number').value;
    $.ajax({

        url: "<?=base_url('../customer/customer_login')?>",
        method: 'post',
        data: {
            phone: phone
        },
        success: function(login) {
            if (login == 1) {

                alert('login success');
                // toastr.success("Login success");         
                window.location.href = "<?=base_url('../cart')?>";

            } else {
                // toastr.info("Pleaes create account");
                $("#getCodeModal").modal('show');

            }

        }

    });



}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<script type="module">
// Import the functions you need from the SDKs you need
import {
    initializeApp
} from "https://www.gstatic.com/firebasejs/9.10.0/firebase-app.js";
import {
    getAnalytics
} from "https://www.gstatic.com/firebasejs/9.10.0/firebase-analytics.js";
import {
    getAuth,
    GoogleAuthProvider,
    signInWithRedirect,
    getRedirectResult
} from "https://www.gstatic.com/firebasejs/9.10.0/firebase-auth.js";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
    apiKey: "AIzaSyA0wnZxQaVp97bjqGQ7UpogufYR0GQaPCk",
    authDomain: "itemary-68292.firebaseapp.com",
    projectId: "itemary-68292",
    storageBucket: "itemary-68292.appspot.com",
    messagingSenderId: "988175432392",
    appId: "1:988175432392:web:046c64a210d6f09cf0c3fd",
    measurementId: "G-GNST3C5ER3"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const auth = getAuth(app);
const provider = new GoogleAuthProvider(app);
const analytics = getAnalytics(app);

login.addEventListener('click', (e) => {

    signInWithRedirect(auth, provider);
    getRedirectResult(auth)
        .then((result) => {
            // This gives you a Google Access Token. You can use it to access Google APIs.
            const credential = GoogleAuthProvider.credentialFromResult(result);
            const token = credential.accessToken;

            // The signed-in user info.
            const user = result.user;
            console.log(result);
            alert(user);
        }).catch((error) => {
            // Handle Errors here.
            const errorCode = error.code;
            const errorMessage = error.message;
            // The email of the user's account used.
            const email = error.customData.email;
            // The AuthCredential type that was used.
            const credential = GoogleAuthProvider.credentialFromError(error);
            // ...
        });
});
</script>