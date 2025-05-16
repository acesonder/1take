<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "consent_form_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to save consent form data
function saveConsentFormData($data) {
    global $conn;

    $name = $data['name'];
    $signature = $data['signature'];
    $date = $data['date'];
    $contact = $data['contact'];
    $consent_full_name = isset($data['consent_full_name']) ? 1 : 0;
    $consent_anonymous = isset($data['consent_anonymous']) ? 1 : 0;
    $consent_initials = isset($data['consent_initials']) ? 1 : 0;

    $sql = "INSERT INTO consent_forms (name, signature, date, contact, consent_full_name, consent_anonymous, consent_initials)
            VALUES ('$name', '$signature', '$date', '$contact', '$consent_full_name', '$consent_anonymous', '$consent_initials')";

    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = $_POST;

    if (saveConsentFormData($data)) {
        echo "Consent form submitted successfully.";
    } else {
        echo "Error submitting consent form.";
    }
}

// Function to save form progress
function saveFormProgress($data) {
    global $conn;

    $name = $data['name'];
    $signature = $data['signature'];
    $date = $data['date'];
    $contact = $data['contact'];
    $consent_full_name = isset($data['consent_full_name']) ? 1 : 0;
    $consent_anonymous = isset($data['consent_anonymous']) ? 1 : 0;
    $consent_initials = isset($data['consent_initials']) ? 1 : 0;

    $sql = "REPLACE INTO form_progress (name, signature, date, contact, consent_full_name, consent_anonymous, consent_initials)
            VALUES ('$name', '$signature', '$date', '$contact', '$consent_full_name', '$consent_anonymous', '$consent_initials')";

    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

// Handle save progress request
if (isset($_POST['save_progress'])) {
    $data = $_POST;

    if (saveFormProgress($data)) {
        echo "Form progress saved successfully.";
    } else {
        echo "Error saving form progress.";
    }
}
?>
