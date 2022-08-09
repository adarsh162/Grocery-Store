<?php


function cartelement($img,$name,$price,$id,$q,$index_of_q)
{
	$element="
<form action='cart.php?action=remove&id=$id' method='POST' class='cart-items'>
						<div class='border rounded'>
							<div class='row bg-white'>
								<div class='col-md-3 pl-0'>
									<img class='img' src=$img>
								</div>
								<div class='col-md-6'>
									<h5 class='pt-2'>$name</h5>
									<small class='text-secondary'>Seller:abcabc</small>
									<h5 class='pt-2'>&#8377;$price</h5>
									<button type='submit' class='btn btn-danger mx-2' name='remove'>Remove </button>
								</div>
								<div class='col-md-3 py-5'>
									<div>
										<input type='submit' name='minus' class='btn bg-light border rounded-circle' value='&#8722;'>
										<input type='hidden' name='index_of_q' value='$index_of_q'>
										<input type='text' value='$q'class='for-control w-25 d-inline' name=''>
										<input type='submit' name='plus' class='btn bg-light border rounded-circle' value='&#43;'>
									</div>
								</div>
							</div>
						</div>
					</form>

					";
					echo $element;
}

?>