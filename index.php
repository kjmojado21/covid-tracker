<!doctype html>
<html lang="en">

<?php include 'logic.php' ?>

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Bootstrap CSS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <style>
        /* @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap'); */

        body {
            font-family: 'Roboto Condensed', sans-serif;
        }
    </style>
</head>

<body>
    <div class="container-fluid bg-light my-3 text-center p-3">
        <h1>
            COVID-19 COUNT TRACKER
        </h1>
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-4">

                <div class="card border-0">
                    <div class="card-body bg-danger text-center border-0 text-light">
                        DEATHS <br>
                        <?php echo number_format($total_deaths, 2)  ?>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body bg-success text-center border-0 text-light">
                        RECOVERIES <br>
                        <?php echo number_format($total_recovery, 2)  ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body bg-warning text-center border-0 text-light">
                        CURRENT WORLD COUNT <br>
                        <?php echo number_format($total_cases, 2)  ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-3 bg-light">
        <p class="text-center text-muted p-4">
            This page automatically refreshes every 5 minutes
        </p>
    </div>

    <div class="container mt-5">
        <table class="table">
            <thead class="thead-dark">
                <th>Countries</th>
                <th>Total Cases</th>
                <th>Total Recoveries</th>
                <th>Total Deaths</th>
            </thead>
            <tbody>
                <?php foreach ($data as $key => $value) : ?>
                    <tr>
                        <td><?php echo $key ?></td>
                        <td><?php echo number_format($value[$latest_data]['confirmed'], 2) ?>

                            <span class="text-warning">+<?php echo $value[$latest_data]['confirmed'] - $value[$prev_latest_data]['confirmed']  ?></span>
                        </td>

                        <td><?php echo number_format($value[$latest_data]['recovered'], 2) ?>
                            <span class="text-success">+<?php echo $value[$latest_data]['recovered'] - $value[$prev_latest_data]['recovered']  ?></span>

                        </td>
                        <td><?php echo number_format($value[$latest_data]['deaths'], 2) ?>
                            <span class="text-danger">+<?php echo $value[$latest_data]['deaths'] - $value[$prev_latest_data]['deaths']  ?></span>
                        </td>


                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- Footer -->
    <footer class="page-footer font-small blue pt-4 position-sticky">

        <!-- Footer Links -->
       
        <div class="footer-copyright text-center py-3">© 2021 Copyright:
            <a href="https://www.facebook.com/sherlocked21/"> Kurt John Mojado</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>