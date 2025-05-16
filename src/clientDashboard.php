<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Client Dashboard</h1>
    </header>
    <main>
        <section>
            <h2>Progress Indicator</h2>
            <progress id="progressBar" value="0" max="100"></progress>
        </section>
        <section>
            <h2>Save & Resume</h2>
            <button id="saveProgress">Save Progress</button>
            <button id="resumeProgress">Resume Progress</button>
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
            <h2>Emergency Contact</h2>
            <button id="emergencyContact">Emergency Contact</button>
        </section>
        <section>
            <h2>Prefilled Information</h2>
            <form id="prefilledForm">
                <label for="firstName">First Name:</label>
                <input type="text" id="firstName" name="firstName" required><br>
                <label for="lastName">Last Name:</label>
                <input type="text" id="lastName" name="lastName" required><br>
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required><br>
                <button type="submit">Submit</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Cobourg Homeless Intake Form</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>
