<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    protected $fillable = ["no_c",
                            "sub_no_c",
                            "courses_name_c",
                            "level_c",
                            "subpath_c",
                            "program_c",
                            "class_c",
                            "category_c",
                            "type_c",
                            "year_c",
                            "month_c",
                            "week_c",
                            "date_c",
                            "training_place_c",
                            "training_room_c",
                            "gen_c",
                            "name_c",
                            "company_c",
                            "team_c",
                            "group_c",
                            "part_c",
                            "title_c",
                            "detail_title_c",
                            "work_place_c",
                            "score_c",
                            "courses_result_c",
                            "remarks_c"];
                            
    public static function countByMonthYear($year)
    {
        $counts = [];
    
        for ($month = 1; $month <= 12; $month++) {
            $count = self::where('year_c', $year)
                ->where('month_c', str_pad($month, 2, '0', STR_PAD_LEFT))
                ->count();
            $counts[] = $count;
        }

    
        return $counts;
    }    
}


