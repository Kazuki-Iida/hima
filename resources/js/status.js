import Chart from "chart.js/auto";

const canvas = document.getElementById("fighterChart");

if (canvas != null) {
    const ctx = canvas.getContext("2d");

    const fighterChart = new Chart(ctx, {
        type: "radar",
        data: {
            labels: [
                "パワー",
                "スピード",
                "テクニック",
                "インテリ",
                "スタミナ",
                "メンタル",
            ],
            datasets: [
                {
                    label: "",
                    data: [power, speed, technic, intelli, stamina, mental],
                    backgroundColor: ["rgba(255, 99, 132, 0.2)"],
                    borderColor: [
                        "rgba(255, 99, 132, 1)",
                        "rgba(54, 162, 235, 1)",
                        "rgba(255, 206, 86, 1)",
                        "rgba(75, 192, 192, 1)",
                        "rgba(153, 102, 255, 1)",
                        "rgba(255, 159, 64, 1)",
                    ],
                    borderWidth: 1,
                    pointRadius: 5,
                },
            ],
        },
        options: {
            responsive: true,
            scales: {
                r: {
                    pointLabels: {
                        color: "white",
                        font: {
                            size: 17,
                        },
                    },
                    ticks: {
                        color: "white", // メモリ数値
                        backdropColor: "rgba(0,0,0,0)",
                        font: {
                            size: 16,
                        },
                    },
                    grid: {
                        color: "rgba(255, 255, 255, 0.5)", // 六角線
                        tickColor: "rgba(255, 255, 255, 0.5)",
                    },
                    border: {
                        color: "rgba(255, 255, 255, 0.5)",
                    },
                    suggestedMin: 0,
                    suggestedMax: 10,
                    angleLines: {
                        color: "rgba(255, 255, 255, 0.5)", // 中心からpointLavelsにつながる線
                    },
                },
            },
            plugins: {
                title: {
                    display: true,
                    text: "選手ステータス",
                    color: "white",
                    font: {
                        size: 22,
                    },
                },
                legend: {
                    labels: {
                        color: "white",
                    },
                },
            },
        },
    });
}
