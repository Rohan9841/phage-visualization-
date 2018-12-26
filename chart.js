class Chart{

    constructor(opts)
    {
        this.element = opts.element;
        this.draw();
    }

    draw(){

        var svg = d3.select(this.element)
                    .append('svg');

        this.width = $(window).width();
        this.height = 50;

        this.element.innerHTML = '';
        var svg = d3.select(this.element)
                    .append('svg')
                    .attr("width",this.width)
                    .attr("height",this.height);
    }
}