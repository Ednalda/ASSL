 		           
 
		            <div id="user_content">
		            	<?php echo "Welcome " . $_SESSION ["email"];?>
		            	<h3>How many calories in your recipe?</h3>
						<?php echo validation_errors(); ?>
						<?php echo form_open('form/recipe'); ?>
							<ul class="data">
								  <ul class="recipe">
								  	<li><h4>Enter recipe name:</h4></li>
								  	<li><input type="text" name="recipe_name" value=""/></li>
								  </ul>
								  <div>
					                    <ul class="ingredients">
								            <li><h4>Enter ingredients:</h4></li>
									        <li>
								 	            <select class="select" name='ingredient_id1'>
									                <option value=""></option>
													<option value="1">Oil</option>
												    <option value="2">Water</option>
												    <option value="3">Sugar</option>
												    <option value="4">Salt</option>
													<option value="5">Flour</option>
												    <option value="6">Egg</option>
													<option value="7">Butter</option>
								 					<option value="8">Orange</option>		  
												</select>
											</li>	
		                                </ul>
		                                <ul class="quantity_title">
									        <li><h4>Enter quantity (lb):</h4></li>
									        <li class="quantity"><input type="text" name="quantity1" value="" /></li>   
									    </ul>     
	                               </div>
	                                <div>
					                    <ul class="ingredients">
								            <li><h4>Enter ingredients:</h4></li>
									        <li>
								 	            <select class="select" name='ingredient_id2'>
									                <option value=""></option>
													<option value="1">Oil</option>
												    <option value="2">Water</option>
												    <option value="3">Sugar</option>
												    <option value="4">Salt</option>
													<option value="5">Flour</option>
												    <option value="6">Egg</option>
													<option value="7">Butter</option>
													<option value="8">Orange</option>		  
												</select>
											</li>	
		                                </ul>
		                                <ul class="quantity_title">
									        <li><h4>Enter quantity (lb):</h4></li>
									        <li class="quantity"><input type="text" name="quantity2" value="" /></li>   
									    </ul>     
	                               </div>
	                                <div>
					                    <ul class="ingredients">
								            <li><h4>Enter ingredients:</h4></li>
									        <li>
								 	            <select class="select" name='ingredient_id3'>
									                <option value=""></option>
													<option value="1">Oil</option>
												    <option value="2">Water</option>
												    <option value="3">Sugar</option>
												    <option value="4">Salt</option>
													<option value="5">Flour</option>
												    <option value="6">Egg</option>
													<option value="7">Butter</option>
													<option value="8">Orange</option>		  
												</select>
											</li>	
		                                </ul>
		                                <ul class="quantity_title">
									        <li><h4>Enter quantity (lb):</h4></li>
									        <li class="quantity"><input type="text" name="quantity3" value="" /></li>   
									    </ul>     
	                               </div>
				                  <input class="calc_btn" type="submit" value="ADD" />
				            </ul>
		                </form>
		                <div id="result">
			                    <h4>Ingredients list:</h4>
									<ul class="list">
										<li><?php $data;?></li>
								    </ul>
								    <ul class="total">
	                                    <li class="total_label">Total Calories:</li>
	                                    <li class="total_result"></li>
								    </ul>
							</form>
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
			 
    