<?php
echo "<table>
<tr>
    <th>Name</th>
    <th>Team</th>
    <th>Pic</th>
</tr>";

foreach ($nbaInfo as $rows) {
    echo "<tr>";
    echo "<td>". $rows['name'] ."</td>";
    echo "<td>". $rows['team']."</td>";
    echo "<td>". $rows['pic']."</td>";
    echo "</tr>";
}

echo "</table>";
?>
