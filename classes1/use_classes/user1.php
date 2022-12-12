<?

require_once './classes/User1.php';

$user = new User1('Sergey', 29);

$prop = 'name';

print $user->$prop;