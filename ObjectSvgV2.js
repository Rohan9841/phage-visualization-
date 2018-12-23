class Chart{

    //this will be called by our index.html
    constructor(opts)
    {   
        //this is the element where our rect will be appeneded
        this.element = opts.element;

        //calling drawRect() function
        this.drawRect();
    }

    drawRect(){

        //setting the width, padding and height of our rectangle
        var padding = 20;
        this.width = $("#container").width();
        this.height = 120;

        //appending svg and rectangles to the element i.e container
        var rect = d3.select(this.element)
                    .append("svg")
                    .attr("height",this.height)
                    .attr("width",this.width)
                    .append('rect')
                    .attr("x",10) //setting x-coordinate
                    .attr("y",10)//setting y-coordinate
                    .attr("width",this.width-padding)
                    .attr("height",this.height - padding)
                    .attr("fill","none")
                    .style("stroke","black") //creating border
                    .style("stroke-width",1.5); //setting border width
    }

}