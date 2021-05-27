<?php
include("config/config.php");
include("shared/header.php");
?>

<hr>
<h3 class="text-center">
    Simulator
</h3>
<hr>

<div class="simulator-container">
    <form action="simulation.php" method="post">
        <!--Ammount-->
        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="number"
                   min="1"
                   class="form-control"
                   id="amount"
                   name="amount"
                   placeholder="Enter the amount"
                   required>
        </div>

        <div class="form-group">
            <label for="typeOfCredit">Type of credit</label>
            <select
                    class="form-control"
                    id="typeOfCredit"
                    name="typeOfCredit"
                    required>
                <option value="Living place">Living place</option>
                <option value="Studies">Studies</option>
                <option value="Vehicle">Vehicle</option>
            </select>
        </div>

        <div class="form-group">
            <label for="creditTime">Credit time</label>
            <select
                    class="form-control"
                    id="creditTime"
                    name="creditTime"
                    required>
                <option value="3">3 months</option>
                <option value="6">6 months</option>
                <option value="12">12 months</option>
                <option value="18">18 months</option>
                <option value="24">24 months</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php
include("shared/footer.php");
?>
