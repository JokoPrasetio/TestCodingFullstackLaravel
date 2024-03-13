const ItemChart = document.getElementById("ResultData");
const startDate = document.getElementById("startdate");
const endDate = document.getElementById("endDate");

function SubmitFilterDate() {
    const start = startDate.value;
    const end = endDate.value;

    fetch(`/most-data?startDate=${start}&endDate=${end}`)
        .then((response) => response.json())
        .then((data) => {
            const label = data.map((item) => item.name);
            const result = data.map((item) => item.jumlah_terjual);
            const SisaBarang = data.map(
                (item) => item.stok - item.jumlah_terjual
            );
            ResultChart(label, result, SisaBarang);
        })
        .catch((error) => console.error("error fetch data", error));
}
function ResultChart(label, result, SisaBarang) {
    const ExistChart = Chart.getChart(ItemChart);
    if (ExistChart) {
        ExistChart.destroy();
    }
    new Chart(ItemChart, {
        type: "bar",
        data: {
            labels: label,
            datasets: [
                {
                    label: "Jumlah Terjual",
                    data: result,
                    borderWidth: 1,
                },
                {
                    label: "Sisa Barang",
                    data: SisaBarang,
                    borderWidth: 1,
                },
            ],
        },
        options: {
            maintainAspectRatio: true,
            aspectRatio: 3,
            scales: {
                y: {
                    beginAtZero: true,
                },
            },
        },
    });
}

fetch("/most-data")
    .then((response) => response.json())
    .then((data) => {
        const label = data.map((item) => item.name);
        const result = data.map((item) => item.jumlah_terjual);
        const SisaBarang = data.map((item) => item.stok - item.jumlah_terjual);
        ResultChart(label, result, SisaBarang);
    })
    .catch((error) => {
        console.error("Error fetch data", error);
    });
