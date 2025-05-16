<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consent Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Consent Form for Use of Provided Information</h1>
    </header>
    <main>
        <form id="consentForm" action="submit_consent.php" method="POST">
            <section>
                <h2>Purpose</h2>
                <p>This form is intended to obtain your clear and voluntary consent to use the information you choose to share with me, either in part or in full. Your comfort, trust, and privacy are of utmost importance.</p>
            </section>
            <section>
                <h2>Use of Information</h2>
                <p>By signing this form, you are agreeing that the information you provide may be used for [insert specific purpose – e.g., research, storytelling, awareness efforts, project development, etc.]. This information may be shared:</p>
                <ul>
                    <li>In full or in selected excerpts</li>
                    <li>With your name, initials, or anonymously — you decide how your identity is presented</li>
                </ul>
            </section>
            <section>
                <h2>Your Options</h2>
                <label><input type="checkbox" name="consent_full_name"> I consent to my information being used with my full name</label><br>
                <label><input type="checkbox" name="consent_anonymous"> I consent to my information being used anonymously (no name or identifying details)</label><br>
                <label><input type="checkbox" name="consent_initials"> I consent to my information being used with initials or a pseudonym</label>
            </section>
            <section>
                <h2>Your Rights</h2>
                <ul>
                    <li>You have the right to withdraw your consent at any time by notifying me in writing.</li>
                    <li>You may review how your information is used or represented before it is made public or shared.</li>
                    <li>You are not obligated to share any information you are not comfortable with.</li>
                </ul>
            </section>
            <section>
                <h2>Confidentiality</h2>
                <p>All information will be treated with care and confidentiality. Nothing will be used in a way that disrespects or misrepresents you.</p>
            </section>
            <section>
                <h2>Acknowledgment and Consent</h2>
                <label for="name">Name (print):</label>
                <input type="text" id="name" name="name" required><br>
                <label for="signature">Signature:</label>
                <input type="text" id="signature" name="signature" required><br>
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required><br>
                <label for="contact">Contact (optional):</label>
                <input type="text" id="contact" name="contact"><br>
            </section>
            <section>
                <h2>Progress</h2>
                <progress id="progressBar" value="0" max="100"></progress>
            </section>
            <button type="submit">Submit</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2023 Cobourg Homeless Intake Form</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>
