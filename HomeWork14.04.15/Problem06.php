<form>
    <input name="name" placeholder="Name">
    <input name="phonenumber" placeholder="Phone Number" >
    <input name="age" placeholder="Age">
    <input name="address" placeholder="Address">
    <input name="button" type="submit" value="Submit">
</form>
<?php
//Za Picha koito proverqva domashnoto http://www.tablesgenerator.com/html_tables# <--- she ti pomogne dosta :)
if(isset($_GET['button'])) {
    $name = $_GET['name'];
    $phoneNumber = $_GET['phonenumber'];
    $age = $_GET['age'];
    $address = $_GET['address'];
    echo "<style type=\"text/css\">
    .tg  {border-collapse:collapse;border-spacing:3px;margin: 5px;}
    .tg td{font-family:Arial, sans-serif;font-size:14px;padding:7px 10px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
    .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:7px 10px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
    .tg .tg-n1r1{font-weight:bold;background-color:#e57d2b;text-align: left}
    .tg .tg-0ord{text-align:right}
    </style>";
    echo "<table class=\"tg\" border=\"5\">
  <tr>
    <th class=\"tg-n1r1\">Name</th>
    <th class=\"tg-0ord\">" .$name. "</th>
  </tr>
  <tr>
    <td class=\"tg-n1r1\">Phone Number<br></td>
    <td class=\"tg-0ord\">".$phoneNumber."<br></td>
  </tr>
  <tr>
    <td class=\"tg-n1r1\">Age</td>
    <td class=\"tg-0ord\">".$age."</td>
  </tr>
  <tr>
    <td class=\"tg-n1r1\">Address</td>
    <td class=\"tg-0ord\">".$address."<br></td>
  </tr>
</table>";
}