<?php
$page = "plugins-VBAN-Wolfson";
?>
    <div class="col-md-8">
			<h3 class="mb-5">
				Wolfson / Cirrus plugin
			</h3>            
            
			<form role="form" action="plugin_action.php" method="get" class="mb-5">
                 <div class="form-group">
                     <label>Output :</label>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                      <label class="btn btn-secondary">
                        <input type="radio" name="args" id="option1" autocomplete="off" value="output Headset"> Headset
                      </label>
                      <label class="btn btn-secondary">
                        <input type="radio" name="args" id="option2" autocomplete="off" value="output Lineout"> Line Out
                      </label>
                      <label class="btn btn-secondary">
                        <input type="radio" name="args" id="option3" autocomplete="off" value="output SPDIF"> SPDIF
                      </label>
                      <label class="btn btn-secondary">
                        <input type="radio" name="args" id="option4" autocomplete="off" value="output Speakers"> Speakers
                      </label>
                    </div>
                </div>
                <input type="hidden" name="name" value="VBAN-Wolfson" />
				<button type="submit" class="btn btn-primary">
					Change
				</button>
            </form>
            
            <form role="form" action="plugin_action.php" method="get" class="mb-5">
                <div class="form-group">
                     <label>Input :</label>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                      <label class="btn btn-secondary">
                        <input type="radio" name="args" id="option1" autocomplete="off" value="input Headset"> Headset
                      </label>
                      <label class="btn btn-secondary">
                        <input type="radio" name="args" id="option2" autocomplete="off" value="input Linein"> Line In
                      </label>
                      <label class="btn btn-secondary">
                        <input type="radio" name="args" id="option3" autocomplete="off" value="input SPDIF"> SPDIF
                      </label>
                      <label class="btn btn-secondary">
                        <input type="radio" name="args" id="option4" autocomplete="off" value="input DMIC"> DMIC (onboard mic)
                      </label>
                      <label class="btn btn-secondary">
                        <input type="radio" name="args" id="option5" autocomplete="off" value="input Micbias"> Micbias
                      </label>
                    </div>
                </div> 
                <input type="hidden" name="name" value="VBAN-Wolfson" />
				<button type="submit" class="btn btn-primary">
					Change
				</button>
			</form>
            
            <form role="form" action="plugin_action.php" method="get">
                <div class="form-group">
                    <input type="hidden" name="name" value="VBAN-Wolfson" />
                    <input type="hidden" name="args" value="reset" />
                    <button type="submit" class="btn btn-danger">
                        Reset all
                    </button>
                </div>
            </form>
		</div>