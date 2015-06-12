		

		            <div id="user_content">
		            	<h3>How many calories in your recipe?</h3>
						<?php echo validation_errors(); ?>
						<?php echo form_open('form/user'); ?>
							<ul class="data">
								  <ul class="recipe">
								  	<li><h4>Enter recipe name:</h4></li>
								  	<li><input type="text" name="recipe" value=""/></li>
								  </ul>
					              <ul class="ingredients">
						              	<li><h4>Enter ingredients:</h4></li>
						               	<li>
						              		<select class="select">
						              			  <option value=""></option>
												  <option value="oil">Oil</option>
												  <option value="water">Water</option>
												  <option value="sugar">Sugar</option>
												  <option value="salt">Salt</option>
												  <option value="flour">Flour</option>
												  <option value="egg">Egg</option>
												  <option value="butter">Butter</option>
												  <option value="orange">Orange</option>
											</select>
										</li>
	                              </ul>  
	                              <ul class="quantity">
					              	<li><h4>Enter quantity (lb):</h4></li>
					              	<li><input type="text" name="quantity" value="" /></li>
	                              </ul>  
				                  <input class="calc_btn" type="submit" value="Calculate" />
				            </ul>
		                </form>
		                <div id="result">
		                    <h4>Ingredients list:</h4>
							<ul class="list">
								<li></li>
						    </ul>
						    <ul class="total">
								<li class="total_label">Total Calories:</li>
								<li class="total_result"></li>
						    </ul>
		                </div>
		                <div id="recipes">
		                	<ul>
		                		<li><h4>My Recipes</h4></li>
		                		<li>
		                			<select>
						                <option value=""></option>
									    <option value="1">Cake</option>
										<option value="2">Pizza</option>
								    </select>
								</li>
		                    </ul>
		                </div>
					</div>
			</div>
			 
    