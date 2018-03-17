$(document).ready(function() {
    document.getElementById("wrap").addEventListener("scroll", function(){
        var translate = "translate(0,"+this.scrollTop+"px)";
        $("#header").css('transform', translate);
    });
});