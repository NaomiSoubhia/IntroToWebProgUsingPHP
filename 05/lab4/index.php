<?php require "includes/header.php" ?>

<body>

    <main class="container mt-4">
        <h1>Subscribe to Our Mailing List</h1>

        <!-- Required fields -->
        <form action="process.php" method="post" class="mt-3">
            <label class="form-label" for="first_name">First Name</label>
            <input class="form-control" type="text" id="first_name" name="first_name" required>

            <label class="form-label mt-3" for="last_name">Last Name</label>
            <input class="form-control" type="text" id="last_name" name="last_name" required>

            <label class="form-label mt-3" for="email">Email Address</label>
            <input class="form-control" type="email" id="email" name="email" required>

            <button class="btn btn-primary mt-4" type="submit">Subscribe</button>
        </form>

        <p class="mt-4">
            <a href="subscribers.php">View Subscribers</a>
        </p>
    </main>
</body>

</html>