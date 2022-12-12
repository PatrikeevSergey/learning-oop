<?

require_once './classes/Student.php';

$studentSergey = new Student('Sergey');

print 'Имя: ' . $studentSergey->getName() . '<br>Курс: '. $studentSergey->getCourse() . '<br>';

$studentSergey->transfertToNextCourse();
print 'Переводит на следующий курс. <br> Имя: ' . $studentSergey->getName() . '<br>Курс: '. $studentSergey->getCourse() . '<br>';

$studentSergey->transfertToNextCourse();
print 'Переводит на следующий курс. <br> Имя: ' . $studentSergey->getName() . '<br>Курс: '. $studentSergey->getCourse() . '<br>';

$studentSergey->transfertToNextCourse();
print 'Переводит на следующий курс. <br> Имя: ' . $studentSergey->getName() . '<br>Курс: '. $studentSergey->getCourse() . '<br>';

$studentSergey->transfertToNextCourse();
print 'Переводит на следующий курс. <br> Имя: ' . $studentSergey->getName() . '<br>Курс: '. $studentSergey->getCourse() . '<br>';

$studentSergey->transfertToNextCourse();
print 'Переводит на следующий курс. <br> Имя: ' . $studentSergey->getName() . '<br>Курс: '. $studentSergey->getCourse() . '<br>';


