<template>
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <bread-crumb></bread-crumb>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Stacked Area Chart</h2>
                        </div>
                        <div class="body">
                            <chart :options="stackedBarChart" style="height: 400px; width: 100%;"></chart>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Pie Chart</h2>
                        </div>
                        <div class="body">
                            <chart :options="pieChart" style="width: 100%;"></chart>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Punch Card</h2>
                        </div>
                        <div class="body">
                            <chart :options="punchCardOptions" style="width: 100%;"></chart>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import BreadCrumb from '@/components/BreadCrumb'
export default {
    name:'EChartsComponent',
    components: {
        BreadCrumb,
    },data (){
        return{
            stackedBarChart:{
                color: ["#49c5b6", "#e47297", "#a27ce6", "#ffce4b", "#3eacff"],
                tooltip: {
                    trigger: 'axis',
                    axisPointer: {
                        type: 'cross',
                        label: {
                            backgroundColor: '#6a7985'
                        }
                    }
                },
                legend: {
                    data: ['Email marketing', 'Alliance advertising', 'Video ad', 'Direct interview', 'Search engine'],
                    textStyle:{
                        color: "#C2C2C2"
                    }
                },
                grid: {
                    left: '3%',
                    right: '4%',
                    bottom: '3%',
                    containLabel: true
                },
                xAxis: [
                    {
                        type: 'category',
                        boundaryGap: false,
                        data: ['Monday', 'Tuesday', 'Wednessday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
                        axisLine: {
                            lineStyle: {
                                color: "#C2C2C2",
                            },
                        },
                        axisLabel: {
                            color: "#C2C2C2",
                        },
                    }
                ],
                yAxis: [
                    {
                        type: 'value',
                        splitLine: {
                            show: false
                        },
                        axisLine: {
                            lineStyle: {
                                color: "#C2C2C2",
                            },
                        },
                        axisLabel: {
                            color: "#C2C2C2",
                        },
                    }
                ],
                series: [
                    {
                        name: 'Email marketing',
                        type: 'line',
                        stack: 'Total amount',
                        areaStyle: {},
                        data: [120, 132, 101, 134, 90, 230, 210]
                    },
                    {
                        name: 'Alliance advertising',
                        type: 'line',
                        stack: 'Total amount',
                        areaStyle: {},
                        data: [220, 182, 191, 234, 290, 330, 310]
                    },
                    {
                        name: 'Video ad',
                        type: 'line',
                        stack: 'Total amount',
                        areaStyle: {},
                        data: [150, 232, 201, 154, 190, 330, 410]
                    },
                    {
                        name: 'Direct interview',
                        type: 'line',
                        stack: 'Total amount',
                        areaStyle: { },
                        data: [320, 332, 301, 334, 390, 330, 320]
                    },
                    {
                        name: 'Search engine',
                        type: 'line',
                        stack: 'Total amount',
                        label: {
                            show: true,
                            position: 'top'
                        },
                        areaStyle: { },
                        data: [820, 932, 901, 934, 1290, 1330, 1320]
                    }
                ]
            },
            pieChart:{
                color: ["#49c5b6", "#e47297", "#a27ce6", "#ffce4b", "#3eacff"],
                title: {
                    text: 'User access source',
                    subtext: 'Purely fictitious',
                    x: 'center',
                    textStyle: {
                        color: "#C2C2C2"
                    }
                },
                tooltip: {
                    trigger: 'item',
                    formatter: "{a} <br/>{b} : {c} ({d}%)"
                },
                legend: {
                    orient: 'vertical',
                    left: 'left',
                    data: ['Video ad', 'Email marketing', 'Alliance advertising', 'Direct interview', 'Search engine'],
                    textStyle: {
                        color: "#C2C2C2"
                    }
                },
                series: [
                    {
                        name: 'Access source',
                        type: 'pie',
                        radius: '55%',
                        center: ['50%', '60%'],
                        data: [
                            { value: 135, name: 'Video ad' },
                            { value: 310, name: 'Email marketing' },
                            { value: 234, name: 'Alliance advertising' },
                            { value: 335, name: 'Direct interview' },
                            { value: 1548, name: 'Search engine' }
                        ],
                        emphasis: {
                            shadowBlur: 10,
                            shadowOffsetX: 0,
                            shadowColor: 'rgba(0, 0, 0, 0.5)'
                        }
                    }
                ]
            },
            punchCardOptions:{
                color: ["#e47297"],
                title: {
                    text: 'Punch Card of Github',
                    textStyle: {
                        color: "#C2C2C2"
                    }
                },
                legend: {
                    data: ['Punch Card'],
                    left: 'right',
                    textStyle: {
                        color: "#C2C2C2"
                    }
                },
                polar: {},
                tooltip: {
                    formatter: function (params) {
                        return params.value[2] + ' commits in ' + [params.value[1]] + ' of ' + [params.value[0]];
                    } 
                },
                angleAxis: {
                    type: 'category',
                    data:['12a', '1a', '2a', '3a', '4a', '5a', '6a',
                            '7a', '8a', '9a','10a','11a',
                            '12p', '1p', '2p', '3p', '4p', '5p',
                            '6p', '7p', '8p', '9p', '10p', '11p'],
                    boundaryGap: false,
                    splitLine: {
                        show: true,
                        lineStyle: {
                            color: "#EBEEF2",
                            type: 'dashed'
                        }
                    },
                    axisLine: {
                        show: false
                    },
                    axisLabel: {
                        color: "#C2C2C2"
                    }
                },
                radiusAxis: {
                    type: 'category',
                    data: ['Saturday', 'Friday', 'Thursday',
                        'Wednesday', 'Tuesday', 'Monday', 'Sunday'],
                    axisLine: {
                        show: false
                    },
                    axisLabel: {
                        color: "#C2C2C2",
                        rotate: 45
                    }
                },
                series: [{
                    name: 'Punch Card',
                    type: 'scatter',
                    coordinateSystem: 'polar',
                    symbolSize: function (val) {
                        return val[2] * 2;
                    },
                    data: [[0, 0, 5], [0, 1, 1], [0, 2, 0], [0, 3, 0], [0, 4, 0], [0, 5, 0], [0, 6, 0], [0, 7, 0], [0, 8, 0], [0, 9, 0], [0, 10, 0], [0, 11, 2], [0, 12, 4], [0, 13, 1], [0, 14, 1], [0, 15, 3], [0, 16, 4], [0, 17, 6], [0, 18, 4], [0, 19, 4], [0, 20, 3], [0, 21, 3], [0, 22, 2], [0, 23, 5], [1, 0, 7], [1, 1, 0], [1, 2, 0], [1, 3, 0], [1, 4, 0], [1, 5, 0], [1, 6, 0], [1, 7, 0], [1, 8, 0], [1, 9, 0], [1, 10, 5], [1, 11, 2], [1, 12, 2], [1, 13, 6], [1, 14, 9], [1, 15, 11], [1, 16, 6], [1, 17, 7], [1, 18, 8], [1, 19, 12], [1, 20, 5], [1, 21, 5], [1, 22, 7], [1, 23, 2], [2, 0, 1], [2, 1, 1], [2, 2, 0], [2, 3, 0], [2, 4, 0], [2, 5, 0], [2, 6, 0], [2, 7, 0], [2, 8, 0], [2, 9, 0], [2, 10, 3], [2, 11, 2], [2, 12, 1], [2, 13, 9], [2, 14, 8], [2, 15, 10], [2, 16, 6], [2, 17, 5], [2, 18, 5], [2, 19, 5], [2, 20, 7], [2, 21, 4], [2, 22, 2], [2, 23, 4], [3, 0, 7], [3, 1, 3], [3, 2, 0], [3, 3, 0], [3, 4, 0], [3, 5, 0], [3, 6, 0], [3, 7, 0], [3, 8, 1], [3, 9, 0], [3, 10, 5], [3, 11, 4], [3, 12, 7], [3, 13, 14], [3, 14, 13], [3, 15, 12], [3, 16, 9], [3, 17, 5], [3, 18, 5], [3, 19, 10], [3, 20, 6], [3, 21, 4], [3, 22, 4], [3, 23, 1], [4, 0, 1], [4, 1, 3], [4, 2, 0], [4, 3, 0], [4, 4, 0], [4, 5, 1], [4, 6, 0], [4, 7, 0], [4, 8, 0], [4, 9, 2], [4, 10, 4], [4, 11, 4], [4, 12, 2], [4, 13, 4], [4, 14, 4], [4, 15, 14], [4, 16, 12], [4, 17, 1], [4, 18, 8], [4, 19, 5], [4, 20, 3], [4, 21, 7], [4, 22, 3], [4, 23, 0], [5, 0, 2], [5, 1, 1], [5, 2, 0], [5, 3, 3], [5, 4, 0], [5, 5, 0], [5, 6, 0], [5, 7, 0], [5, 8, 2], [5, 9, 0], [5, 10, 4], [5, 11, 1], [5, 12, 5], [5, 13, 10], [5, 14, 5], [5, 15, 7], [5, 16, 11], [5, 17, 6], [5, 18, 0], [5, 19, 5], [5, 20, 3], [5, 21, 4], [5, 22, 2], [5, 23, 0], [6, 0, 1], [6, 1, 0], [6, 2, 0], [6, 3, 0], [6, 4, 0], [6, 5, 0], [6, 6, 0], [6, 7, 0], [6, 8, 0], [6, 9, 0], [6, 10, 1], [6, 11, 0], [6, 12, 2], [6, 13, 1], [6, 14, 3], [6, 15, 4], [6, 16, 0], [6, 17, 0], [6, 18, 0], [6, 19, 0], [6, 20, 1], [6, 21, 2], [6, 22, 2], [6, 23, 6]],
                    animationDelay: function (idx) {
                        return idx * 5;
                    }
                }]
            },
        }
    },methods:{
       
    }
}
</script>
<style scoped>

</style>