alert("Oh yes !");

$(document).ready(function(){
    $("#Btnres").click(function(){
        var txta = ("txta").val();
        var txtb = ("txtb").val();
        var txtc = ("txtc").val();
        var txtd = ("txtd").val();

        if (txta ==0){
            if (txtb ==0){
                if (txtd ==0){
                    ("#txtres").val("S= IR");
                }else{
                    ("#txtres").val("S= { }");
                }
            }else{
                ("#textres").val("S={"& -txtc/txtb &"}");
            }
        }else{
            d = (txtb*txtb)-4*(txta*txtc);
            if (d<0){
                ("txtres").val("S = { }");
            }else if(d ==0){
                ("txteres").val("S= {"&-txtb/txtc &"}");
            }else
        }
        
    });
}

);