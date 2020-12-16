<?php

namespace App\Imports;

use App\Models\Child;
use Hekmatinasser\Verta\Facades\Verta;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ChildrenImport implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $children)
    {
        $children->map($this->updateDatabase());
    }

    private function updateDatabase()
    {
        return function ($row) {
            Child::updateOrCreate(
                ["national_code" => $row["national_code"]],
                [
                    "first_name" => $row["first_name"] ?? "",
                    "last_name" => $row["last_name"] ?? "",
                    "birth_date" => $this->parseGregorianDate($row["birth_date"]),
                    "type" => $this->transformType($row["type"]),
                    "sex" => $this->transformSex($row["sex"]),
                    "emotional_text" => $row["emotional_text"] ?? "",
                    "national_code" => $row["national_code"] ?? "",
                    "about" => $row["about"] ?? "",
                    "city_id" => 1,
                    "priority" => $row["priority"] ?? "",
                ]
            );
        };
    }

    private function parseGregorianDate($jalaliDate)
    {
        return Verta::parseFormat("Y/m/d", $jalaliDate)->formatGregorian("Y-m-d");
    }

    private function transformSex($sex)
    {
        if ($sex == "پسر" or $sex === Child::SEX_MALE)
            return Child::SEX_MALE;

        return Child::SEX_FEMALE;
    }

    private function transformType($type)
    {
        if ($type == "اکرام" or $type === Child::TYPE_EKRAM)
            return Child::TYPE_EKRAM;

        return Child::TYPE_MOHSENIN;
    }
}
