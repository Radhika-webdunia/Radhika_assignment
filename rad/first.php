<h2>User Login</h2>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<link rel="stylesheet" href="form.css">
<html>
<head>
<link href="./view/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div>
        <form action="userreg.php" method="post" id="" onSubmit="return validate();">
            <div class="demo-table">

                
                
                <div class="body-content">
                <div class="module">
                    <h1>Login form</h1>
                <div class="field-column">
                    <div>
                        <label for="username">Username</label><span id="user_info" class="error-info"></span>
                    </div>
                    <div>
                        <input name="user_name" id="user_name" type="text"
                            class="demo-input-box" required>
                    </div>
                </div>
                <div class="field-column">
                    <div>
                        <label for="password">Password</label><span id="password_info" class="error-info" required></span>
                    </div>
                    <div>
                        <input name="password" id="password" type="password"
                            class="demo-input-box" required>
                    </div>
                </div>
                <div class=field-column>
                    <div>
                        <input type="submit" value="Login" name="Login" class="btn btn-block btn-primary" />
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>