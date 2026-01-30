<?php require "includes/header.php" ?>
<main>
    <h2> Contact us!</h2>
    <form action="process.php" method="post">
        <fieldset>
            <legend>Contact Information</legend>
            <label for="first_name">First name</label>
            <input type="text" id="first_name" name="first_name" min="4" max="20" required>
            <label for="last_name">Last name</label>
            <input type="text" id="last_name" name="last_name" min="4" max="45" required>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            <p>
                <label for="message">Message:</label><br>
                <textarea id="message" name="message" rows="6" placeholder="Type your message here..." maxlength="100"
                    required></textarea>
            </p>
        </fieldset>

        <p>
            <button type="submit">Send</button>
        </p>

    </form>


</main>
</body>

</html>

<?php require "includes/footer.php" ?>