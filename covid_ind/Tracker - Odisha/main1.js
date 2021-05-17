
$(document).ready(function () {
    // Get JSON data from the URL
    $.getJSON("https://api.covid19india.org/data.json", function (data) {
        console.log(data);
        var total_confirmed;
        var total_active;
        var total_recovered;
        var total_deaths;

        total_confirmed = data.statewise[34].confirmed;
        total_active = data.statewise[34].active;
        total_recovered = data.statewise[34].recovered;
        total_deaths = data.statewise[34].deaths;

        $("#confirmed").append(total_confirmed);
        $("#active").append(total_active);
        $("#recovered").append(total_recovered);
        $("#deaths").append(total_deaths);

    });

    $.getJSON("https://api.covid19india.org/v2/state_district_wise.json", function (data) {
        var total_districts = [];
        var confirmed = [];
        var recovered = [];
        var deaths = [];
        var raj = [];

        $.each(data, function (id, obj) {
            total_districts.push(obj.districtData);
        });
        $.each(total_districts[9], function (id, obj) {
            raj.push(obj.district);
            confirmed.push(obj.confirmed);
            recovered.push(obj.recovered);
            deaths.push(obj.deceased);
        });

      console.log(total_districts);

        //Chart
        var myChart = document.getElementById("myChart").getContext('2d');

        var chart = new Chart(myChart, {
            type: "bar",
            data: {
                labels: raj,
                datasets: [{
                        label: "Confirmed",
                        data: confirmed,
                        backgroundColor: "#f1c40f",
                        minBarLength: 10,
                    },
                    {
                        label: "Recovered",
                        data: recovered,
                        backgroundColor: "#2ecc71",
                        minBarLength: 10,
                    },
                    {
                        label: "Deaths",
                        data: deaths,
                        backgroundColor: "#e74c3c",
                        minBarLength: 10,
                    },
                ]
            },
            options: {
                scales: {
                    xAxes: [{
                        gridLines: {
                            offsetGridLines: true
                        }
                    }]
                }
            }
        })

    });

});