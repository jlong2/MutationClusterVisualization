<!DOCTYPE html>

<head>
    <meta charset="utf-8"></meta>
    <title>Title</title>
    <link rel="stylesheet" href="stylesheet.css"></link>
    <script src="https://d3js.org/d3.v3.min.js" charset="utf-8"></script>
</head>

<body>

<h1>Homepage</h1>

<nav class="menu">
<div id="center">
<ul>
    <li><a href="index.html">Home</a></li>
    <li>Dropdown1
        <ul>
        <li><a href="l1.html" >Link1</a></li>
        <li><a href="l2.html" >Link2</a></li>
        <li><a href="l3.html" >Link3</a></li>
        </ul>
    </li>
    <li>Dropdown2
        <ul>
        <li><a href="l4.html" >Link4</a></li>
        <li><a href="l5.html" >Link5</a></li>
        <li><a href="l6.html" >Link6</a></li>
        </ul>
    </li>
</ul>
</div>
</nav>

<div id="main">
<div id="centeredinmain">
<h2>Title2</h2>
<p>&nbsp;&nbsp;&nbsp;Text here</p>
<form action="?" method="GET">
  Gene: <input type="text" name="gene" />
  <input type="submit"></input>
</form>

<?php 
    if(isset($_GET['gene'])){
        echo "<p>You entered ".$_GET['gene']."</p>" ;
        echo "<script>";
        $geneentered = $_GET['gene'];
        $db = new SQLite3("genedatabase.db");
        $statement = $db->prepare('SELECT countdata FROM genes WHERE genename = :name;');
        $statement->bindValue(':name', $geneentered);
        $result = $statement->execute();
        $genetext = $result->fetchArray()['countdata'];
        $count_array = array_map('intval',explode(" ",$genetext));
        $json_encoded_array=json_encode($count_array);
        echo "    var chartdata=".$json_encoded_array;
        echo "</script>";
        echo '<script src="generategraph.js"></script>';
    }
    else{
        echo "<p>Please enter a gene</p>";
    }
?>

</div>
</div>

</body>

</html>