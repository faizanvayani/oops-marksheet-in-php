
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oops marksheet</title>
</head>
<style>
    *{
        margin:20px;
        padding:0px;
        background-color: grey;
    }
    h1{
        text-align: center;

    }
   h2 {
         
           color:  white;
         
        }
        .stu-name{
            
            /* font-size: 20px; */
            text-align: center;
            border: 2px solid black;
            display: inline-block;
            width:270px;
            box-shadow:0 2px 10px rgba(0,0,0,0.1);
            border-radius:5px;
            font-size: 20px;
            text-transform: uppercase;
            margin-left: 20px;
        }
    
</style>
<body>
    <div class="container">
    <h1>OOPS marksheet in PHP</h1>

    <?php
class Marksheet{
    public $studentname,$subject,$marks,$grade;

    public function __setproperties ($studentname,$subject,$marks,$grade){
        $this->studentname = $studentname;
        $this->subject = $subject;
        $this->marks = $marks;
        $this->grade = $grade;
    }
    public function __getproperties(){
        echo"<div class='stu-name'>";
        echo "<h2>student name :". $this->studentname ."</h2><br>";  
        echo "<h3>subject :". $this->subject ."</h3><br>";  
        echo "<h4>marks :". $this->marks ."</h4><br>";  
        echo "<h4>grade :". $this->grade ."</h4><br>";  
        echo"</div>";
    }
}
$studentname1 = new Marksheet;
$studentname1->__setproperties("haris","english","89","A");
$studentname1->__getproperties();

$studentname2 = new Marksheet;
$studentname2->__setproperties("tariq","math","60","B");
$studentname2->__getproperties();

$studentname3 = new Marksheet;
$studentname3->__setproperties("owais","sindhi","75","B+");
$studentname3->__getproperties();

$studentname4 = new Marksheet;
$studentname4->__setproperties("waqas","urdu","65","B");
$studentname4->__getproperties();

$studentname5 = new Marksheet;
$studentname5->__setproperties("javed","physics","80","A");
$studentname5->__getproperties();
?>

    </div>
</body>

</html>
