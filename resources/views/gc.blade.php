<!DOCTYPE html>
<html>
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@flickr" />
<meta name="twitter:title" content="Small Island Developing States Photo Submission" />
<meta name="twitter:description" content="View the album on Flickr." />
<meta name="twitter:image" content="https://farm6.staticflickr.com/5510/14338202952_93595258ff_z.jpg" />
<head>
    <title>GC 7 Rank</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>
    
<div class="container mt-5">
    <h2 class="mb-4">GC 7 Rank</h2>
    <label for="ts">Select TS:</label>
   
        <select name="ts" id="ts">
        <option value="all" {{ $ide == 'all' ? 'selected' : '' }}>All</option>
        <option value="1" {{ $ide == 1 ? 'selected' : '' }}>1</option>
        <option value="2" {{ $ide == 2 ? 'selected' : '' }}>2</option>
        <option value="3" {{ $ide == 3 ? 'selected' : '' }}>3</option>
        <option value="4" {{ $ide == 4 ? 'selected' : '' }}>4</option>
        <option value="5" {{ $ide == 5 ? 'selected' : '' }}>5</option>
        <option value="6" {{ $ide == 6 ? 'selected' : '' }}>6</option>
        <option value="7" {{ $ide == 7 ? 'selected' : '' }}>7</option>
        <option value="8" {{ $ide == 8 ? 'selected' : '' }}>8</option>
        <option value="9" {{ $ide == 9 ? 'selected' : '' }}>9</option>
        <option value="10" {{ $ide == 10 ? 'selected' : '' }}>10</option>
        <option value="11" {{ $ide == 11 ? 'selected' : '' }}>11</option>
        <option value="12" {{ $ide == 12 ? 'selected' : '' }}>12</option>
        <option value="13" {{ $ide == 13 ? 'selected' : '' }}>13</option>
        </select> 
    <table class="table table-bordered yajra-datatable">
        <thead>
            <tr>
                <th>Rank (Server)</th>
                <th>Rank (TS)</th>
                <th>Guild Name</th>
                <th>Level</th>
                <th>Lifeforce Total</th>
                <th>Win</th>
                <th>Lose</th>
                <th>Total Battle</th>
                <th>TS</th>

            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
   
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
    
        $('.table').DataTable({

            processing: true,
            serverSide: true,
            orderable: false,
            ajax: "{{route('get.gc', $ide)}}",
            columns: [
                {data: 'rank', name: 'Rank', sortable:false},
                {data: 'tsrank', name: 'TS Rank', sortable:false},
                {data: 'guildName', name: 'Guild Name', sortable:false},
                {data: 'guildLevel', name: 'Level', sortable:false},
                {data: 'point', name: 'Lifeforce Total', sortable:false},
                {data: 'winPoint', name: 'Win', sortable:false},
                {data: 'losePoint', name: 'Lose', sortable:false},
                {data: 'sourceCount', name: 'Total Battle', sortable:false},
                {data: 'gvgTimeType', name: 'TS', sortable:false},
            ]
        });

        
            document.getElementById('ts').addEventListener('change', function (e) {
                window.location.href = "{{route('show.gc')}}/"+e.target.value;
        });

    });

</script>
</html>