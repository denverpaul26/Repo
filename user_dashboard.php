<?php
// User Dashboard Example

// --- Variables ---
$username = "jane_doe";
$role = "member";      // admin, moderator, member, guest
$active = true;        // account status
$premium = true;       // premium user
$lastLoginDaysAgo = 0; // days since last login
$notificationPreference = "email"; // email, sms, both, none

// --- Task 1: Profile & Dynamic Messages ---
echo "Welcome, $username!<br>";
echo ($lastLoginDaysAgo <= 1 ? "You logged in recently." : "It's been $lastLoginDaysAgo days since your last login.") . "<br><br>";

// --- Task 2: Feature Access ---
if ($active) {
    if ($role == "administrator") {
        echo "✅ Full access to dashboard.<br>";
    } else if ($role == "moderator") {
        echo "✅ Access to Forum Posts and Profile Editor.<br>";
        if ($premium) {
            echo "⭐ Premium moderator tools unlocked!<br>";
        }
    } else if ($role == "member") {
        echo "✅ Access to Forum Posts and Profile Editor.<br>";
        if ($premium) {
            echo "⭐ Premium content library unlocked!<br>";
        }
    } else {
        echo "✅ Guest access only.<br>";
    }
} else {
    echo "Your account is inactive.<br>";
}

echo "<br>";

// --- Task 3: Notification Preferences ---
switch ($notificationPreference) {
    case "email":
        echo "✉️ Email notifications are enabled.<br>";
        break;
    case "sms":
        echo "📱 SMS notifications are enabled.<br>";
        break;
    case "both":
        echo "✉️📱 Email and SMS notifications are enabled.<br>";
        break;
    case "none":
        echo "No notifications.<br>";
        break;
    default:
        echo "Invalid notification preference.<br>";
        break;
}
?>
