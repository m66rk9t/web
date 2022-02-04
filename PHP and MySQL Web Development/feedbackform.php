<!DOCTYPE html>
<html>

<head>
    <title>Bob's Auto Parts - Customer Feedback</title>
    <meta charset="utf-8" />
</head>

<body>
    <h1>Customer Feedback</h1>
    <p>Please tell us your think.</p>
    <form action="processfeedback.php" method="post">
        <p>
            <label><strong>Your name:</strong><br />
                <input type="text" name="name" size="40" maxlength="100" />
            </label><br />
        </p>
        <p>
            <label><strong>Your email address:</strong><br />
                <input type="text" name="email" size="40" maxlength="100" />
            </label><br />
        </p>
        <p>
            <label><strong>Your feedback:</strong><br />
                <textarea name="feedback" rows="10" cols="50"></textarea>
            </label><br />
        </p>
        <p>
            <label>
                <input type="submit" value="Send Feedback" />
            </label>
        </p>
    </form>
</body>

</html>