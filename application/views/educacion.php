<?=$head?>
 

    <section id="contenedor-central" class="container">
        
        <div class="row-fluid">

        	<?php foreach ($educaciones as $row ): ?>

        		<div class="col-md-4 col-xs-12 well">

	 				<div class="row">

			    		<span class="col-md-12 col-xs-12" >
			    			<?php echo $row["nombre"];?>
			    		</span>

			    	</div>

			    	<div class="row">

			    		<span class="col-md-4 col-xs-12" >
			    			<label>Cursada</label>
			    		</span> 
			    		<span class="col-md-8 col-xs-12" >
			    			<?php echo $row["cursada"];?>
			    		</span>

			    	</div>

			    	<div class="row">

			    		<span class="col-md-4 col-xs-12" >
			    			<label>Certificacion</label>
			    		</span> 
			    		<span class="col-md-8 col-xs-12" >
			    			<?php echo $row["certificacion"];?>
			    		</span>

			    	</div>

			    	<div class="row">
			    		<span class="col-md-12 col-xs-12" >
			    			<label>Contenido central</label>
			    		</span> 
			    		<span class="col-md-12 col-xs-12" >
			    			<?php echo $row["contenidos_centrales"];?>
			    		</span>
		    		</div>

		    		<div class="row">
			    		<span class="col-md-12 col-xs-12" >
			    			<label>Docentes</label>
			    		</span> 
			    		<span class="col-md-12 col-xs-12" >
			    			<?php echo $row["docentes"];?>
			    		</span>
			    	</div>

			    	<div class="row">
			    		<span class="col-md-12 col-xs-12" >
			    			<input type="submit" class="btn btn-xs" value="Ver programa">   
			    		</span>
		    		</div>

		   		</div>
        		
        	<?php endforeach ?>
 
        </div>
    	
    </section>

<?=$footer?>
