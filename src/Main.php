<?php

namespace Rozak\TglIndo;

use Carbon\Carbon;

class Main
{

    public function tglIndo($date)
    {
        $carbon = Carbon::parse($date)->locale('id_ID');

        return "Sekarang hari " . $carbon->dayName . " tanggal " . $carbon->translatedFormat('d F Y');
    }
}
