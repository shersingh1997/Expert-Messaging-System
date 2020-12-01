<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>JSP Page</title>
</head>

<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2> All Answers </b></h2><br>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Customer ID</th>
                        <th>Expert ID</th>
                        <th>Question Title</th>
                        <th>Question Description</th>
                        <th>Answer</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once('config.php');
                    $S = $_GET['search'];
                    $Q = "SELECT * FROM question WHERE QuestionTitle='%$S%' OR QuestionDesc='%$S%';";
                    $R = mysqli_query($con, $Q);
                    $i = 0;
                    while ($I = mysqli_fetch_array($R)) {
                        $QID = $I["QuestionId"];
                        $A = "SELECT * FROM answer WHERE QuestionId='$QID'";
                        $A = mysqli_query($con, $A);
                        $j = 0;
                        while ($J = mysqli_fetch_array($A)) {
                            echo
                                "<tr>" .
                                    "<td>" . $I["CoustomerId"] . "</td>" .
                                    "<td>" . $I["ExpertId"] . "</td>" .
                                    "<td>" . $I["QuestionTitle"] . "</td>" .
                                    "<td>" . $I["QuestionDesc"] . "</td>" .
                                    "<td>" . $A["AnsDesc"] . "</td>" .
                                "</tr>";
                            $j += 1;
                        }
                    }
                    ?>
                </tbody>
            </table>
            <div class="clearfix">
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item "><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>

</body>

</html>