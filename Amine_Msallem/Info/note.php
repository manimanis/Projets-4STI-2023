<?php
$con = mysqli_connect("127.0.0.1", "root", "", "sign_project");
$res = mysqli_query($con, "SELECT * FROM informatique");
echo "<table>";
echo "<tr>";
echo "<th>sti_ctr1</th>";
echo "<th>sti_ctr2</th>";
echo "<th>sti_s</th>";
echo "<th>prog_ctr1</th>";
echo "<th>prog_ctr2</th>";
echo "<th>prog_s</th>";
echo "<th>math_ctr1</th>";
echo "<th>math_s</th>";
echo "<th>phy_ctr1</th>";
echo "<th>phy_ctr2</th>";
echo "<th>phy_s</th>";
echo "<th>arb_s</th>";
echo "<th>phi_ora</th>";
echo "<th>phi_ctr1</th>";
echo "<th>phi_s</th>";
echo "<th>fr_ctr1</th>";
echo "<th>fr_ctr2</th>";
echo "<th>fr_s</th>";
echo "<th>an_ctr1</th>";
echo "<th>an_ctr2</th>";
echo "<th>an_s</th>";
echo "<th>op_ctr1</th>";
echo "<th>op_s</th>";
echo "<th>s_ctr1</th>";
echo "<th>s_s</th>";
echo "<th>ID</th>";
echo "<th>moy</th>";
echo "</tr>";

while ($note = mysqli_fetch_array($res)) {
  echo "<tr>";
  echo "<td>" . $note["sti_ctr1"] . "</td>";
  echo "<td>" . $note["sti_ctr2"] . "</td>";
  echo "<td>" . $note["sti_s"] . "</td>";
  echo "<td>" . $note["prog_ctr1"] . "</td>";
  echo "<td>" . $note["prog_ctr2"] . "</td>";
  echo "<td>" . $note["prog_s"] . "</td>";
  echo "<td>" . $note["math_ctr1"] . "</td>";
  echo "<td>" . $note["math_s"] . "</td>";
  echo "<td>" . $note["phy_ctr1"] . "</td>";
  echo "<td>" . $note["phy_ctr2"] . "</td>";
  echo "<td>" . $note["phy_s"] . "</td>";
  echo "<td>" . $note["arb_s"] . "</td>";
  echo "<td>" . $note["phi_ora"] . "</td>";
  echo "<td>" . $note["phi_ctr1"] . "</td>";
  echo "<td>" . $note["phi_s"] . "</td>";
  echo "<td>" . $note["fr_ctr1"] . "</td>";
  echo "<td>" . $note["fr_ctr2"] . "</td>";
  echo "<td>" . $note["fr_s"] . "</td>";
  echo "<td>" . $note["an_ctr1"] . "</td>";
  echo "<td>" . $note["an_ctr2"] . "</td>";
  echo "<td>" . $note["an_s"] . "</td>";
  echo "<td>" . $note["op_ctr1"] . "</td>";
  echo "<td>" . $note["op_s"] . "</td>";
  echo "<td>" . $note["s_ctr1"] . "</td>";
  echo "<td>" . $note["s_s"] . "</td>";
  echo "<td>" . $note["ID"] . "</td>";
  echo "<td>" . $note["moy"] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
<style>
table {
  border-collapse: collapse;
  margin-top: 80px;
}
table th, table td {
  border: 1px solid #ddd;
  padding: 8px;
}
table th {
  background-color: #f2f2f2;
}
</style>