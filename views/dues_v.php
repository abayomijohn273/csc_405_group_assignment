<?php
    $return =  "<div class='blog_wrapp'>
                    <div class='blog_inner'>
                        <table class='table table-striped'>
                            <thead>
                                <tr>
		                      		<th>S/N</th>
		                      		<th>Due title</th>
		                      		<th>Amount</th>
		                      		<th></th>
		                      	</tr>
                            </thead>
                            <tbody>";
                    while($row = $allDues->fetchObject()){
                   		$href = "#";
                   		$return .= "<tr>
			                        	<td>$row->id</td>
			                        	<td class='tab-data'><a href='$href'>$row->due_title</a></td>
			                        	<td class='tab-data'><a href='$href'>$row->amount</a></td>
			                        	<td class='tab-data'><a href='#'>
			                        		<form action='admin.php?ad_page=#dues' method='post'> 
                                        		<input type='hidden' name='id' value='$row->id'>
                                        		<button type='submit' class='btn btn-info' name='remove_due' style='color:#fff;'>
                                        			Pay
                                        		</button>
                                        	</form>
			                        	</td>
			                        </tr>";
                   	}
                $return .= "</tbody>
                        </table>
                    </div>
                </div>";
    return $return;
?>