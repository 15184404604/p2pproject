//3. 初始化echarts对象实例
var mycharts = echarts.init(document.getElementById('mybox'));

//4. 配置报表的选项和数据
var optionObj = {
    title: {
        text: '借款类型的金额统计',
        subtext: '2018-09统计',
        x: 'center'
    },
    tooltip: {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
    },
    legend: {
        orient: 'vertical',
        x: 'left',
        //图例
        data: []
    },
    toolbox: {
        show: true,
        feature: {
            mark: { show: true },
            dataView: { show: true,readOnly: false },
            magicType: {
                show: true,
                type: ['pie','funnel'],
                option: {
                    funnel: {
                        x: '25%',
                        width: '50%',
                        funnelAlign: 'left',
                        max: 1548
                    }
                }
            },
            restore: { show: true },
            saveAsImage: { show: true }
        }
    },
    //是否可以重新计算
    calculable: true,
    //序列数据
    series: [
        {
            name: '访问来源',
            type: 'pie',
            radius: '55%',
            center: ['50%','60%'],
            //数据
            data: []
        }
    ]
};

//5. 为echarts对象加载数据 
mycharts.setOption(optionObj);

//发送ajax去后端请求api数据
$.get("./api/borrowData.php",function(data){
    //console.log(data);
    //把从后端得到的数据动态添加到前端页面
    optionObj.legend.data=data.title;
    optionObj.series[0].data=data.data;
    //隐藏动画效果
    mycharts.hideLoading();
    //把新的数据再渲染到echarts对象
    mycharts.setOption(optionObj);

    
},"json")