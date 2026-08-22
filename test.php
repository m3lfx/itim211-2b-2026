<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    print "<h1>hello world</h1>";
    print '<i>hello world</i>';
    $first_number = 10;
    $second_number = 20;
    $sum = $first_number + $second_number;
    print "<h1>$sum</h1>";
    print '<h1>' . $sum . '</h1>';

    // $testing = 5;
    // $testing = "5";
    // $testing = 0;
    $testing = true;
    print gettype($testing); // integer
    settype($testing, "string");
    print gettype($testing);
    print $testing;
    print "<br>";

    $undecided = "3.14";

    print $undecided;
    $holder = (int) $undecided;
    print "<br>";
    print $holder;
    print "<br>";
    print $undecided;
    print gettype($testing);

    define("USER", "Mike");
    print "Welcome " . USER;

    $mood = "angry";
    if ($mood == "angry") {
        print "Hooray, I'm in a good mood";
    } else if ($mood == "sad") {
        print "Awww. Don't be down!";
    } else {
        print "Neither happy nor sad but $mood";
    }

    $mood = "sadder";
    switch ($mood) {
        case "happy":
            print "Hooray, I'm in a good mood";
            break;
        case "sad":
            print "Awww. Don't be down!";
            break;
        default:
            print "Neither happy nor sad but $mood";
    }

    $counter = 1;
    while ($counter <= 12) {
        print "$counter times 2 is " . ($counter * 2) . "<br>";
        $counter++;
    }

    $num = 1;
    do {
        print "Execution number: $num<br>\n";
        $num++;
    } while ($num > 200 && $num < 400);

    // for ($counter = 1; $counter <= 12; $counter++) {
    //     print "$counter times 2 is " . ($counter * 2) . "<br>";
    // }

    // for ($counter = 1; $counter <= 10; $counter++) {
    //     $temp = 4000 / $counter;
    //     print "4000 divided by $counter is... $temp<br>";
    // }

    // $counter = -4;
    // // for(;;){

    // // }
    // for (; $counter <= 10; $counter++) {
    //     if ($counter == 0)
    //         break;
    //     $temp = 4000 / $counter;
    //     print "4000 divided by $counter is... $temp<br>";
    // }

    // $counter = -4;
    // for (; $counter <= 10; $counter++) {
    //     if ($counter == 0)
    //         continue;
    //     $temp = 4000 / $counter;
    //     print "4000 divided by $counter is... $temp<br>";
    // }

    // print "<table border='1'>\n";
    // for ($y = 1; $y <= 12; $y++) {
    //     print "<tr>\n";
    //     for ($x = 1; $x <= 12; $x++) {
    //         print "\t<td>";
    //         print($x * $y);
    //         print "</td>\n";
    //     }
    //     print "</tr>\n";
    // }
    // print "</table>";
    $num = -321;
    $newnum = abs($num);
    print $newnum;

    function bighello()
    {
        print "<h1>HELLO!</h1>";
    }
    bighello();

    function printBR($txt)
    {
        print("$txt<br>\n");
    }
    printBR("This is a line");
    printBR("This is a new line");
    printBR("This is yet another line");
    printBR(100);

    function addNums($firstnum, $secondnum)
    {
        $result = ($firstnum + $secondnum);
        $a = 1;
        return $result . $a;
    }
    $result = addNums(3, 5);

    print gettype($result);


    function sayHello()
    {
        print "hello<br>";
    }
    $function_holder = "sayHello";
    $function_holder();

    function test()
    {
        $testvariable = "this is a test variable";
    }
    // print "test variable: $testvariable<br>";

    $life = 42;
    function meaningOfLife()
    {
        global $life;

        print "The meaning of life is $life<br>";
    }
    meaningOfLife();

    $num_of_calls = 0;
    function andAnotherThing($txt)
    {
        static $num_of_calls;
        $num_of_calls++;
        print "<h1>$num_of_calls. $txt</h1>";
    }
    andAnotherThing("Widgets");
    print("We build a fine range of widgets<p>");
    andAnotherThing("Doodads");
    print("Finest in the world<p>");
    print $num_of_calls;

    function fontWrap($txt, $size = 5)

    {
        print "<font size=\"$size\"face=\"Helvetica,Arial,Sans-serif\">$txt</font>";
    }
    fontWrap("test");
    fontWrap("some body text<br>", 3);
    fontWrap("some more body text<br>");
    fontWrap("yet more body text<br>");

    function addFive(&$num)
    {
        $num += 5;
        print $num;
    }
    $orignum = 10;
    addFive($orignum);
    print($orignum);

    $users[] = "Bert";
    $users[] = "Sharon";
    $users[] = "Betty";
    $users[] = "Harry";
    print_r($users);

    foreach ($users as $user) {
        print "<h1>$user</h1></br>";
    }

    $first = array("a", "b", "c");
    $second = array(1, "test", 3, 4.56, true);
    // $third = array_merge($first, $second);
    // print_r($third);
    // foreach ($third as $val) {
    //     print "$val<BR>";
    // }
    // print($third[2]);

    // $character = array(
    //     "name" => "bob",
    //     "occupation" => "superhero",
    //     "age" => 30,
    //     "special power" => "x-ray vision",
    //     "name" => "tom",

    // );
    // print_r($character);
    // print($character['name']);

    $character = array();
    $character['name'] = "mike";
    $character['occupation'] = "superhero";
    $character['age'] = 30;

    // $character["special powers"] = "x-ray vision";
    $character["special powers"] = array(
        "power1" => 'flight',
        "power2" => "healing"
    );
    // print($character['special powers']['power1'][1]);
    $character['jobs'] = array("reporter", "scientist");
    // print $character[0] . $character['name'];
    // print_r($character['jobs'][1]);
    foreach ($character as $key => $value) {
        print $key . " " . $value . "<br>";
    }

    foreach ($character['jobs'] as  $value) {
        print $value . "<br>";
    }

    foreach ($character['special powers'] as $key => $value) {
        print $key . " " . $value . "<br>";
    }




    ?>
</body>

</html>