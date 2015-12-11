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