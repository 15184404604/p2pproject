$(function() {
    
    $('#regform')
        .bootstrapValidator({
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                username: {
                    validators: {
                        notEmpty: {
                            message: '用户名不能为空'
                        },
                        stringLength: {
                            min: 6,
                            max: 12,
                            message: '用户名长度应为6~12位'
                        },
                        regexp:{
                            regexp:/^[a-zA-Z0-9_]+$/,
                            message:'用户名由数字字母下划线和.组成'
                           }
                    }
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: '密码不能为空'
                        },
                        stringLength: {
                            min: 6,
                            max: 18,
                            message: '用户名长度应为6~18位'
                        },
                        different : { //不能和用户名相同

                            field : 'username' , //需要进行比较的input name值
                            
                            message : '密码不能和用户名相同'
                            
                            },
                    }
                },
                repeatPassword: {
                    validators: {
                        notEmpty: {
                            message: '密码不能为空'
                        },
                        identical : { //相同

                            field : 'password' , //需要进行比较的input name值
                            
                            message : '两次输入密码不一致'
                            
                            }
                    }
                },
                phone:{
                    validators:{
                     notEmpty:{
                      message:'手机号码不能为空'
                     },
                     stringlength:{
                      min:11,
                      max:11,
                      message:'请输入11位手机号码'
                     },
                     regexp:{
                      regexp:/^1[3|5|8]{1}[0-9]{9}$/,
                      message:'请输入正确的手机号码'
                     }
                    }
                   },
                email:{
                    validators:{
                        notEmpty: {
                            message: '邮箱地址不能为空'
                        },
                        emailAddress:{
                            message:'请输入正确的邮箱地址'
                        }
                    }
                }
            }
        })
        .on('success.form.bv', function(e) {
            //阻止表单的默认提交行为
            e.preventDefault();
            //获取这个表单的实例
            var $form=$(e.target);
            //获取验证的实例
            var bv=$form.data("bootstrapValidator");
            
            //用一个常量保存请求地址
            const regUrl='./api/userAdd.php';

            //用一个常量保存表单数据
            const data=$form.serialize();
            // Use Ajax to submit form data
            $.post(regUrl, data, function(result) {
                //console.log(result);
                if(result.isSueecss){
                    $('#msgShowTitel1').text('注册成功！');
                    $('#msgShowContent1').html(`<span class="glyphicon glyphicon-ok"></span>${result.msg},
                    等待<span id="num1">3</span>秒后跳转到登录界面`);
                    //设置倒计时，时间到后跳转到个人中心
                    let num1=3;
                    let time1=setInterval(()=>{
                        num1--;
                        $('#num1').text(num1);
                        if(num1==0){
                            clearInterval(time1);
                            location.href="./Login.php"
                        }
                    },1000);
                }else{
                    $('#msgShowTitel1').text('注册失败！');
                    $('#msgShowContent1').html(`<span class="glyphicon glyphicon-remove"></span>${result.msg}`)
                };
                $('#msgShowModal1').modal('show');
            }, 'json');
        });
        $('#loginform').bootstrapValidator({
            //message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                username: {
                    message: '用户名验证失败',
                    validators: {
                        notEmpty: {
                            message: '用户名不能为空'
                        },
                        stringLength: {
                            min: 6,
                            max: 18,
                            message: '用户名长度必须在6到18位之间'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9_]+$/,
                            message: '用户名只能包含大写、小写、数字和下划线'
                        }
                    }
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: '密码不能为空'
                        }
                    }
                }
            }
        }).on('success.form.bv', function(e) {
            //阻止表单的默认提交行为
            e.preventDefault();
            //获取这个表单的实例
            var $form=$(e.target);
            //获取验证的实例
            var bv=$form.data("bootstrapValidator");
            
            //用一个常量保存请求地址
            const regUrl='./api/userCheck.php';

            //用一个常量保存表单数据
            const data=$form.serialize();
            // Use Ajax to submit form data
            $.post(regUrl, data, function(result) {
                //console.log("api返回的结果",result);
                if(result.isSueecss){
                    $('#msgShowTitel2').text('登录成功！');
                    $('#msgShowContent2').html(`<span class="glyphicon glyphicon-ok"></span>${result.msg},
                    等待<span id="num2">3</span>秒后跳转到您的个人中心`);
                    //设置倒计时，时间到后跳转到个人中心
                    let num2=3;
                    let time2=setInterval(()=>{
                        num2--;
                        $('#num2').text(num2);
                        if(num2==0){
                            clearInterval(time2);
                            location.href="./personal.php"
                        }
                    },1000);
                    
                    //location.href="./personal.php"
                }else{
                    $('#msgShowTitel2').text('登录失败！');
                    $('#msgShowContent2').html(`<span class="glyphicon glyphicon-remove"></span>${result.msg}`)
                };
                
                $('#msgShowModal2').modal('show');
            }, 'json');
        });

});