<?php
//also you can find here an xss <3:
$role = 'user';

// Set the role value in a cookie
setcookie('role', $role, time() + (86400 * 30), '/'); // Cookie expires in 30 days

// Retrieve the role from the cookie (if set)
if (isset($_COOKIE['role'])) {
    $role = $_COOKIE['role'];
}
if($role==='admin')
{
    echo "Admin and role is: " . $role;
    //or Admin content
}
else if($role==='user')
{
    echo "User and role is: " . $role;
    //or user content
}
else
{
    echo "NO SUCH ROLE";
}

?>
