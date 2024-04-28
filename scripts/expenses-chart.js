function createChart(ctx, data, labels) {
    console.log(ctx, data)
    ctx.width = 100;
    ctx.height = 100;
    new Chart(ctx, {
        type: "pie",
        data: {
            labels,
            datasets: [{
                label: "Expenses",
                data: data
            }]
        }
    });
}