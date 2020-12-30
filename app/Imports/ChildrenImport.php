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

            $columns = [
                "first_name",
                "last_name",
                "birth_date",
                "type",
                "sex",
                "emotional_text",
                "national_code",
                "about",
                "priority",
            ];

            foreach ($columns as $col) {
                if (isset($row[$col]))
                    $data[$col] = $this->transformCols($col, $row[$col]);
            }

            $data["city_id"] = 1;

            Child::updateOrCreate(
                ["national_code" => $row["national_code"]],
                $data
            );
        };
    }


    public function transformCols($colIndex, $value)
    {
        $method = "transform_{$colIndex}";

        if (method_exists($this, $method))
            return $this->$method($value);

        return $value;
    }


    private function transform_birth_date($jalaliDate)
    {
        return Verta::parseFormat("Y/m/d", $jalaliDate)->formatGregorian("Y-m-d");
    }

    private function transform_sex($sex)
    {
        if ($sex == "پسر" or $sex === Child::SEX_MALE)
            return Child::SEX_MALE;

        return Child::SEX_FEMALE;
    }

    private function transform_type($type)
    {
        if ($type == "اکرام" or $type === Child::TYPE_EKRAM)
            return Child::TYPE_EKRAM;

        return Child::TYPE_MOHSENIN;
    }
}
