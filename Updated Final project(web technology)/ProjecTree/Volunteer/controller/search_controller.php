<?php 
$data = "k";
$output = '';
if(isset($_GET['q'])){
    $data = $_GET['q'];
}
$db = mysqli_connect("localhost", "root", "", "lab6");
if($db->connect_error){
    exit('DB not connected');
}
$x = "SELECT * FROM users WHERE NAME LIKE '%".$data."%' OR EMAIL LIKE '%".$data."%' OR USERNAME LIKE '%".$data."%'";
$y = $db->query($x);




if(mysqli_num_rows($y) > 0)
{
    $output .= '<div class="table-responsive">
                    <table class="table table bordered">
                        <tr>
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>USERNAME</th>
                            <th>ID</th>
                        </tr>';
    while($row = mysqli_fetch_array($y))
    {
        $output .= '
            <tr>
                <td>'.$row["NAME"].'</td>
                <td>'.$row["EMAIL"].'</td>
                <td>'.$row["USERNAME"].'</td>
                <td>'.$row["ID"].'</td>
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
