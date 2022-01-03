// CLIENTES EM DIA

var options = {
    series: [70],
    chart: {
        height: 120,
        type: "radialBar"
    },
    plotOptions: {
        radialBar: {
            offsetY: -12,
            hollow: {
                margin: 5,
                size: "60%",
                background: "rgba(59, 93, 231, .25)"
            },
            dataLabels: {
                name: {
                    show: !1
                },
                value: {
                    show: !0,
                    fontSize: "15px",
                    offsetY: 5
                },
                style: {
                    colors: ["#fff"]
                }
            }
        }
    },
    colors: ["#3b5de7"]
},
chart = new ApexCharts(document.querySelector("#radial-chart-1"), options);
chart.render();



// ATIVAÇÕES

options = {
series: [91],
chart: {
    height: 120,
    type: "radialBar"
},
plotOptions: {
    radialBar: {
        offsetY: -12,
        hollow: {
            margin: 5,
            size: "60%",
            background: "rgba(69, 203, 133, .25)"
        },
        dataLabels: {
            name: {
                show: !1
            },
            value: {
                show: !0,
                fontSize: "15px",
                offsetY: 5
            },
            style: {
                colors: ["#fff"]
            }
        }
    }
},
colors: ["#45CB85"]
};
chart = new ApexCharts(document.querySelector("#radial-chart-2"), options);
chart.render();


// CLIENTES INADIMPLENTES


options = {
series: [81],
chart: {
    height: 120,
    type: "radialBar"
},
plotOptions: {
    radialBar: {
        offsetY: -12,
        hollow: {
            margin: 5,
            size: "60%",
            background: "rgba(255, 203, 133, .25)"
        },
        dataLabels: {
            name: {
                show: !1
            },
            value: {
                show: !0,
                fontSize: "15px",
                offsetY: 5
            },
            style: {
                colors: ["#fff"]
            }
        }
    }
},
colors: ["#45CB85"]
};
chart = new ApexCharts(document.querySelector("#radial-chart-3"), options);
chart.render();



// CANCELAMENTOS

options = {
series: [99],
chart: {
    height: 120,
    type: "radialBar"
},
plotOptions: {
    radialBar: {
        offsetY: -12,
        hollow: {
            margin: 5,
            size: "60%",
            background: "rgba(59, 93, 231, .25)"
        },
        dataLabels: {
            name: {
                show: !1
            },
            value: {
                show: !0,
                fontSize: "15px",
                offsetY: 5
            },
            style: {
                colors: ["#fff"]
            }
        }
    }
},
colors: ["#3b5de7"]
};

(chart = new ApexCharts(document.querySelector("#radial-chart-4"), options)).render();


// FATURAMENTO

this.respChart(d("#pie"), "Pie", {
    labels: ["Previsto", "Confirmado", "Recebido"],
    datasets: [{
        data: [300, 180, 150],
        backgroundColor: ["#45cb85", "#ebeff2","#332F66"],
        hoverBackgroundColor: ["#45cb85", "#ebeff2","#332F66"],
        hoverBorderColor: "#fff"
    }]
});

// COBRANÇAS

this.respChart(d("#doughnut"), "Doughnut", {
    labels: ["Previstas", "Vencidas", "Recebidas"],
    datasets: [{
        data: [300, 210, 102],
        backgroundColor: ["#3b5de7", "#ebeff2", "#F7C631"],
        hoverBackgroundColor: ["#3b5de7", "#ebeff2"],
        hoverBorderColor: "#fff"
    }]
});

// PERFORMANCE MENSAL

options = {
    series: [{
        name: "Cancelamentos",
        type: "column",
        data: [23, 11, 53, 27, 13, 19, 22, 37, 21, 44, 22, 30,23, 11, 53, 27, 13, 19, 22, 37, 21, 44, 22, 30, 19, 22, 37, 21, 44, 22, 30]
    }, {
        name: "Ativações",
        type: "area",
        data: [36, 47, 33, 41, 22, 37, 43, 21, 41, 56, 27, 43,36, 47, 33, 41, 22, 37, 43, 21, 41, 56, 27, 43, 19, 22, 37, 21, 44, 22, 30]
    }, 
],
    chart: {
        height: 275,
        type: "line",
        stacked: !1,
        toolbar: {
            show: !1
        }
    },
    stroke: {
        width: [0, 2, 2],
        curve: "smooth",
        dashArray: [0, 0, 4]
    },
    plotOptions: {
        bar: {
            columnWidth: "15%",
            endingShape: "rounded"
        }
    },
    fill: {
        opacity: [.85, .25, 1],
        gradient: {
            inverseColors: !1,
            shade: "light",
            type: "vertical",
            opacityFrom: .85,
            opacityTo: .55,
            stops: [0, 100, 100, 100]
        }
    },
    xaxis: {
        categories: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12","13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30", "31"]
    },
    colors: ["#ff0000", "#5fd195"],
    markers: {
        size: 0
    }
    };
    (chart = new ApexCharts(document.querySelector("#mixed-chart1"), options)).render();