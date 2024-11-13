var hh;
function lunch(i) {
    //alert(i);
    hh=i;
    $('#del2').modal('show'); 
    id=i;
}
 function confirm(){
    // var bd='/ssbn'; //ssbn مسار الداله deletem 
     $.ajax({
        headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") },
        url:'/fhcfxx',
        data:{
            id:hh
        },
        method:"get",
        success:function(response){
            location.reload();
        }
     });
 }