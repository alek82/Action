<?php
/**
 * Created by PhpStorm.
 * User: Alek
 * Date: 09.03.16
 * Time: 16:44
 */
$x =25;                                          /* Указываем переменную Integer */
while($x<10)                                     /* Цикл с условием */
{
    $x--;                                        /*Постфиксный декремент. Возвращает значение $x, затем уменьшает $x
                                                     на единицу. */
}
echo "Задание №1 - " . ($x);                     /* Вывод переменной на экран */
echo "<br>";                                     /* Переход на следующую строку */
echo "<br>";
echo "Задание №2 - " . (int) ((0.1 + 0.7) * 10); /* При преобразовании из float в integer, число будет округлено в
                                                     сторону нуля. */
echo "<br>";
echo "<br>";
echo "Задание №3 - ";
switch(1) {                                     /* Номер выражения с какого начинать */
    case 1: print("Книга ");                     /* Выражение 1 */
    case 2: print("Автор ");                     /* Выражение 2 */
    default: print("Книга не найдена ");         /* Блок по умолчанию, если не указанно никакого выражения */
}
echo "<br>";
echo "<br>";
echo "Задание №4 - ";
$s = 2;                                         /* Указываем переменную Integer */
switch ($s) {                                   /* Начинать с выражения $s */
    case 1:
        print("Валера ");
        break;                                  /* Оператор, выход из цикла */
    case 2:
        print("Павлик ");
    case 3:
        print("youtube ");
    default: print("По умолчанию ");
}
echo "<br>";
echo "<br>";
echo "Задание №5 - ";
$x=10;                                          /* Указываем переменную Integer */
$b=++$x;                                        /* Префиксный инкремент.Увеличивает $x на единицу, затем возвращает значение $x
                                                    и присваивает переменное $b. */
echo($b);                                       /* Вывод переменной на экран */
echo "<br>";
echo "<br>";
echo "Задание №6 - ";
echo 0x33, ' птиц сидело на ', 022, ' деревьях.';   /* Цисло в 16 системе, второе число в 8 системе*/
echo "<br>";
echo "<br>";
echo "Задание №7 - ";
for($a=1;$a<=100;$a++)                          /* Цикл с условием */
{
    if($a==50)                                  /* Оператор условия */
    {
        continue;                               // Прерывание только текущей итерации.
    }
    echo($a . PHP_EOL);                         //Символ пробела
}
echo "<br>";
echo "<br>";
echo "Задание №8 - ";
$a2 = 'Привет';                                 //Переменная должна начинаться с буквы
echo $a2;
echo "<br>";
echo "<br>";
echo "Задание №9 - ";
echo (int) "1235Валера";                        //Выводит и преобразовывает строку в число
echo "<br>";
echo "<br>";
echo "Задание №10 - ";
echo (int) "Валера 1235";                       //Выводит 0, так как строка начинается с букв
echo "<br>";
echo "<br>";
echo "Задание №11 - ";
$x=10;
$y=5;
$x+=$y;                                         //Конструкция сложения
var_dump($x, $y);                               /* Эта функция возвращает структурированную информацию об одном или
                                                    более выражений, которая включает его тип и значение. */
echo "<br>";
echo "<br>";
echo "Задание №12 - ";
$a = 10;                                        //Имя переменной слева, значение - справа
echo $a;
echo "<br>";
echo "<br>";
echo "Задание №13 - ";
$a = 1;
$b = 10;
$a++;
$a++;
$b = &$a;                                       /* Использование ссылки */
$a++;                                           /*Постфиксный инкремент. Возвращает значение $a, затем увеличивает
                                                    $a на единицу. */
$b--;                                          /*Постфиксный декремент. Возвращает значение $b, затем уменьшает $x
                                                     на единицу. */
echo $b;



?>
