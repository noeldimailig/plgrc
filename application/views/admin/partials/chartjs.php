<script>
    // Extract the month and count values from the PHP data
    var months = [];
    var visitCounts = [];

    // Loop through the PHP data and populate the arrays
    <?php for ($i = 0; $i < count($siteVisitData); $i++) { ?>
        months.push('<?php echo $siteVisitData[$i]->month; ?>');
        visitCounts.push(<?php echo $siteVisitData[$i]->count; ?>);
    <?php } ?>

    // Define the Chart.js data object
    var data = {
        labels: months,
        datasets: [{
            label: 'No. of Site Visits',
            data: visitCounts,
            borderColor: 'blue',
            backgroundColor: 'rgba(0, 0, 255, 0.2)', // Optional: Fill color
            borderWidth: 2
        }]
    };

    // Create a new Line Chart instance
    var ctx = document.getElementById('no-of-visits').getContext('2d');
    var myLineChart = new Chart(ctx, {
        type: 'line',
        data: data,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>