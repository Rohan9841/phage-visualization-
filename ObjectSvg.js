class Chart{

    //this will be called by our index.html
    constructor(opts)
    {   
        //this is the element where our rect will be appeneded
        this.element = opts.element;

        //position to display our rect
        this.pos = opts.pos;

        //calling drawRect() function
        this.drawRect();
    }

    drawRect(){

        //setting the width, padding and height of our rectangle
        var padding = 20;
        this.width = $("#container").width();
        this.height = 100;

        //appending rectangles to the element i.e container
        var rect = d3.select(this.element)
                    .append('rect')
                    .attr("x",0) //setting x-coordinate
                    .attr("y",this.pos)//setting y-coordinate
                    .attr("width",this.width-padding)
                    .attr("height",this.height)
                    .attr("fill","none")
                    .style("stroke","black") //creating border
                    .style("stroke-width",1.5); //setting border width
    }

}