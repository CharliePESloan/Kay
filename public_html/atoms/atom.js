function Atom()
{
    this.canvas = document.createElement("canvas");
    this.canvas.width = 1;
    this.canvas.height = 1;
    this.canvas.style.width = "1px";
    this.canvas.style.height = "1px";
    this.canvas.getContext("2d").fillRect(0,0,1,1);
    return this;
}
const atom = new Atom();