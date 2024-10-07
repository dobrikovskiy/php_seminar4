<?php

abstract class AbstractBook {
    protected $title;
    protected $author;
    protected $readCount = 0;

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }

    public function getReadCount() {
        return $this->readCount;
    }

    abstract public function getDetails();
    abstract public function getAccess();
}

class EBook extends AbstractBook {
    private $downloadLink;

    public function __construct($title, $author, $downloadLink) {
        parent::__construct($title, $author);
        $this->downloadLink = $downloadLink;
    }

    public function getDetails() {
        echo "Название: {$this->title}, Автор: {$this->author}\n";
    }

    public function getAccess() {
        $this->readCount++;
        echo "Ссылка для скачивания: {$this->downloadLink}\n";
    }
}

class PhysicalBook extends AbstractBook {
    private $libraryAddress;

    public function __construct($title, $author, $libraryAddress) {
        parent::__construct($title, $author);
        $this->libraryAddress = $libraryAddress;
    }

    public function getDetails() {
        echo "Название: {$this->title}, Автор: {$this->author}\n";
    }

    public function getAccess() {
        $this->readCount++;
        echo "Адрес библиотеки: {$this->libraryAddress}\n";
    }
}

// Пример использования:
$ebook = new EBook('1984', 'Джордж Оруэлл', 'https://royallib.com/get/doc/oruell_dgordg/1984.zip');
$ebook->getDetails();
$ebook->getAccess();
echo "Количество прочтений электронной книги: " . $ebook->getReadCount() . "\n";

echo "\n"; // Разделим вывод для удобства

$physicalBook = new PhysicalBook('Война и мир', 'Лев Толстой', 'г. Москва, ул. Пушкина, д. 10');
$physicalBook->getDetails();
$physicalBook->getAccess();
echo "Количество прочтений физической книги: " . $physicalBook->getReadCount() . "\n";