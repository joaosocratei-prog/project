
<?php
session_start();

require_once __DIR__ . '/config/database.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

if (
    empty($_POST['csrf_token']) ||
    empty($_SESSION['csrf_token']) ||
    !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])
) {
    $_SESSION['subscribe_error'] = 'Invalid request. Please try again.';
    header('Location: ' . ($_SERVER['HTTP_REFERER'] ?? 'index.php'));
    exit;
}

$username = trim($_POST['username'] ?? '');
$email = trim($_POST['email'] ?? '');

if ($username === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['subscribe_error'] = 'Please enter a valid name and email.';
    header('Location: ' . ($_SERVER['HTTP_REFERER'] ?? 'index.php'));
    exit;
}

try {
    $sql = "INSERT INTO subscribers (username, email)
            VALUES (:username, :email)";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ':username' => $username,
        ':email' => $email
    ]);

    $_SESSION['subscribe_success'] =
        'Thank you! You have subscribed successfully.';

} catch (PDOException $e) {
    if ($e->getCode() === '23000') {
        $_SESSION['subscribe_error'] =
            'This email address is already subscribed.';
    } else {
        error_log($e->getMessage());
        $_SESSION['subscribe_error'] =
            'Something went wrong. Please try again.';
    }
}

header('Location: ' . ($_SERVER['HTTP_REFERER'] ?? 'index.php'));
exit;
