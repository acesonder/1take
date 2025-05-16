<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Admin Dashboard</h1>
    </header>
    <main>
        <section>
            <h2>User Management</h2>
            <button id="addUser">Add User</button>
            <button id="editUser">Edit User</button>
            <button id="deleteUser">Delete User</button>
        </section>
        <section>
            <h2>Activity Logs</h2>
            <button id="viewLogs">View Logs</button>
        </section>
        <section>
            <h2>Automated Notifications</h2>
            <button id="setupNotifications">Setup Notifications</button>
        </section>
        <section>
            <h2>Language Toggle</h2>
            <select id="languageToggle">
                <option value="en">English</option>
                <option value="fr">French</option>
                <option value="es">Spanish</option>
            </select>
        </section>
        <section>
            <h2>Live Chat Support</h2>
            <button id="liveChatSupport">Live Chat Support</button>
        </section>
        <section>
            <h2>Responsive Design</h2>
            <p>The admin dashboard is mobile-responsive and can be accessed from various devices.</p>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Cobourg Homeless Intake Form</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>
