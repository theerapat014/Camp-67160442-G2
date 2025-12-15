@extends('template.default')
@section('title','view2')
@section('content')
    <div>
        <h1>This is page 2</h1>
        <input type="text" id="input"> My input
        <button onclick="Myfun()">submit</button>
        <button onclick="myfun3()">Restart</button>
        <?php
        $arr = array(1,2,3,4) ;
        $name = 'Laravel';
        echo "<h1>Hello, $name!</h1>";
        var_dump($arr);
        for( $i = 0; $i < count($arr); $i++ ) {
            echo "The number is: ".$arr[$i]."<br>";
        }
        foreach( $arr as $k => $v ) {
            echo "Key: ".$k." Value: ".$v."<br>";
        }
        ?>
    </div>
@endsection

