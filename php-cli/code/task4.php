<?php
// class A {
//     public function foo() {
//         static $x = 0;
//         echo ++$x;
//     }
// }
// $a1 = new A();
// $a2 = new A();
// $a1->foo(); // выводит 1
// $a2->foo(); // выводит 2
// $a1->foo(); // выводит 3
// $a2->foo(); // выводит 4

class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A();
$b1 = new B();
$a1->foo(); // выводит 1
$b1->foo(); // выводит 2
$a1->foo(); // выводит 3
$b1->foo(); // выводит 4
