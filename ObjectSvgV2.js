class Chart {

    //this will be called by our index.html
    constructor(opts) {
        //this is the element where our rect will be appeneded
        this.element = opts.element;

        //this.position = opts.position;

        //calling drawRect() function
        this.drawRect();
    }

    drawRect() {
        
        this.dataset = [2,4,5,6,7,22,100];
        //setting the width, padding and height of our rectangle

        console.log(this.dataset);

        this.padding = 20;
        this.width = $(".svgDiv").width();
        this.height = $(".svgDiv").height()/2;
        var that = this;
        this.radius = (0.4/100) * this.width;

        //appending svg and rectangles to the element i.e container
        this.svg = d3.select(this.element)
            .append("svg")
            .attr("height", this.height)
            .attr("width", this.width)
            .call(d3.zoom()
            //.extent([[this.padding, 0], [this.width-this.padding, 0]])
            .scaleExtent([1, 1000])
            .translateExtent([[this.padding,0], [this.width-this.padding, 0]])
            .on("zoom",zoomed));

             //scaling the domain and range 
        this.xScale = d3.scaleLinear()
        .domain([0,d3.max(this.dataset)])
        .range([this.padding, this.width-this.padding]); 
    
    //creating x-axis
    this.x_axis = d3.axisBottom(this.xScale);
    
    //position of the x-axis in height
    this.xAxisTranslate = this.height/2;
    
    //calling x-axix        
    this.gX = this.svg.append("g")
            .attr("transform","translate(0,"+this.xAxisTranslate+")")
            .call(this.x_axis);

             //Add circle to the line
        this.circ = this.svg.selectAll("circle")
        .data(this.dataset)
        .enter()
        .append("circle")
        .attr("class","cir")
        .attr("cx",function(d){return (that.xScale(d));})
        .attr("cy",this.xAxisTranslate)
        .attr("r",this.radius)
        .attr("fill","purple")
         .on("mouseover",function(d){
             d3.select(this)
                 .transition()
                 .duration(50)
                 .style("cursor","pointer")
                 .attr("r",that.radius/0.75)
         })
        
         .on("mouseout",function(d){
             d3.select(this)
                 .transition()
                 .duration(50)
                 .style("cursor","normal")
                 .attr("r",that.radius)
         })
         .append("title")
         .text((d)=>d)
         .text();

            function zoomed(){
                //create new scale objects based on event
                that.new_xScale = d3.event.transform.rescaleX(that.xScale);

                //update axes
                that.gX.call(that.x_axis.scale(that.new_xScale));
                that.svg.selectAll("circle").data(that.dataset)
                    .attr('cx',function(d){return that.new_xScale(d)})
                    .attr('cy',that.xAxisTranslate);
                
            }

            $('<p> phage is cut '+this.dataset.length+' times</p>').appendTo(this.element);
    }

}