<?php
// User Dashboard Example


$username = "jane_doe";
$role = "member";      
$active = true;        
$premium = true;       
$lastLoginDaysAgo = 0; 
$notificationPreference = "email"; 


echo "Welcome, $username!<br>";
echo ($lastLoginDaysAgo <= 1 ? "You logged in recently." : "It's been $lastLoginDaysAgo days since your last login.") . "<br><br>";


if ($active) {
    if ($role == "administrator") 
        {   echo "✅ Full access to dashboard.<br>";
    } else if ($role == "moderator")
        {   echo "✅ Access to Forum Posts and Profile Editor.<br>";
        if ($premium) 
            {   echo "⭐ Premium moderator tools unlocked!<br>";
        }
    } else if ($role == "member") 
        {   echo "✅ Access to Forum Posts and Profile Editor.<br>";
        if ($premium) 
            {   echo "⭐ Premium content library unlocked!<br>";
        }
    } else 
        {   echo "✅ Guest access only.<br>";
    }
    } else 
    {   echo "Your account is inactive.<br>";
}

echo "<br>";


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
