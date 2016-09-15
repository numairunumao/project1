<meta charset="utf-8" />
<?php
    include 'connectDB.php';

    if(isset($_GET['submit']))
        {
            $a1 = $_GET['a1'];
            $a2 = $_GET['a2'];
            $a3 = $_GET['a3'];
            $a4 = $_GET['a4'];
            $a5 = $_GET['a5'];

            $b1 = $_GET['b1'];
            $b2 = $_GET['b2'];
            $b3 = $_GET['b3'];
            //$b4 = $_GET['b4'];  //รูป



            $c1 = $_GET['c1'];
            $c2 = $_GET['c2'];
            $c3 = $_GET['c3'];
            $c4 = $_GET['c4'];
            $c5 = $_GET['c5'];
            $c6 = $_GET['c6'];
            $c7 = $_GET['c7'];
            $c8 = $_GET['c8'];
            $c9 = $_GET['c9'];
            $c10 = $_GET['c10'];



            $d1 = $_GET['d1'];
            $d2 = $_GET['d2'];
            $d3 = $_GET['d3'];
            $d4 = $_GET['d4'];
            $d5 = $_GET['d5'];
            $d6 = $_GET['d6'];
            $d7 = $_GET['d7'];
            $d8 = $_GET['d8'];
            $d9 = $_GET['d9'];
            $d10 = $_GET['d10'];
            $d11 = $_GET['d11'];
            $d12 = $_GET['d12'];
            $d13 = $_GET['d13'];
            $d14 = $_GET['d14'];
            $d15 = $_GET['d15']; //รูป
            $d16 = $_GET['d16'];
            $d17 = $_GET['d17'];
            $d18 = $_GET['d18'];
            $d19 = $_GET['d19'];
            $d20 = $_GET['d20'];
            $d21 = $_GET['d21'];
            $d22 = $_GET['d22'];
            $d23 = $_GET['d23'];  //รูป

            $e1 = $_GET['e1'];
            $e2 = $_GET['e2'];
            $e3 = $_GET['e3'];

            $f1 = $_GET['f1'];
            $f2 = $_GET['f2'];

            $g1 = $_GET['g1'];

            $sql = " INSERT INTO dataFollow (a1,a2,a3,a4,a5,b1,b2,b3,b4,c1,c2,c3,c4,c5,c6,c7,c8,c9,c10
            ,d1,d2,d3,d4,d5,d6,d7,d8,d9,d10,d11,d12,d13,d14,d15,d16,d17,d18,d19,d20,d21,d22,d23,e1,e2,e3,f1,f2,g1)
            VALUES ('$a1','$a2','$a3','$a4','$a5','$b1','$b2','$b3','$b4','$c1','$c2','$c3','$c4','$c5','$c6','$c7','$c8'
            ,'$c9','$c10','$d1','$d2','$d3','$d4','$d5','$d6','$d7','$d8','$d9','$d10','$d11','$d12','$d13','$d14','$d15','$d16'
            ,'$d17','$d18','$d19','$d20','$d21','$d22','$d23','$e1','$e2','$e3','$f1','$f2','$g1')";

            if (mysqli_query($mysqli, $sql)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
            }
            header("location:boardstaff.php");
        }


?>