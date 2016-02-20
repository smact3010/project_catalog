<?php
// Build a calendar
// 1 year, 12 months
// 1 month, 28 - 31 days
// 7 x 6 grid, including headings

// Year
function generateYear($year_value) {
    echo "<div id=\"cal_container\">";
    echo "    <h2 class=\"year\">";
    echo $year_value;
    echo "    </h2>";
    for ($month = 1; $month <= 12; $month++) {
        generateMonth($month, $year_value);
    }
}

// Month
function generateMonth($month_value, $year_value) {
    $current_month = mktime(0,0,0,$month_value,1,$year_value);
    $month_name = date("M", $current_month);
    echo "<div class=\"month\">";
    echo "    <p class=\"title\">".$month_name."</p>";
    echo "    <table class=\"calendar\">";
    echo "        <tr>";
    echo "            <th>S</th>";
    echo "            <th>M</th>";
    echo "            <th>T</th>";
    echo "            <th>W</th>";
    echo "            <th>T</th>";
    echo "            <th>F</th>";
    echo "            <th>S</th>";
    echo "        </tr>";
    generateWeeks($month_value, $year_value);
    echo "    </table> <!-- end calendar table -->";
    echo "</div> <!-- end month div -->";
}

// Weeks
function generateWeeks($month_value, $year_value) {
    $first_day = date("w", mktime(0,0,0,$month_value,1,$year_value));
    $day_count = 1;
    $day_total = cal_days_in_month(CAL_GREGORIAN, $month_value, $year_value);   

    // Week (row) 1
    for ($week = 1; $week <= 1; $week++) {
        echo "         <tr>";
        for ($day = 0; $day <= 6; $day++) {
            if ($day < $first_day) {
                generateDay("", "&nbsp;");
            } else {
                generateDay(determineColor($month_value, $year_value, $day_count), $day_count);
                $day_count++;
            }
        }
        echo "         </tr>";
    }
    // Weeks (rows) 2 to 4
    for ($week = 2; $week <= 4; $week++) {
        echo "         <tr>";
        for ($day = 0; $day <= 6; $day++) {
            generateDay(determineColor($month_value, $year_value, $day_count), $day_count);
            $day_count++;
        }
        echo "         </tr>";
    }
    // Weeks (rows) 5 to 6
    for ($week = 5; $week <= 6; $week++) {
        echo "         <tr>";
        for ($day = 0; $day <= 6; $day++) {
            if ($day_count <= $day_total) {
                generateDay(determineColor($month_value, $year_value, $day_count), $day_count);
                $day_count++;
            } else {
                generateDay("", "&nbsp;");
            }
        }
        echo "         </tr>";
    }
}

// Day
function generateDay($color, $day_number) {
    // $day_color = "class=\"".$color."\"";
    echo "<td ".$color."><span class=\"date\">".$day_number."</span></td>";
}

// Colors
function determineColor($month_value, $year_value, $day_count) {
    // $year_value = 2015;
    // If $month_value = (3) March, (4) April, (5) May, (9) September, (10) October
    // If weekend during yellow month then red   
    $yellow_months = array( 3, 4, 5, 9, 10 );
    if (in_array($month_value, $yellow_months)) {
        $color = "class=\"yellow\"";
    }
    // If $month_value = (1) January, (2) February, (11) November, (12) December
    $blue_months = array( 1, 2, 11, 12 );
    if (in_array($month_value, $blue_months)) {
        $color = "class=\"blue\"";
    }
    // If $month_value = (6) June, (7) July, (8) August
    $red_months = array( 6, 7, 8 );
    if (in_array($month_value, $red_months)) {
        $color = "class=\"red\"";
    }
    $dayOfWeek = date("w", mktime(0,0,0,$month_value,$day_count,$year_value));
    if (in_array($month_value, $yellow_months) && ( $dayOfWeek == 5 || $dayOfWeek == 6 )) {
        $color = "class=\"red\"";
    }

    // Holidays
    $red_days = array(
        mktime(0,0,0,1,1,$year_value),
        mktime(0,0,0,5,25,$year_value),  // Memorial Day
        mktime(0,0,0,9,7,$year_value),   // Labor Day
        mktime(0,0,0,11,26,$year_value), // Thanksgiving
        mktime(0,0,0,11,27,$year_value),
        mktime(0,0,0,12,24,$year_value), // Christmas
        mktime(0,0,0,12,25,$year_value),
        mktime(0,0,0,12,31,$year_value), // New Years
        );
    // print_r($red_days);
    if (in_array("unknown", $red_days)) {
        $color = "class=\"red\"";
    }

    return $color;
}

?>