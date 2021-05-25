

@extends('layouts.app')


@section('content')

            <h1>Home</h1>
            <h3>Registers per month</h3>
                <canvas class="graph" id="graph-users"></canvas>
            </div>

 <script>

    let obj = @json($usersBymes);
    totalUsers = [];

    for(let item in obj){
    totalUsers.push(obj[item].length);
    }

    let dados = {
        labels:[
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
            'July',
            'August',
            'September',
            'October',
            'November',
            'December'
        ],
        total:totalUsers
    }


    var ctx = document.getElementById('graph-users').getContext('2d');
    var chart = new Chart(ctx, {

    type: 'bar',

    data: {
        labels: dados.labels,
        datasets: [{
            label: 'Total',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: dados.total
        }]
    },
    //caso exista configurações adicionais
    options: {}
});
</script>

@endsection


