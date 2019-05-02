<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 5/2/2019
 * Time: 2:40 PM
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
</head>
<body>
    <div>
        <h1>Contact Us anytime</h1>
        <form action="{{route('contact_submit')}}" method="post">
            @csrf
            <input type="text" name="name" placeholder="Your Name Please">
            <input type="email" name="email" placeholder="Your email Please">

            <textarea name="message" cols="50" rows="10" placeholder="Your Query">

            </textarea>

            <input type="submit">
        </form>
    </div>
</body>
</html>
