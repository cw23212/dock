
asdaa
    <?php 
    $conn=mysqli_connect(
    '54.211.81.110',
    'test',
    'test',
    'test',
    '9876'
    );
    if(mysqli_connect_errno()){
        echo "fail";
    }
$sel ="select vresion()"; 
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
echo 1;
print_r($row["VERSION()"]);

?>