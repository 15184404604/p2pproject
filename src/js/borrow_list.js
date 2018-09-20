//借款页面加载时自动发起ajax请求到后台的api获取当前登录用户的借款信息
$.get("./api/borrowList.php",function(data){
    //console.log(data);
    var htmlStr=$("#borrowTmpl").tmpl(data);
    $("#borrowData").html(htmlStr)

},"json");