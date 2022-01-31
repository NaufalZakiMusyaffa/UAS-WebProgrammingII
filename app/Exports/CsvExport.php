<?php

namespace App\Exports;

use App\Models\M_buku;
use Maatwebsite\Excel\Concerns\FromCollection;

class CsvExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return M_buku::all();
    }
}
