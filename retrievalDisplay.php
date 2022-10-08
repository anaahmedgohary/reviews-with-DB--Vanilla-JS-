<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Reviews of local bussiness add review online website</title>
    
    
    <link rel="stylesheet" href="./style/addreview.css" />
    <link rel="stylesheet" href="./newreviewstyle/retrival.css" />
</head>

<body>

    <header>
        <div id="mainTitle">
            <h1>
                Online Reviews
            </h1>
            <div>
                <h4>
                    local reviews for local bussiness
                </h4>
            </div>
        </div>

        <div>
            <nav class="main-nav">
                <p><a href="./index.html">Home</a></p>
                <p><a href="./retrievalDisplay.php">
                    New Reviews
                </a></p>
                
                <p>Contact</p>
            </nav>
        </div>
    </header>

    <div class="container mt-2">
        <div>
            <p>
                <a href="./index.html">Add New Review</a>
            </p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h2 style="text-align:center;">New Reviews</h2>
                </div>

                <table class="table mtable">
                    <!-- <thead>
                        <tr class="tbl-main-headrs mtable-head">

                            <th class="col-2 mTHeadr" scope="col">review date</th>
                            <th class="col-2 mTHeadr" scope="col">Business Name</th>
                            <th class="col-1 mTHeadr" scope="col">Rating</th>
                            <th class="col-5 mTHeadr" scope="col">Review</th>
                            <th class="col-2 mTHeadr" scope="col">The Reviewer</th>
                             <th scope="col">Time of Order</th> 
                        </tr>
                    </thead> -->
                    <tbody class="new-review">
                        <?php include 'retrieveDb.php'; ?>

                        <?php if ($result->num_rows > 0) : ?>

                        <?php while ($array = mysqli_fetch_row($result)) : ?>
                                
                        
                            <tr class="rev-div">
                                <td>Review Date</td>
                                <th><?php echo $array[1]; ?></th>
                                <td>Business Name</td>
                                <th><?php echo $array[2]; ?></th>
                                <td>Rating</td>
                                <th><?php echo $array[3]; ?></th>
                                <td>Review</td>
                                <th><?php echo $array[4]; ?></th>
                                <td>Reviewer</td>
                                <th><?php echo $array[5]; ?></th>
                            </tr>

                        

                        <?php endwhile; ?>

                        <?php else : ?>
                        <tr>
                            <td colspan="3" rowspan="1" headers="">No Data Found</td>
                        </tr>
                        <?php endif; ?>

                        <?php mysqli_free_result($result); ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>
