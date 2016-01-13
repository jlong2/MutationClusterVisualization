drawallpos();
function drawallpos() {

    var height = 800, width = 1500;
    var svg = d3.select("#centeredinmain").append("svg")
        .attr("width", width)
        .attr("height", height)
        .style({"background": "#ffffff","stroke": "#000000"})
    var barGroupHeight = Math.round(0.8 * height);
    var barGroupWidth = Math.round(0.8 * width);
        
    var barWidth = 5, barSpacing = 0;
    var binned = [];
    var numberOfBins = Math.floor(barGroupWidth/barWidth);
    var binSize = Math.ceil(chartData.length/numberOfBins);
    console.log("chart array length"+String(chartData.length))
    console.log("number of bars"+String(numberOfBins))
    console.log("binsize"+String(binSize));
    var j = 0;
    for (j = 0; j < chartData.length; j += binSize){
        var max = 0;
        for (k = 0; k < binSize; k++){
            if (chartData[j + k] > max){
                max = chartData[j + k]
            }
        }
        binned.push(max);
    }
    console.log("binned length"+String(binned.length));
    var scaledHeight = d3.scale.linear()
        .domain([0, d3.max(binned)])
        .range([0, barGroupHeight]);

    var tooltip = d3.select("body")
        .append("div")
        .style({"position": "absolute","z-index": "100","fill": "#000000","visibility": "hidden","color": "blue"})
        .text("will change based on bar");

    console.log("max count "+String(d3.max(binned)));
    var translatedOrigin = [Math.round(0.05*barGroupWidth), Math.round(0.05*barGroupHeight)];
    d3.select("svg")
        .append("g")
        .attr("transform", "translate("+String(translatedOrigin[0])+","+String(-translatedOrigin[1])+")")
        .selectAll("rect").data(binned)
        .enter().append("rect")
            .style({"fill": "#000000", "stroke": "#000000", "stroke-width": "0"})
            .attr("width", barWidth)
            .attr("height", function (data) {
                if (scaledHeight==0) {
                    return 0.1;
                }
                return scaledHeight(data);
            })
            .attr("x", function (data, i) {
                return i * (barWidth + barSpacing);
            })
            .attr("y", function (data) {
                return height - scaledHeight(data);
            })
            .attr("id", function(i){return "rect"+i.toString();})
            .on("mouseover", function(data,i){var pos=(i+1)*binSize;var postext="Position: "+pos.toString()+" Count: "+data; tooltip.style("visibility", "visible").text(postext);})
            .on("mousemove", function(){return tooltip.style("top", (event.pageY-10)+"px").style("left",(event.pageX+10)+"px");})
            .on("mouseout", function(){return tooltip.style("visibility", "hidden");})

    var x = d3.scale.linear()
        .domain([0,binSize * numberOfBins])
        .range([0,barWidth * numberOfBins]);

    var y = d3.scale.linear()
        .domain([0,d3.max(binned)])
        .range([barGroupHeight, 0]);

    var xAxis = d3.svg.axis()
        .scale(x)
        .ticks(20)
        .orient("bottom");

    var yAxis = d3.svg.axis()
        .scale(y)
        .orient("left");
            
    //console.log(height-100)
    svg.append("g")
      .attr("class", "x axis")
      .attr("transform", "translate("+String(translatedOrigin[0])+","+String(height-translatedOrigin[1])+")")
      .call(xAxis);

    svg.append("g")
      .attr("class", "y axis")
      .attr("transform", "translate("+String(translatedOrigin[0])+","+String((height-translatedOrigin[1])-barGroupHeight)+")")
      .call(yAxis);
            
    /*for (i in hotspotPositions) {
        d3.select(#Math.floor(i/binSize).toString())
            .style("fill","red")
    }*/
    for (j = 0; j < hotspotPositions.length; j++){
        d3.select("#"+"rect"+Math.floor(hotspotPositions[j]/binSize).toString())
            .style("fill","#ff0000")
            //.attr("id","hot")
            //.attr("y",0)
    }
    
}