<style>
    body {
        font-family: "Lato", sans-serif;
    }

    .sidenav {
        height: 100%;
        background-color: #000;
        overflow-x: hidden;
        padding-top: 20px;
    }

    .main {
        padding: 0px 10px;
    }

    .form-group input {
        border-top: none;
        border-left: none;
        border-right: none;
        border-radius: 0;
        border-bottom: 1px solid #ced4da;
        /* You can adjust the color as needed */
        box-shadow: none;
    }

    .form-group input:focus {
        outline: none;
        box-shadow: none;
        border-color: #ced4da;
        /* Set the desired border color on focus */
    }

    .login {
        background-color: #5B86E5;
        color: white;
        font-weight: bold;
        padding: 15px;
    }

    .login:hover {
        background-color: white;
        color: #5B86E5;
    }

    .signup {
        color: #5B86E5;

    }

    .form1 {
        border-radius: 30px;
        height: 92vh; 
        display: flex;
            justify-content: center;
            align-items: center;
    }

    @media screen and (max-width: 768px) {
        .login-form {
            margin-top: 10%;
        }

        .main {
            margin-left: 0;
        }

        .sidenav {
            width: 100%;
            margin-bottom: 20px;
        }

        .login-form {
            margin-top: 0;
        }
    }

    .login-main-text {
        margin-top: 20%;
        padding: 60px;
        color: #fff;
    }

    .login-main-text h2 {
        font-weight: 300;
    }

    .btn-black {
        background-color: #000 !important;
        color: #fff;
    }

    .main-div {
        background-color: #D3D3D3;
    }
</style>
</head>
<div
    class="main-div row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2 d-flex justify-content-around m-3 align-items-center text-white p-3 mx-md-5">
    <div class="bg-dark ">
        <div class="login-main-text">
            <h2>Need webdesign<br>for your business? </h2>
            <h4>Design Spacee will help you. </h4>
        </div>
        <div class="d-flex justify-content-center">
            <img src="images/adplogo.png" alt="" class="w-25 m-3">
        </div>
        <div class="text-white text-center mt-5">www.adp.com.np</div>
    </div>

    <div class="form1 bg-white p-5">
        <div class="w-50 d-flex flex-column align-items-center justify-content-center">
            <div class="">
                <h4 class="mb-5 fw-bold text-dark">Sign-in</h4>
            </div>
            <div class="w-100">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="username" placeholder="Email">
                    </div>
                    <div class="form-group mt-4">
                        <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <button type="submit" class=" login mt-4 w-100">Login</button>
                </form>
                <a href="" class="text-dark text-decoration-none">Forgot Password? </a>
            </div>
        </div>
    </div>
</div>