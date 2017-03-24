<?php


class importTest extends PHPUnit_Framework_TestCase
{
    public function  testInsertCSV ()
    {
        $testfile = new import();
        $testfile ->InsertCSV('csvfile.csv');
        $this->assertTrue($testfile->InsertCSV());
    }

}
