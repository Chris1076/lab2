<html>
<head>
    <meta charset="utf-8">
    <title>IPT10 Laboratory Activity #3A</title>
    <!--DONE Add the Bulma CSS here-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css"">
</head>
<body onload="bodyload()">
<section class="section">
    <h1 class="title">User Registration</h1>
    <h2 class="subtitle">
        This is the IPT10 PHP Quiz Web Application Laboratory Activity. Please register
    </h2>
    <!--DONE Supply the correct HTTP method and target form handler resource -->
    <form method="POST" action="instructions.php" name="indexform">
        <div class="field">
            <label class="label">Name</label>
            <div class="control">
                <input class="input" type="text" name="completename" placeholder="Complete Name" onkeyup="ontype()">
            </div>
        </div>

        <div class="field">
            <label class="label">Email</label>
            <div class="control">
                <input class="input" name="email" type="email" onkeyup="ontype()"/>
            </div>
        </div>

        <div class="field">
            <label class="label">Birthdate</label>
            <div class="control">
                <input class="input" name="birthdate" type="date"/>
            </div>
        </div>

        <div class="field">
            <label class="label">Contact Number</label>
            <div class="control">
                <input class="input" name="contact_number" type="number" />
            </div>
        </div>

        <!-- Next button -->
        <button type="submit" id="submitBtn" class="button is-link">Proceed Next</button>
    </form>
</section>
<script src="scripts.js"></script>
</body>
</html>