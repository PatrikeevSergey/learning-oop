<div><p><h1>Наследование от наследников</h1></p></div>
<div><p>Пусть есть класс-родитель и класс- потомок. От этого потом так же могут наследовать другие классы. Пусть есть класс Employee, которный наследует свойства класса User4. Создадим класс Programmer, который унаследует свойства класса Employee и добавим в него свойство langs, в котором будет храниться массив языков, которыми владеет программист. Сделать геттер и сеттер для этого свойства.</p></div>


<?

require_once './classes/Programmer.php';


$programmer1 = new Programmer;

$programmer1->setName('Sergey');
$programmer1->setAge(29);
$programmer1->setLangs('php', 'js', 'c++');

print 'Имя программиста - ' . $programmer1->getName() . '. <br> Возраст - ' . $programmer1->getAge() . '. <br> Знает языки: ' . $programmer1->getLangs(). '<hr>';