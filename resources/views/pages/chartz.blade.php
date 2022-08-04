<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<canvas id="myChart" width="400" height="200"></canvas>
   
    
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>

            
            <script>
                $(document) .ready(function() {
                    const cData = JSON.parse(`<?php echo $data; ?>`);
                    // console.log(cData);  
                const ctx = document.getElementById('myChart').getContext('2d');
                const myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                            labels:cData.label,
                            datasets:[{
                                label:'Cantidad de registros',
                                data:cData.data, 
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)',
                                    'rgba(255, 171, 173, 0.2)',
                                    'rgba(255, 171, 173, 0.2)',
                                    'rgba(255, 171, 173, 0.2)',
                                    'rgba(255, 171, 173, 0.2)',
                                    'rgba(255, 171, 173, 0.2)',
                                    'rgba(255, 171, 173, 0.2)',
                                    
                                    

                                ],
                                borderWidth:-1,
                            }]
   
                        },
                        option:{
                            scales:{
                                y:[{
                                    ticks:{
                                        beginAtZero: true,
                                        }
                                    }]
                                    }
                                }
                    
                    })
                });
            </script>
</body>

</html>
{{-- 
                        // labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'], 
                        // datasets: [{
                        //     label: '# of Votes',
                        //     data: [12, 19, 3, 5, 2, 3],
                            /* borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1 */ --}}