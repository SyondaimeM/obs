// TYPEWRITER 
var TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.lastDeletingStatus=0;
    this.isDeleting = 0;
};
var timer;
TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting===1) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting===1) { delta /= 2; }

    if (this.isDeleting===0 && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = 1;
    } else if (this.isDeleting===1 && this.txt === '') {
        this.isDeleting = 0;
        this.loopNum++;
        delta = 500;
    }

    if(this.isDeleting!==2){
    timer=setTimeout(function() {
	    that.tick();
        }, delta);
    }
};

TxtType.prototype.toggleStart=function(){
//start back up 
    if(this.isDeleting===2){
        this.isDeleting=this.lastDeletingStatus;
        this.lastDeletingStatus=2;
 }
//stop
else{
    this.lastDeletingStatus=this.isDeleting;
    this.isDeleting=2;
    clearTimeout(timer);
}
}
    var toggleStart=function(){
       txtType.toggleStart();
        txtType.tick();
    }
	var txtType;

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
		txtType=new TxtType(elements[i], JSON.parse(toRotate), period);
            }
          
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };