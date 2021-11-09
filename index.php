<?php 
    //  $stringOne = "Hello my name is ";
    // $stringTwo = "Joe";
    // echo $stringOne . $stringTwo;

    // $name = "Steve";
    // echo "Hey my name is $name";
    // echo "The dog is \"barking\"";
    // echo 'the dog is "barking"';

    // echo str_replace('e', 'o', $name)

    // $array = ["joe", "hello", 32];
    // $array[] = "fart";
    // $array2 = ["i", "like", "ass"];
    // print_r(array_merge($array, $array2));
    // array_push($array2, "funk");
    // print_r($array2);
    // 
    
    // Associative Array (structured a bit like a JS object)

    // $blogs = [
    //     ["name"=>"joe", "colour"=>"blue", "word"=>"ass"],
    //     ["name"=>"nick", "colour"=>"green", "word"=>"..."],
    //     ["name"=>"chris", "colour"=>"red", "word"=>"dont fiso"]
    // ];

    //    echo $blogs[0]["word"];
    //    echo count($blogs);
    // $blogs[] = ["name"=>"laura", "colour"=>"pink", "word"=>"i am mad"];
    // print_r($blogs[3]);
    // echo count($blogs);
    // $pop = array_pop($blogs);
    // print_r($pop)
    // 

      $blogs = [
        ["name"=>"joe", "colour"=>"blue", "word"=>"ass"],
        ["name"=>"nick", "colour"=>"green", "word"=>"..."],
        ["name"=>"chris", "colour"=>"red", "word"=>"dont fiso"]
    ];
    

    // ForEach Loop

    // foreach($blogs as $blog) {
    //     echo "name: " . $blog["name"] . " favourite word: " . $blog["word"] . "<br>";
    // }

    // For Loop

    // for($i = 0; $i < count($blogs); $i ++) {
    //     echo $blogs[$i]["name"] . "<br>";
    // }

    // While

    // $i = 0;
    // while($i < count($blogs)){
    //     echo $blogs[$i]["colour"] . "<br>";
    //     $i ++;
    // }

    // Break and Continue

    // foreach($blogs as $blog){
    //     if($blog["colour"] == "red") {
    //         continue;
    //     }
    //     echo $blog["name"] . "<br>";
    //     }

    class Person {
        public $name;
        public $age;

        function set_name($name){
            $this->name = $name;
        }

        function get_name(){
            return $this->name;
        }

        function set_age($age){
            $this->age = $age;
        }

        function get_age(){
            return $this->age;
        }

        function sayHello(){
            if($this->age < 5 ){
            echo "Hello, $this->name you are $this->age and a child";
        } else {
            echo "Hello, $this->name you are $this->age and an adult";
        }

    }
}

    $joe = new Person();
    $joe->set_name('Joe');
    $joe->set_age(34);

    class Child extends Person {
        public $favouritetoy;

        function set_toy($toy){
            $this->toy = $toy;
        }

        function get_toy(){
            return $this->toy;
        }
    }

    $child = new Child();
    $child->set_name("Romy");
    $child->set_age(2);
    $child->set_toy("teddy bear");
    $child->sayHello();
    echo "<br />";
    $joe->sayHello();

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php 
            foreach($blogs as $blog) { ?>
            <?php if($blog["name"] == "joe") { ?>
            <h3>Name: <?php echo $blog["name"] ?></h3>
            <p>Favourite Colour : <?php echo $blog["colour"] ?></p>
            <?php } ?>
        <?php } ?>
    </ul>
</body>
</html>
