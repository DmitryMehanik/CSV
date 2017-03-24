<?php


class import
{
    public function InsertCSV ($file)
{

    $connect = new DBclass();
    $connect->dataBaseConnect();


    $objPHPExcel = PHPExcel_IOFactory::load($file);

    foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
    {
        $highesRow = $worksheet->getHighestRow();
        for ($row=2;$row<=$highesRow;$row++)
        {
            $name = mysqli_real_escape_string($connect->dataBaseConnect(),$worksheet->getCellByColumnAndRow(0,$row)->getValue());
            $price = mysqli_real_escape_string($connect->dataBaseConnect(),$worksheet->getCellByColumnAndRow(1,$row)->getValue());
            $sql = "INSERT INTO csv(name, price) VALUE ('".$name."','".$price."')";
            $connect->dataBaseQuery($sql);
        }
    }
    return true;
    echo "Date insert";

}
}

