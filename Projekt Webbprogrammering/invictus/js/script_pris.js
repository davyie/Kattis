//Exempelkoden är modifierad från en tutorial på http://bost.ocks.org/mike/bar/
// Mike Bostock har en utmärkt sida med D3-exempel: http://bost.ocks.org/mike/

var margin = {top: 20, right: 20, bottom: 30, left: 40},
    width = 460 - margin.left - margin.right,
    height = 200 - margin.top - margin.bottom;

var x = d3.scale.ordinal()
    .rangeRoundBands([0, width], .1);

var y = d3.scale.linear()
    .range([height, 0]);

var xAxis = d3.svg.axis()
    .scale(x)
    .orient("bottom");

var yAxis = d3.svg.axis()
    .scale(y)
    .orient("left")
    .ticks(10, "int");  

var svg = d3.select("#diagram2").append("svg")
    .attr("width", width + margin.left + margin.right)
    .attr("height", height + margin.top + margin.bottom)
  .append("g")
    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

// lokal fil. Man kan behöva sätta skrivrättigheter så att alla får läsa och skriva (detta är lokalt på maskinen, inte från nätet)
d3.tsv("./tmp/db_info.tsv", type, function(error, data) {


  x.domain(data.map(function(d) { return d.labels; }));
  y.domain([0, d3.max(data, function(d) { return d.pris; })]);
  
  svg.append("g")
      .attr("class", "x axis")
      .attr("transform", "translate(0," + height + ")")
      .call(xAxis);

  svg.append("g")
      .attr("class", "y axis")
      .call(yAxis)
    .append("text")
      .attr("transform", "rotate(-90)")
      .attr("y", 6)
      .attr("dy", ".71em")
      .style("text-anchor", "end")
      .text("Pris");

  svg.selectAll(".bar")
      .data(data)
    .enter().append("rect")
      .attr("class", "bar")
      .attr("x", function(d) { return x(d.labels); })
      .attr("width", x.rangeBand())
      .attr("y", function(d) { return y(d.pris); })
      .attr("height", function(d) { return height - y(d.pris); });

});

function type(d) {
	console.log(d);
  d.pris = +d.pris;
  return d;
}

