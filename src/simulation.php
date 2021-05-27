<?php
include("config/config.php");
include("shared/header.php");
?>

<hr>
<h3 class="text-center">
    Simulation Result
</h3>
<hr>

<?php
$amount = $_POST['amount'];
$typeOfCredit = $_POST['typeOfCredit'];
$creditTime = $_POST['creditTime'];
?>

<div class="result-simulation">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Month</th>
            <th scope="col">Interest</th>
            <th scope="col">Capital Amortization</th>
            <th scope="col">Fee</th>
            <th scope="col">Outstanding Capital</th>
        </tr>
        </thead>
        <tbody>

        <?php
        if ($typeOfCredit == 'Living place'){
            $interest = 0.08;
        } elseif ($typeOfCredit == 'Studies'){
            $interest = 0.1;
        } else {
            $interest = 0.15;
        }

        $outstandingCapital = $amount;

        for ($x = 1; $x <= $creditTime; $x++) {

            $capitalAmortization = $amount / $creditTime;
            $interest = $interest * $outstandingCapital;
            $outstandingCapital = $outstandingCapital - $capitalAmortization;
            $fee = $interest + $capitalAmortization;

            echo "<tr>";
            echo "<th scope='row'>$x</th>";
            echo "<td>$interest</td>";
            echo "<td>$capitalAmortization</td>";
            echo "<td>$fee</td>";
            echo "<td>$outstandingCapital</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>


<?php
include("shared/footer.php");
?>

