<?
require_once './classes/User2.php';

$prop = ['surname', 'name', 'patronymic'];

$user = new User2 ('Патрикеев', 'Сергей','Витальевич');
$length = count($prop);

for ($i = 0; $i < $length; $i ++){
	print $user->{$prop[$i]} . ' ' ;
}


print '<hr><b> Ассоциативные массивы</b><br>';


//массив может быть и ассоциативным, например

unset($prop);
unset($user);
unset($length);



$user = new User2('Иванов','Иван','Иванович');

$props = ['prop1' => 'surname','prop2' => 'name', 'prop3' => 'patronymic'];

print $user->{$props['prop2']};

print '<p><b>Имя свойства из метода другого объекта</b></p>';

unset($user);
unset ($prop);

require_once './classes/Prop.php';
$user = new User2('Патрикеев', 'Сергей','Витальевич');
$prop = new Prop('patronymic');

print $user->{$prop->getValue()};