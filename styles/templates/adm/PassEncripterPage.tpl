{include file="overall_header.tpl"}
{include file="head_nav.tpl"}

<div class="grid_10">
            <div class="box round first grid" >
                <h2>
                   MD Encryptor</h2>
              <div class="block">
                    
                    
                    
                    <table class="data display datatable" id="example">
		
					
					
					<thead>
					
	 
 
<form method="post" action="">

<tr>
	<td>{$et_pass}</td>
	<td><input type="text" name="md5q" size="45" value="{$md5_md5}"></td>
</tr><tr>
	<td>{$et_result}</td>
	<td><input type="text" name="md5w" size="45" value="{$md5_enc}"></td>
</tr><tr>
	<td colspan="2"><center><input type="submit" value="{$et_encript}"></center></td>
</tr>
</form>

 
						
				
						
		
					</thead> 
					
 </table>
                    
                    
                    
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
		
		

{include file="overall_footer.tpl"}