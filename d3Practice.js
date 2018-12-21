//javascript

/* BASICS */

// //returns first selection of DOM element matching the criteria
// d3.select();

// //returns all selections of DOM elements matching the criteria
// d3.selectAll();

// //changes the color of h1 tag to red
// d3.select('h1').style('color','red');

// //Assign attribute to h2
// d3.select('h2')
//     .attr('class','heading') //h2 has class = heading now
//     .text('Updated h2 tag'); //changes the text of h2

// //adding a paragraph in the body of DOM
// d3.select('body').append('p').text('1st para');
// d3.select('body').append('p').text('2nd para');
// d3.select('body').append('p').text('3rd para');

// //selecting all paragraph and coloring them to blue
// d3.selectAll('p').style('color','blue');

//_______________________________________________________

// //array 
// var dataset = [1,2,3,4,5];

// d3.select('body') //select body
//     .selectAll('p')//select all para inside body (returns empty selection because we don't have any paragraph yet)
//     .data(dataset)//call data method and pass dataset as argument. Puts data in waiting state for further processing
//     .enter()//Enter data one by one and perform further operations on them
//     .append('p') //appends paragraph for each data element
// //  .text('D3 is awesome!!')//print in place of dataset
//     .text(function(d){ 
//         return d;      //prints the dataset in each para  
//     });
//----------------------------------------------------------------

// /* BAR CHART */

// //var dataset = [80,100,56,120,180,30,40,120,160];
// var dataset = [1,2,3,4,5];

// //declaring variables
// var svgWidth = 500, svgHeight = 300, barPadding = 5;
// var barWidth = (svgWidth / dataset.length);

// //selecting svg container and setting its width and height
// var svg = d3.select('svg')
//     .attr("width", svgWidth)
//     .attr("height", svgHeight);

// //scaling

// var yScale = d3.scaleLinear()
//     .domain([0,d3.max(dataset)]) // sets the max value of the bar
//     .range([0,svgHeight-15]);// sets the max range upto which the bar can go

// //creating bar chart
// var barChart = svg.selectAll("rect") //we don't have rectangles. So returns empty selection
//     .data(dataset)//provide dataset--> waiting state 
//     .enter()//takes from waiting state and perfom all the below methods on each data
//     .append("rect")//appendinng rectangle on each data inside svg container
//     .attr("y",function(d){ //d = data
//         return svgHeight - yScale(d); //returns y co-ordinate of bar
//     })
//     .attr("height",function(d){
//         return yScale(d); //returns height of bar
//     })
//     .attr("width",barWidth - barPadding)
//     .attr("transform",function (d,i){
//         var translate = [barWidth * i, 0]; //barWidth * i = x-axis, 0 = y-axis, i = index
//         return "translate("+translate + ")"; //we don't want bars at the same position so translating one after another
//     })
//     .attr('fill','blue');

