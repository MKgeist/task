<!DOCTYPE php>
<html >
<head>
 <meta charset="utf-8">
 <title>メンター課題１</title>
 <link rel="stylesheet" href="css/style.css">
</head>
<table border=1>
	<tr>
		<td>1</td>
		<td>1</td>
		<td>1</td>
	</tr>
</table>
<br>
<table border=1 class="task1">
	<tr>
		<td>1</td>
		<td>1</td>
		<td>1</td>
  </tr>
  <tr>
    <td>2</td>
    <td>2</td>
    <td>2</td>
  </tr>
  <tr>
    <td>3</td>
    <td>3</td>
    <td>3</td>
  </tr>
</table>
<br>
<table border=1 class="task2">
  <?php
for ($i=1; $i <=25; $i++) {
echo $i;
if ($i % 5 === 0){
echo "\n";}

}
?>

    <tr>
  		<td>1</td>
  		<td>2</td>
  		<td>3</td>
  		<td>4</td>
  		<td>5</td>
  	</tr>
  	<tr>
  		<td>6</td>
  		<td>7</td>
  		<td>8</td>
  		<td>9</td>
  		<td>10</td>
  	</tr>
  	<tr>
  		<td>11</td>
  		<td>12</td>
  		<td>13</td>
  		<td>14</td>
  		<td>15</td>
  	</tr>
  	<tr>
  		<td>16</td>
  		<td>17</td>
  		<td>18</td>
  		<td>19</td>
  		<td>20</td>
  	</tr>
  	<tr>
  		<td>21</td>
  		<td>22</td>
  		<td>23</td>
  		<td>24</td>
  		<td>25</td>
  	</tr>
  </table>
</html>