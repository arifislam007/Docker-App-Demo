<?php
$pageTitle = 'Contact Us - Mein Kampf: A History of Dictator';
include('header.php');
?>
<h2>Contact Us</h2>
<form action="contact.php" method="post">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br>
    <label for="message">Message:</label><br>
    <textarea id="message" name="message" required></textarea><br>
    <input type="submit" value="Submit">
</form>
<?php
include('footer.php');
