Шахматы
=======

`chess.php` — консольный проигрыватель шахматных партий.
Программа получает ходы игроков в качестве аргументов и выводит
состояние доски с фигурами после этих ходов.

Например:

`php chess.php e2-e4 e7-e5`

<img src="example.png" width="405" height="349" alt="Example of the program execution"/>

В текущем виде `chess.php` никак не проверяет правильность ходов.

## Задача 1

Задача 1: дописать программу таким образом, чтобы она выкидывала исключение
при нарушении очерёдности хода (например, два раза подряд ход белых).

Чтобы проверить корректность решения, запустите тесты:

    $ ./vendor/bin/phpunit --group=rotation

## Задача 2

Задача 2: дописать программу таким образом, чтобы она выкидывала исключение
при нарушении правил хода пешкой (pawn).

Чтобы проверить корректность решения, запустите тесты:

    $ ./vendor/bin/phpunit --group=pawn

В тестах проверяются только ходы пешками, для других фигур валидацию ходов делать не нужно.

### Как ходит пешка

 * Пешка может ходить вперёд (по вертикали) на одну клетку;
 * Если пешка ещё ни разу не ходила, она может пойти вперёд на две клетки;
 * Пешка не может перепрыгивать через другие фигуры;
 * Пешка может бить фигуры противника только по диагонали вперёд на одну клетку;
 * Также существует взятие на проходе, но им можно пренебречь :)
