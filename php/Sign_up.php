<html>
    <head>
        <title>Sign up</title>
        <link href="../Resources/css/sign_up.css" rel="stylesheet" type="text/css">
        <link href="../Vendors/normalize.css" rel="stylesheet" type="text/css">
        <link href="../Vendors/grid.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header>
            <div>
                <!--------------------sign-up------------------->
                <h2> Sign up</h2>
            </div>
            <div class="row right">
                <!------------------form fill up -------------------->
                <form method="post" action="./registration.php" class="contact-form up">
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="name">Name</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="name" name="name" id="name" autocomplete="off" placeholder="Name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="phone">Phone</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="number" name="phone" id="phone" autocomplete="off" placeholder="Phone" required>
                        </div>
                    </div>
                     <div class="row">   
                        <div class="col span-1-of-3">
                            <label for="email">Email</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="email" name="email" id="email" autocomplete="off" placeholder="Email" required>
                        </div>
                    </div>     
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="name">UserName</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="name" name="username" id="username" autocomplete="off" placeholder="UserName" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="password">Password</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="password" name="password" id="name" autocomplete="off" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="Roll no">Roll No</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="name" name="roll" id="name" autocomplete="off" placeholder="Roll No" required>
                        </div>
                    </div>
                    <!------------------submit----------------->
                    <div class="col span-2-of-3">
                            <input type="submit" value="Sign Up" >
                    </div>
                </form>
            </div>

        </header>
    </body>

</html>