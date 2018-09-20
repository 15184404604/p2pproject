var reqUrl=location.href;
var borrowType=reqUrl.split("=")[1];

$("#borrowType").val(borrowType);

$("#btnSubmit").on("click",function(){
    var formData=$("#borrowForm").serialize();
    $.post("./api/borrowAdd.php",formData,function(data){
        //console.log(data);
        //判断
        if(data.isSuccess){
            alert(data.msg);
            location.href="./borrow_list.php";
        }else{
            alert(data.msg)
        }
    },"json")
});
