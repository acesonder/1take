<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav>
        <ul class="navbar">
            <li><a href="index.php">Home</a></li>
            <li><a href="consent_form.php">Consent Form</a></li>
            <li><a href="intake.php">Intake Form</a></li>
            <li><a href="clientDashboard.php">Client Dashboard</a></li>
            <li><a href="adminDashboard.php">Admin Dashboard</a></li>
            <li><a href="community_resources.php">Community Resources</a></li>
            <li><a href="success_stories.php">Success Stories</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li>
                <select id="themeSelector">
                    <option value="default">Default Theme</option>
                    <option value="dark">Dark Theme</option>
                    <option value="light">Light Theme</option>
                </select>
            </li>
            <li>
                <select id="languageToggle">
                    <option value="en">English</option>
                    <option value="fr">French</option>
                    <option value="es">Spanish</option>
                </select>
            </li>
        </ul>
    </nav>
    <script src="scripts.js"></script>
</body>
</html>
