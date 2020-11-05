<?php

// logic here

// check if a user is logged in
function login($email, $pwd) {
//    if (empty($email) || empty($pwd)) {
//        return false;
//    }
//
//    return true;

    return !empty($email) && !empty($pwd);
}

//if ( isset($_GET['email']) ) {
//    return $_GET['email'];
//} else {
//    return null;
//}
//$email = isset($_GET['email']) ? $_GET['email'] : null;
$email = $_GET['email'] ?? null;
$pwd = $_GET['password'] ?? null;


$logged_in = login($email, $pwd);

if ($logged_in) {
    $h1_value = "Welcome back, {$email}";
} else {
    $h1_value = "Please login or register";
}


// output here

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <style>

        html {
            font-size: 16px;
        }

        label {
            display: block;
            margin-bottom: 1rem;
        }

        input {
            padding: 5px 10px;
            border-radius: 8px;
            background: rgb(163, 195, 246);
            border: 1px solid rgb(44, 102, 183);
        }
    </style>
</head>
<body>
<h1><?php echo $h1_value; ?></h1>


<?php
if (!$logged_in) {
    ?>
    <form method="GET" action="#">
        <label>Email:
            <input name="email" id="email" type="email" required placeholder="Email Address">
        </label>

        <label>Password:
            <input name="password" type="password" required placeholder="Password">
        </label>

        <button type="submit">Login</button>
        <!--input type="button" value="Login" -->
    </form>
    <?php
}
?>

<p>
    Ac dis et blandit consectetur ad sem erat tempus nullam leo eu convallis conubia iaculis condimentum consectetur aenean dis nam. Diam suspendisse nam viverra eleifend primis auctor duis elit praesent per posuere massa at a aenean a eleifend nulla neque ligula vestibulum cum ultrices neque id eros ullamcorper velit. Ad tristique dolor eu ullamcorper volutpat vestibulum non id condimentum dis nisi dis enim nam potenti a a faucibus vestibulum ac nec. Scelerisque porttitor a condimentum nisi semper facilisi at suscipit parturient parturient mi hac placerat pretium sagittis phasellus leo per tempus cursus. Vestibulum vivamus vitae viverra suspendisse a dui consequat sem mi fermentum suspendisse diam condimentum ut vestibulum ipsum porta. Tellus nulla eu et est penatibus imperdiet hendrerit lacus eleifend nisl at dis cum ad varius duis quam adipiscing sociis vitae interdum fames condimentum a senectus molestie donec ac.
</p>

<p>
    Condimentum a eu consectetur venenatis proin eleifend luctus lectus montes neque hac ad a aliquet scelerisque elit. Erat pharetra sed a proin a ridiculus ultricies nec tempus cum a adipiscing nulla a et nulla a eu condimentum. Vel placerat parturient turpis a a conubia cubilia egestas suspendisse inceptos commodo lobortis suspendisse sociosqu tristique potenti euismod rutrum sem volutpat neque lobortis venenatis parturient sit consequat adipiscing.
</p>
</body>
</html>