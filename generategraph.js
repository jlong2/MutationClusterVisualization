drawallpos();
function drawallpos() {
    var height = 800, width = 1500;
    d3.select('#centeredinmain').append('svg')
        .attr('width', width)
        .attr('height', height)
        .style({'background': '#ffffff','stroke': '#000000','stroke-width': '25'})
    
    var barWidth = 5, barSpacing = 0;
    var binned = [];
    var numberOfBins = Math.floor(width/barWidth);
    var binSize = Math.ceil(chartData.length/numberOfBins);
    console.log(chartData.length)
    console.log(numberOfBins)
    console.log(binSize);
    var j = 0;
    for(j = 0; j < chartData.length; j += binSize){
        var max=0;
        for(k = 0; k < binSize; k++){
            if(chartData[j * binSize + k] > max){
                max = chartData[j * binSize + k]
            }
        }
        binned.push(max);
    }
    console.log(binned.length);

    var scaledHeight = d3.scale.linear()
        .domain([0, d3.max(binned)])
        .range([0, height]);

    var tooltip = d3.select("body")
        .append("div")
        .style({"position": "absolute","z-index": "100","fill": "#000000","visibility": "hidden"})
        .text("will change based on bar");
    
    d3.select('svg')
        .selectAll('rect').data(binned)
        .enter().append('rect')
            .style({'fill': '#000000', 'stroke': '#000000', 'stroke-width': '0'})
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
            .attr('id', function(i){return "rect"+i.toString();})
            .on("mouseover", function(data,i){var pos=i;var postext=pos.toString(); tooltip.style("visibility", "visible").text(postext);})
            .on("mousemove", function(){return tooltip.style("top", (event.pageY-10)+"px").style("left",(event.pageX+10)+"px");})
            .on("mouseout", function(){return tooltip.style("visibility", "hidden");});
            
    /*for (i in hotspotPositions) {
        d3.select(#Math.floor(i/binSize).toString())
            .style("fill","red")
    }*/
    for (j = 0; j < hotspotPositions.length; j++){
        d3.select("#"+"rect"+Math.floor(hotspotPositions[j]/binSize).toString())
            .style('fill','#ff0000')
            //.attr("id","hot")
            //.attr('y',0)
    }
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
}