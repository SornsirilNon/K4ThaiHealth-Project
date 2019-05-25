<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "icd_10_tm_test");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM icd_10_tm_test.sub_category_v3 
  WHERE sub_category_code LIKE '%".$search."%'
  OR parent LIKE '%".$search."%' 
  OR preferred_sub_category_id LIKE '%".$search."%' 
  OR label_type LIKE '%".$search."%' 
  OR preferred_sub_category_description LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM icd_10_tm_test.sub_category_v3 ORDER BY sub_category_code
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Sub-Category Code</th>
     <th>Block</th>
     <th>Sub-Category ID</th>
     <th>Label Type</th>
     <th>Sub-Category Description</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["sub_category_code"].'</td>
    <td>'.$row["parent"].'</td>
    <td>'.$row["preferred_sub_category_id"].'</td>
    <td>'.$row["label_type"].'</td>
    <td>'.$row["preferred_sub_category_description"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>