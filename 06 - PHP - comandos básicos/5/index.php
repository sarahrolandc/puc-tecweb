<html>

<head>
    <link href="estilos.css" rel="stylesheet">
</head>

<body>
    <div class="page">
        <div class="container">
            <?php

            $year = 2020;

            for ($month = 1; $month <= 12; $month++) {
                $calendar = '<div class="caixa">';
                $daysOfWeek = array('Dom.', 'Seg.', 'Terç.', 'Qua.', 'Qui.', 'Sex.', 'Sáb.');
                $firstDayOfMonth = mktime(0, 0, 0, $month, 1, $year);
                $numberDays = date('t', $firstDayOfMonth);
                $dateComponents = getdate($firstDayOfMonth);
                $dayOfWeek = $dateComponents['wday'];
                $dateObj   = DateTime::createFromFormat('!m', $month);
                $nomeMes = strftime('%b', $dateObj->getTimestamp());

                $calendar .= '<table>';
                $calendar .= '<caption class="caption-style">' . $nomeMes . '</caption>';
                $calendar .= '<theady>';
                $calendar .= '<tr>';
                foreach ($daysOfWeek as $day) {
                    $calendar .= "<th>$day</th>";
                }
                $calendar .= '</tr>';
                $calendar .= '</theady>';
                $calendar .= '<tbody>';

                $currentDay = 1;

                $calendar .= '<tr>';

                if ($dayOfWeek > 0) {
                    $calendar .= "<td colspan='$dayOfWeek'>&nbsp;</td>";
                }
                $month = str_pad($month, 2, "0", STR_PAD_LEFT);

                while ($currentDay <= $numberDays) {

                    if ($dayOfWeek == 7) {

                        $dayOfWeek = 0;
                        $calendar .= "</tr><tr>";
                    }

                    $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
                    $date = "$year-$month-$currentDayRel";
                    $calendar .= "<td class='day' rel='$date'>$currentDay</td>";

                    $currentDay++;
                    $dayOfWeek++;
                }
                $calendar .= '</tbody>';
                $calendar .= '</table>';
                $calendar .= '</div>';
                echo $calendar;
            }
            ?>
            <div>
            </div>
</body>

</html>