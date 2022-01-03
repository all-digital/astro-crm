
// VENDAS DO MÊS

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
                background: "rgba(253, 189, 24, .25)"
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
                    colors: ["#fdbd18"]
                }
            }
        }
    },
    colors: ["#fdbd18"]
},
chart = new ApexCharts(document.querySelector("#radial-chart-1"), options);
chart.render();



// RECEITA ADICIONAL

options = {
series: [74],
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
chart = new ApexCharts(document.querySelector("#radial-chart-2"), options);
chart.render();


// NOVOS CLIENTES


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
chart = new ApexCharts(document.querySelector("#radial-chart-3"), options);
chart.render();



// FATURAMENTO DO MÊS

options = {
series: [92],
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
            background: "rgba(69, 203, 133,  .25)"
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

(chart = new ApexCharts(document.querySelector("#radial-chart-4"), options)).render();





// PERFORMANCE ANUAL (DASHBOARD GERAL)

options = {
    series: [{
        name: "Cancelamento",
        type: "column",
        data: [23, 11, 23, 27, 13, 19, 22, 7, 21, 44, 22, 30]
    }, {
        name: "Venda",
        type: "area",
        data: [36, 47, 33, 41, 22, 37, 43, 21, 41, 56, 27, 43]
    }, {
        name: "Faturamento",
        type: "line",
        data: [46, 57, 43, 51, 32, 47, 53, 31, 51, 66, 37, 53]
    }],
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
        categories: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"]
    },
    colors: ["#ff0000", "#5fd195", "#3b5de7"],
    // colors: ["#3b5de7", "#eeb902", "#5fd195"],
    markers: {
        size: 0
    }
    };
    (chart = new ApexCharts(document.querySelector("#mixed-chart"), options)).render();
        
    // RESULTADO ÚLTIMOS 6 MESES

        options = {
            series: [{
                name: "Vendas",
                data: [24, 36, 42, 58, 62, 74, 85, 92, 36, 10]
            }],
            chart: {
                height: 100,
                type: "line",
                sparkline: {
                    enabled: !0
                },
                toolbar: {
                    show: !1
                }
            },
            dataLabels: {
                enabled: !1
            },
            stroke: {
                curve: "smooth",
                width: 3
            },
            colors: ["#3b5de7"]
            };
            (chart = new ApexCharts(document.querySelector("#sales-report-chart"), options)).render();
            options = {
            series: [{
                data: [3, 6, 4, 7, 9, 4]
            }],
            chart: {
                type: "bar",
                height: 250,
                toolbar: {
                    show: !1
                }
            },
            plotOptions: {
                bar: {
                    horizontal: !0,
                    barHeight: "24%",
                    endingShape: "rounded"
                }
            },
            dataLabels: {
                enabled: !1
            },
            colors: ["#556ee6"],
            xaxis: {
                categories: ["Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
                title: {
                    text: ""
                }
            }
            };


// CONCENTRAÇÃO DE VEÍCULOS

(chart = new ApexCharts(document.querySelector("#bar-chart"), options)).render();
options = {
series: [{
    name: "2019",
    data: [80, 50, 30, 40, 100, 20]
}, {
    name: "2020",
    data: [20, 30, 40, 80, 20, 80]
}, {
    name: "2021",
    data: [44, 76, 78, 13, 43, 10]
}],
chart: {
    height: 250,
    type: "radar",
    dropShadow: {
        enabled: !0,
        blur: 1,
        left: 1,
        top: 1
    },
    toolbar: {
        show: !1
    }
},
stroke: {
    width: 0
},
fill: {
    opacity: .4
},
markers: {
    size: 0
},
colors: ["#3b5de7", "#5fd195", "#eeb902"],
xaxis: {
    categories: ["Carro", "Moto", "Caminhão", "Ônibus", "Pessoas", "Outros"]
}
};
(chart = new ApexCharts(document.querySelector("#radar-chart"), options)).render();