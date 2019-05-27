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
 //$output .= '
 ?>
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Sub-Category Code</th>
     <th>Block</th>
     <th>Sub-Category ID</th>
     <th>Label Type</th>
     <th>Sub-Category Description</th>
    </tr>
    <?php }
 //';
 while($row = mysqli_fetch_array($result))
 {
    $cat
    //$output .= '
?>
    <tr>
    <td><a href = "result.php?value1=<?php echo $row["sub_category_code"];?>&value2=<?php echo $row["parent"];?>&value3=<?php echo $row["preferred_sub_category_id"];?>&value4=<?php echo $row["label_type"];?>&value5=<?php echo $row["preferred_sub_category_description"];?>"><?php echo $row["sub_category_code"];?></td>
    <td><a href = "result.php?value2=<?php echo $row["parent"];?>&value1=<?php echo $row["sub_category_code"];?>&value3=<?php echo $row["preferred_sub_category_id"];?>&value4=<?php echo $row["label_type"];?>&value5=<?php echo $row["preferred_sub_category_description"];?>"><?php echo $row["parent"];?></td>
    <td><a href = "result.php?value3=<?php echo $row["preferred_sub_category_id"];?>&value1=<?php echo $row["sub_category_code"];?>&value2=<?php echo $row["parent"];?>&value4=<?php echo $row["label_type"];?>&value5=<?php echo $row["preferred_sub_category_description"];?>"><?php echo $row["preferred_sub_category_id"];?></td>
    <td><a href = "result.php?value4=<?php echo $row["label_type"];?>value1=<?php echo $row["sub_category_code"];?>&value2=<?php echo $row["parent"];?>&value3=<?php echo $row["preferred_sub_category_id"];?>&value5=<?php echo $row["preferred_sub_category_description"];?>"><?php echo $row["label_type"];?></td>
    <td><a href = "result.php?value5=<?php echo $row["preferred_sub_category_description"];?>&value1=<?php echo $row["sub_category_code"];?>&value2=<?php echo $row["parent"];?>&value3=<?php echo $row["preferred_sub_category_id"];?>&value4=<?php echo $row["label_type"];?>"><?php echo $row["preferred_sub_category_description"];?></a></td>
   </tr>
 <?php }
 //echo $output;
?>