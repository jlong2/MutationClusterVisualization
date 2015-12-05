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
<!--?php
    echo "<p>This is a php here.</p>";
?-->
<!--?php phpinfo(); ?-->
<form action="?" method="GET">
  Gene: <input type="text" name="gene" />
  <input type="submit"></input>
</form>

<?php 
    if($_GET['gene']==""){
        echo "<p>Please enter a gene</p>"
    }
    else{
        echo "<p>You entered ".$_GET['gene']."</p>" 
    }
?>

<script>
    //var PTENdata = [0, 5, 1, 4, 0, 2, 6, 1, 1, 0, 6, 1, 0, 4, 8, 13, 2, 1, 1, 3, 2, 3, 0, 4, 20, 4, 5, 14, 3, 1, 1, 2, 0, 2, 2, 10, 13, 3, 15, 2, 0, 0, 8, 0, 4, 2, 6, 7, 4, 2, 0, 0, 3, 3, 3, 5, 3, 5, 2, 3, 1, 15, 3, 1, 0, 3, 8, 4, 15, 0, 4, 6, 1, 2, 2, 1, 1, 0, 1, 3, 2, 6, 2, 0, 1, 7, 5, 2, 15, 0, 5, 5, 26, 15, 4, 10, 11, 0, 0, 1, 0, 10, 0, 2, 0, 21, 0, 9, 7, 2, 3, 3, 11, 3, 5, 1, 7, 1, 4, 9, 2, 7, 6, 12, 14, 7, 18, 12, 18, 13, 246, 5, 19, 2, 8, 9, 26, 2, 4, 3, 2, 5, 16, 0, 5, 1, 1, 3, 4, 1, 9, 6, 5, 4, 6, 15, 2, 1, 0, 13, 3, 5, 8, 1, 5, 19, 2, 10, 1, 1, 12, 6, 2, 78, 4, 2, 0, 10, 2, 1, 2, 0, 3, 1, 1, 1, 0, 1, 1, 2, 1, 0, 1, 1, 0, 0, 0, 1, 3, 0, 0, 0, 1, 0, 7, 2, 0, 0, 0, 0, 0, 1, 0, 4, 1, 2, 3, 3, 1, 1, 0, 0, 5, 0, 0, 1, 1, 3, 0, 0, 4, 0, 1, 1, 6, 1, 0, 0, 3, 2, 0, 6, 2, 2, 4, 0, 12, 1, 6, 1, 0, 14, 10, 6, 2, 3, 3, 2, 2, 0, 0, 0, 0, 2, 1, 0, 0, 0, 0, 0, 3, 8, 6, 2, 9, 3, 3, 7, 0, 0, 0, 0, 0, 0, 8, 0, 0, 4, 2, 0, 0, 5, 0, 2, 1, 0, 0, 0, 1, 3, 0, 0, 0, 0, 3, 1, 0, 6, 3, 0, 1, 0, 0, 0, 1, 0, 0, 0, 5, 0, 2, 0, 1, 3, 0, 9, 4, 0, 0, 0, 0, 5, 0, 0, 2, 2, 3, 1, 2, 6, 0, 7, 5, 1, 9, 3, 2, 1, 5, 0, 0, 0, 11, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 3, 2, 0, 0, 0, 2, 0, 0, 0, 1, 0, 4, 0, 0, 0, 0, 0, 0, 2, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 1, 0, 0, 2, 0, 0, 0];
    //var BRAFdata =[0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 2, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 1, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 2, 2, 0, 1, 1, 8, 0, 0, 0, 0, 2, 1, 1, 0, 2, 0, 2, 2, 1, 0, 2, 0, 0, 5, 2, 26, 1, 56, 5, 4, 130, 0, 7, 6, 0, 0, 4, 0, 0, 0, 1, 0, 0, 0, 2, 0, 3, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 2, 0, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 27, 2, 1, 5, 0, 4, 5, 3, 4, 2, 2, 6, 4, 111, 14, 17, 73, 6, 6, 39322, 162, 2, 1, 4, 10, 7, 1, 3, 3, 2, 2, 1, 0, 4, 4, 7, 2, 7, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 5, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0]
    //sanitize this
    var chartdata = <?php 
        $geneentered = $_GET['gene'];
        $db = new SQLite3("genedatabase.db");
        $statement = $db->prepare('SELECT countdata FROM genes WHERE genename = :name;');
        $statement->bindValue(':name', $geneentered);
        $result = $statement->execute();
        $genetext = $result->fetchArray()['countdata'];
        $count_array = array_map('intval',explode(" ",$genetext));
        echo json_encode($count_array);
    ?>;
    
    var binned = [];
    binsize = 1;
    for(j = 0; j < chartdata.length; j += binsize){
        sum=0;
        for(k = 0; k < binsize; k++){
            sum += chartdata[j*binsize+k];
        }
        binned.push(sum);
    }
    var height = 800,
    width = 1200,
    barWidth = width/(binned.length+1),
    barSpacing = 0;
 
    var scaledHeight = d3.scale.linear()
        .domain([0, d3.max(binned)])
        .range([0, height])

    var tooltip = d3.select("body")
        .append("div")
        .style({"position": "absolute","z-index": "100","fill": "#000000"})
        .style("visibility", "hidden")
        .text("will change based on bar");
    
    d3.select('#centeredinmain').append('svg')
        .attr('width', width)
        .attr('height', height)
        .style({'background': '#ffffff','stroke': '#000000','stroke-width': '25'})
        .selectAll('rect').data(binned)
        .enter().append('rect')
            .style({'fill': '#000000', 'stroke': '#000000', 'stroke-width': '5'})
            .attr('width', barWidth)
            .attr('height', function (data) {
                return scaledHeight(data);
            //.attr('height', function (data,i) {
            //    return i;
            })
            .attr('x', function (data, i) {
                return i * (barWidth + barSpacing);
            })
            .attr('y', function (data) {
                return height - scaledHeight(data);
            //.attr('y', function (data,i) {
            //    return height - i;
            })
            .on("mouseover", function(i){var pos=i;var postext=pos.toString();return tooltip.style("visibility", "visible").text(postext);})
            .on("mousemove", function(){return tooltip.style("top", (event.pageY-10)+"px").style("left",(event.pageX+10)+"px");})
            .on("mouseout", function(){return tooltip.style("visibility", "hidden");});

    /*var x = d3.scale.ordinal()
        .rangeRoundBands([0, width], .1);

    var y = d3.scale.linear()
        .range([height, 0]);

    var xAxis = d3.svg.axis()
        .scale(x)
        .orient("bottom");

    var yAxis = d3.svg.axis()
        .scale(y)
        .orient("left")
        .tickFormat(formatPercent);*/
</script>
</div>
</div>

</body>

</html>