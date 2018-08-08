<form class="form-horizontal" method="post" action="time.php">
    <fieldset>
        <legend>Log Hours</legend>
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Date</label>
            <div class="col-md-2">
                <input id="textinput" name="date" type="text" placeholder="The date" class="form-control input-md" required="">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Hours</label>
            <div class="col-md-2">
                <input id="textinput" name="hours" type="text" placeholder="The hours" class="form-control input-md" required="">

            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Year</label>
            <div class="col-md-2">
                <input id="textinput" name="year" type="text" placeholder="The Year" class="form-control input-md" required="">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton"></label>
            <div class="col-md-4">
                <button id="singlebutton" name="singlebutton" class="btn btn-success">Submit</button>
            </div>
        </div>
    </fieldset>
</form>