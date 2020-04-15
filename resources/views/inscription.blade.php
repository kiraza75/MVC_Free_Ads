<html lang="fr">
<head>
    <title>Freeads - inscription</title>
</head>
<body>


<div class="container">
    <form method="post">

        {{ csrf_field() }}

        <input type="text" name="name" placeholder="Your name">
        <input type="text" name="lastname" placeholder="Your last name">
        <input type="email" name="email" placeholder="your Mail">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="confirmpassword" placeholder="Confirm password">
        <input type="submit" value="signIn">
    </form>
</div>
</body>
</html>
