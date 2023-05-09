<?php
namespace App\classes;
class Student
{
    public $name;
    public $email;
    public $mobile;
    public $num1;
    public $num2;
    public $num3;
    public $data = [];

    public function index()
    {
        $this->data = [10, 20, 300, 'Shakil',120.200, true];
//        echo $this->data[5];
        foreach ($this->data as $item)
        {
            echo $item.'<br/>';
        }


//        $this->x = 100;
//        do{
//            echo 'Hello World <br/>';
//            $this->x++;
//        }while($this->x < 110);



//        $this->x = 100;
//        while ($this->x < 110)
//        {
//            echo 'Hello World <br/>';
//            $this->x++;
//        }



//        $this->num1 = 1;
//        $this->num2 = 20;
//        $this->num3 = 30;
//
//        for ($this->num1 = 99; $this->num1 >= 76; $this->num1--)
//        {
//            echo $this->num1.' ';
//        }



//        switch ($this->num1)
//        {
//            case 10:
//                echo 'Hello world';
//                break;
//            case 20:
//                echo 'Hello Bangladesh';
//                break;
//            case 30:
//                echo 'Hello Therty';
//                break;
//            default:
//                echo 'Hello BITM';
//        }

//        if ($this->num1 > 200)
//        {
//            echo 'Hello world!';
//        }
//        elseif ($this->num1 < 150)
//        {
//            echo 'Hello BITM';
//        }
//        elseif ($this->num1)


//        if ($this->num1 >30)
//        {
//            echo $this->num1;
//        }
//        else
//        {
//            echo 'Hello World';
//        }

//        echo ($this->num1 > $this->num2) && ($this->num2 > $this->num3);
//        echo '<br/>';
//        echo ($this->num1 > $this->num2) && ($this->num2 < $this->num3);
//        echo '<br/>....<br/>';
//        echo ($this->num1 < $this->num2) && ($this->num2 < $this->num3);
//        echo '<br/>....<br/>';
//        echo ($this->num1 > $this->num2) && ($this->num2 > $this->num3);
//        echo '<br/>....<br/>';


//         $this->name = 'Shakil Ahmed';
//        $this->email = 'shakilkhan806690@gail.com';
//
//        echo $this->name."<br>".$this->email;
//        echo "<br>";
//        echo "<br>";


//        echo $this->num1 += $this->num2; // $this->num1 =
//        echo $this->num1 .= $this->num2; // $this->num1 =




//        echo $this->num1 + $this->num2;
//        echo "<br>";
//        echo $this->num1 - $this->num2;
//        echo "<br>";
//        echo $this->num1 * $this->num2;
//        echo "<br>";
//        echo $this->num1 / $this->num2;
//        echo "<br>";
//        echo $this->num1 % $this->num2;
//        echo "<br>";
    }
}