// var text = svg.selectAll("text") // selecting text text which is empty
//     .data(dataset)//putting data in the waiting list
//     .enter()//entering data one by one
//     .append("text")//appending a text for each data
//     .text(function(d){//the text will be d, which is data itself
//         return d;
//     })
//     .attr("y",function(d,i){ // the y-position of text
//         return svgHeight -yScale(d) -2; //svg is down-to-up
//     })
//     .attr("x",function(d,i){//x-position of text
//         return barWidth * i + 10;//the text will be going right 
//     })
//     .attr("fill","red");//filling text with red color
    //---------------------------------------------------------------

    // /*AXES  */

    // //type of axes
    // d3.axisTop();
    // d3.axisRight();
    // d3.axisBottom();
    // d3.axisLeft();

    // //datasets
    // var data = [80,100,56,120,180,30,40,120,160];

    // //determing svg width and height
    // var svgWidth = 600, svgHeight = 300;

    // //assigning svg width and height
    // var svg = d3.select('svg')
    //     .attr("width",svgWidth)
    //     .attr("height",svgHeight);

    // //setting the start and end point of the x-axis
    // var xScale = d3.scaleLinear()
    //     .domain([0,d3.max(data)]) 
    //     .range([0,svgWidth]);

    // //setting the start and end point of the y-axis
    // var yScale = d3.scaleLinear()
    //     .domain([0,d3.max(data)])
    //     .range([svgHeight,0]);

    // //creating the x-asis with scale method and passing xScale as paramenter
    // var x_axis = d3.axisBottom().scale(xScale);

    // //creating the y-axis with scale method and passing xScale as paramenter
    // var y_axis = d3.axisLeft().scale(yScale);

    // //appending a group component to svg DOM
    // svg.append("g")
    //     .attr("transform","translate(50,10)")//setting the pos of axis
    //     .call(y_axis);//setting this g as y-axis 

    // var xAxisTranslate = svgHeight - 20;

    // svg.append("g")
    //     .attr("transform","translate(50,"+xAxisTranslate+")")//setting the pos of axis
    //     .call(x_axis);//setting this g as x-axis
    //---------------------------------------------------------------------------------------------

    // /* CREATING SVG ELEMENTS */

    // //LINE

    // var svgWidth = 600, svgHeight = 600;

    // var svg = d3.select("svg")
    //     .attr("width", svgWidth)
    //     .attr("height", svgHeight)
    //     .attr("class", "svg-container");//setting class of the svg element

    // var line = svg.append("line") //adding line
    //     .attr("x1",100)//start point x
    //     .attr("x2",500)//end point of x
    //     .attr("y1",50)//start point of y
    //     .attr("y2",50)//end point of y
    //     .attr("stroke","red")//drawing with red line
    //     .attr("stroke-width",5); //adding width to the line

    // //RECTANGLE

    // var rect = svg.append("rect")
    //     .attr("x",100)//starting x-coordinate
    //     .attr("y",100)//starting  y-coordinate
    //     .attr("width",200)
    //     .attr("height",100)//top to down
    //     .attr("fill","#9895FF");

    // var cicle = svg.append("circle")
    //     .attr("cx",200)//center  of circle x
    //     .attr("cy",300)//center of circle y
    //     .attr("r",80)//radius
    //     .attr("fill","#7CE8D5");//color 
    //---------------------------------------------------------------

    /* LINE CHART */

    
    <html>
    <head>
        <title>Practice</title>

        <script src = "d3.min.js"></script>
        
        <script src="jquery.js"></script>
        <script src = "jquery-ui/jquery-ui.js"></script>
        <link rel = "stylesheet" href = "jquery-ui/jquery-ui.css">

        <style type = "text/css">
            svg{
                position: relative;
                border: 1px black solid;
            }

            .cir:hover{
                fill: red;
                box-shadow: 0px 0px 0px 10px black;
            }
            
            .cir {
                border: solid 5px #FC5185;
            }

            .lineCut:hover{
                stroke: red;
            }

            .zoom {
  cursor: move;
  fill: none;
  pointer-events: all;
}
            
        </style>
    </head>

    <body>    
        
        <svg class = "line-chart"></svg>

        <script type = "text/javaScript">
            var dataset = [20,21,22,23,40,60,80,100,488,1023];

            
            
            //declare svgWidth
            var svgWidth = $(window).width();
            var svgHeight = 500;

            var margin = {top: 30, right: 40, bottom: 50, left: 60};
            var height = svgHeight - margin.top - margin.bottom;
            var width = svgWidth - margin.left - margin.right;
            
            //padding to add  axis 
            var padding = 20;

            //radius of circle
            var radius = (0.4/100) * svgWidth;
            
            //declare properties of svg
            var svg = d3.select('svg')
                .attr("width",svgWidth)
                .attr("height",svgHeight)
                // .call(d3.zoom().on("zoom",function(){
                //     svg.attr("transform",d3.event.transform)
                // }))
                // .append("g")
                ;

            
            //scaling the domain and range 
            var xScale = d3.scaleLinear()
                .domain([0,d3.max(dataset)])
                .range([0, svgWidth]); 
            
            //creating x-axis
            var x_axis = d3.axisBottom(xScale);

            var zoom = d3.zoom()
                .on("zoom",zoomFunction);

            // Inner Drawing Space
            var innerSpace = svg.append("g")
                .attr("class", "inner_space")
                .attr("transform", "translate(" + margin.left + "," + margin.top + ")")
                .call(zoom);

            var circ = innerSpace.selectAll("circle")
                .data(dataset)
                .enter()
                .append("circle")
                .attr("class","cir")
                .attr("cx",function(d){return (xScale(d));})
                .attr("cy",height)
                .attr("r",radius)
                .attr("fill","purple")
                 .on("mouseover",function(d){
                     d3.select(this)
                         .transition()
                         .duration(50)
                         .style("cursor","pointer")
                         .attr("r",radius/0.95)
                 })
                
                 .on("mouseout",function(d){
                     d3.select(this)
                         .transition()
                         .duration(50)
                         .attr("cx",(d)=>xScale(d))
                         .style("cursor","normal")
                         .attr("r",radius)
                 })
                 .append("title")
                 .text((d)=>d)
                 .text();
                 
            //position of the x-axis in height
            var xAxisTranslate = svgHeight/2;
                
            //add line to all data points
            //  var line = svg.selectAll("line")
            //         .data(dataset)
            //         .enter()
            //         .append("line")
            //         .attr("class","lineCut")
            //         .attr("x1",(d)=>xScale(d))
            //         .attr("y1",xAxisTranslate-5)
            //         .attr("x2",(d)=>xScale(d))
            //         .attr("y2",xAxisTranslate+5)
            //         .attr("stroke","black")
            //         .attr("stroke-width",1);
            
            //calling x-axix        
            // svg.append("g")
            //     .attr("transform","translate(0,"+xAxisTranslate+")")
            //     .call(x_axis);
            var gX = innerSpace.append("g")
            .attr("class", "axis axis--x")
            .attr("transform", "translate(0," + height + ")")
            .call(x_axis);
                
            var view = innerSpace.append("rect")
                .attr("class", "zoom")
                .attr("width", width)
                .attr("height", height)
                .call(zoom)

                //Add circle to the line
            

                 function zoomFunction()
                 {
                    var new_xScale = d3.event.transform.rescaleX(xScale)
                    gX.call(x_axis.scale(new_xScale))
                    circ.attr("transform",d3.event.transform)
                 };

                
                

        </script>
    </body>

</html>