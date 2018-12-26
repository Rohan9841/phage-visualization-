class Chart {

    //this will be called by our index.html
    constructor(opts) {
        //this is the element where our rect will be appeneded
        this.element = opts.element;

        //position to display our rect
        this.dataset = opts.cutPoints;

        //phage that is cut
        this.enzyme = opts.enzyme;

        this.phage = opts.phage;

        this.basepair = parseInt(opts.bpair,10);

        //calling drawRect() function
        this.drawRect();
    }

    drawRect() {
        
        console.log("This is before conversion:" + d3.max(this.dataset));

        for (var i = 0; i < this.dataset.length; i++) {
            this.dataset[i] = parseInt(this.dataset[i], 10);
        }
        console.log("This is after conversion:" + d3.max(this.dataset));

        //declare svgWidth
        this.width = $(".svgDiv").width();
        this.height = $(".svgDiv").height() / 1.5;
        this.padding = (1.95 / 100) * this.width;
        var that = this;

        //radius of circle
        this.radius = (0.4 / 100) * this.width;

        //declare properties of svg
        this.svg = d3.select(this.element)
            .append("svg")
            .attr("width", this.width)
            .attr("height", this.height)
            .attr("transform","translate(0,20)")
            .call(d3.zoom()
                .extent([[this.padding, 0], [this.width - this.padding, 0]])
                .scaleExtent([1, 1000])
                .translateExtent([[this.padding, 0], [this.width - this.padding, 0]])
                .on("zoom", zoomed));

        //scaling the domain and range 
        this.xScale = d3.scaleLinear()
            .domain([0, this.basepair])
            .range([this.padding, this.width - this.padding]);

        //creating x-axis
        this.x_axis = d3.axisBottom(this.xScale);

        //position of the x-axis in height
        this.xAxisTranslate = this.height / 2;

        //calling x-axix        
        this.gX = this.svg.append("g")
            .attr("transform", "translate(0," + this.xAxisTranslate + ")")
            .call(this.x_axis);

            if(this.dataset.length != 0)
            {
            //Add circle to the line
            this.circ = this.svg.selectAll("circle")
                .data(this.dataset)
                .enter()
                .append("circle")
                .attr("class", "cir")
                .attr("cx", function (d) { return (that.xScale(d)); })
                .attr("cy", this.xAxisTranslate)
                .attr("r", this.radius)
                .attr("fill", "purple")
                .on("mouseover", function (d) {
                    d3.select(this)
                        .transition()
                        .duration(50)
                        .style("cursor", "pointer")
                        .attr("r", that.radius / 0.75)
                })

                .on("mouseout", function (d) {
                    d3.select(this)
                        .transition()
                        .duration(50)
                        .style("cursor", "normal")
                        .attr("r", that.radius)
                })
                .append("title")
                .text((d) => d)
                .text();
            }

            this.line = this.svg.append("line") //adding line
            .attr("x1",this.width-this.padding)//start point x
            .attr("x2",this.width-this.padding)//end point of x
            .attr("y1",this.xAxisTranslate-5)//start point of y
            .attr("y2",this.xAxisTranslate+5)//end point of y
            .attr("stroke","black")//drawing with red line
            .attr("stroke-width",5)
            .attr("class","endLine")
            .append("title")
            .text(this.basepair); //adding width to the line

            function zoomed() {
                //create new scale objects based on event
                that.new_xScale = d3.event.transform.rescaleX(that.xScale);

                //update axes
                that.gX.call(that.x_axis.scale(that.new_xScale));

                if(that.dataset.length != 0)
                {
                    that.svg.selectAll("circle").data(that.dataset)
                        .attr('cx', function (d) { return that.new_xScale(d) })
                        .attr('cy', that.xAxisTranslate);
                }
            }
        
            $('<p>'+this.enzyme+' cuts '+this.phage+' '+this.dataset.length+' times</p>').appendTo(this.element);

    }

}