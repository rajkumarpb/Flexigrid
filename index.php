<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html>
	<head>
		<title>Flexigrid Dev</title>


		<link rel="stylesheet" href="flexigrid-core.css" />
		<link rel="stylesheet" href="flexigrid-theme.css"  />
		
		<style>
			body
				{
				margin: 0px;
				padding: 20px;
				font-family: Arial;
				}
				
			h2
				{
				font-size: 24px;
				margin: 15px 0px;
				font-weight: normal;
				color: #555;
				}
		</style>
	</head>
	<body>

	<h2>Percentage width</h2>

	<div class="fl-grid fl-grid-fw"> 
	
		<div class="fl-grid-inner">
	
			<div class="fl-menu">
					<table class="fl-menu-table" cellspacing="0">
							<tr class="fl-menu-tr">
								<td class="fl-menu-td fl-menu-col1"><span class="fl-icon"></span></td>
								<td class="fl-menu-td fl-menu-col2"><span class="fl-label fl-label-disabled">Sort Ascending</span></td>
								<td class="fl-menu-td fl-menu-col3"><span class="fl-icon"></span></td>
							</tr>
							<tr class="fl-menu-tr">
								<td class="fl-menu-td fl-menu-col1"><span class="fl-icon"></span></td>
								<td class="fl-menu-td fl-menu-col2"><span class="fl-label">Sort Descending</span></td>
								<td class="fl-menu-td fl-menu-col3"><span class="fl-icon"></span></td>
							</tr>
							<tr class="fl-menu-br">
								<td class="fl-menu-td" colspan="3"><div class="fl-menu-br-div"></div></td>
							</tr>
							<tr class="fl-menu-tr fl-menu-sm">
								<td class="fl-menu-td fl-menu-col1"><span class="fl-icon"></span></td>
								<td class="fl-menu-td fl-menu-col2"><span class="fl-label">Toggle Columns</span></td>
								<td class="fl-menu-td fl-menu-col3"><span class="fl-submenu">
								
								
										<div class="fl-menu">
												<table class="fl-menu-table" cellspacing="0">
														<tr class="fl-menu-tr">
															<td class="fl-menu-td fl-menu-col1"><span class="fl-icon"><input type="checkbox" class="fl-cb" checked="checked" /></span></td>
															<td class="fl-menu-td fl-menu-col2"><span class="fl-label">Column 1</span></td>
															<td class="fl-menu-td fl-menu-col3"><span class="fl-icon"></span></td>
														</tr>
														<tr class="fl-menu-tr">
															<td class="fl-menu-td fl-menu-col1"><span class="fl-icon"><input type="checkbox" class="fl-cb" checked="checked" /></span></td>
															<td class="fl-menu-td fl-menu-col2"><span class="fl-label">Column 2</span></td>
															<td class="fl-menu-td fl-menu-col3"><span class="fl-icon"></span></td>
														</tr>
														<tr class="fl-menu-tr">
															<td class="fl-menu-td fl-menu-col1"><span class="fl-icon"><input type="checkbox" class="fl-cb" checked="checked" /></span></td>
															<td class="fl-menu-td fl-menu-col2"><span class="fl-label">Column 3</span></td>
															<td class="fl-menu-td fl-menu-col3"><span class="fl-icon"></span></td>
														</tr>
												</table>
										</div>
								
								
								</td>
							</tr>
							<tr class="fl-menu-br">
								<td class="fl-menu-td" colspan="3"><div class="fl-menu-br-div"></div></td>
							</tr>
							<tr class="fl-menu-tr">
								<td class="fl-menu-td fl-menu-col1"><span class="fl-icon"></span></td>
								<td class="fl-menu-td fl-menu-col2"><span class="fl-label">Align Left</span></td>
								<td class="fl-menu-td fl-menu-col3"><span class="fl-icon"></span></td>
							</tr>
							<tr class="fl-menu-tr">
								<td class="fl-menu-td fl-menu-col1"><span class="fl-icon"></span></td>
								<td class="fl-menu-td fl-menu-col2"><span class="fl-label">Align Right</span></td>
								<td class="fl-menu-td fl-menu-col3"><span class="fl-icon"></span></td>
							</tr>
					</table>
			</div>


 			
 			<div class="fl-hbdiv">
 			
 			<div class="fl-fpane">
 			
					<div class="fl-hdiv">
					
						<div class="fl-hdiv-inner">
						<table class="fl-table" cellspacing="0">
							<thead>
								<tr class="fl-tr">
									<th class="fl-th" width="10%">
										<div class="fl-th-div">
										Column 1
										</div>
										<div class="fl-th-con">
											<div class="fl-coldrag"></div>
											<div class="fl-coltog"><div class="fl-coltog-inner"></div></div>
										</div>
									</th>
									<th class="fl-th" width="40%">
										<div class="fl-th-div">
										Column 2
										</div>
										<div class="fl-th-con">
											<div class="fl-coldrag"></div>
											<div class="fl-coltog"><div class="fl-coltog-inner"></div></div>
										</div>
									</th>
									<th class="fl-th" width="50%">
										<div class="fl-th-div">
										Column 3
										</div>
										<div class="fl-th-con">
											<div class="fl-coldrag"></div>
											<div class="fl-coltog"><div class="fl-coltog-inner"></div></div>
										</div>
									</th>
								</tr>							
							</thead>
						</table>
						</div> <!-- end of fl-hdiv-inner -->
					
					</div> <!-- end of fl-hdiv -->
					<div class="fl-bdiv"> 
					
						<div class="fl-bdiv-inner">
						<table class="fl-table" cellspacing="0"> 
							<tbody> 
								<tr class="fl-tr"> 
									<td class="fl-td" style="width:10%;"> 
										<div class="fl-td-div">
										test
										</div>
									</td> 
									<td class="fl-td" style="width:40%;"> 
										<div class="fl-td-div">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										</div>
									</td> 
									<td class="fl-td" style="width:50%;"> 
										<div class="fl-td-div">
										test
										</div>
									</td> 
								</tr>
								<? for($x=0;$x<5;$x++) { ?>		
								<tr class="fl-tr"> 
									<td class="fl-td"> 
										<div class="fl-td-div">
										test
										</div>
									</td> 
									<td class="fl-td"> 
										<div class="fl-td-div">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										</div>
									</td> 
									<td class="fl-td"> 
										<div class="fl-td-div">
										test
									</td> 
								</tr>
								<? } ?>		
							</tbody> 
						</table> <!-- end fl-table body --> 
						</div>
						
					</div> <!-- bdiv --> 

			</div> <!-- fl-fpane -->
			
			</div> <!-- hbdiv -->

		</div> <!-- fl-grid-inner -->
		
	</div> <!-- end fl-grid --> 		

	<h2>Pixel width</h2>
	
	<div class="fl-grid">
	
		<div class="fl-grid-inner">

			<div class="fl-hbdiv">

 			<div class="fl-fpane">
 
					<div class="fl-hdiv">
					
						<div class="fl-hdiv-inner">
						<table class="fl-table" cellspacing="0">
							<thead>
								<tr class="fl-tr">
									<th class="fl-th" width="100px">
										<div class="fl-th-div">
										Column 1
										</div>
										<div class="fl-th-con">
											<div class="fl-coldrag"></div>
										</div>
									</th>
									<th class="fl-th" width="40px">
										<div class="fl-th-div">
										Column 2
										</div>
										<div class="fl-th-con">
											<div class="fl-coldrag"></div>
										</div>
									</th>
									<th class="fl-th" width="500px">
										<div class="fl-th-div">
										Column 3
										</div>
										<div class="fl-th-con">
											<div class="fl-coldrag"></div>
										</div>
									</th>
								</tr>							
							</thead>
						</table>
						</div>
					
					</div> <!-- end of fl-hdiv -->
					<div class="fl-bdiv"> 
					
						<div class="fl-bdiv-inner">
						<table class="fl-table" cellspacing="0"> 
							<tbody> 
								<tr class="fl-tr"> 
									<td class="fl-td" style="width:100px;">
										<div class="fl-td-div">
										test
										</div>
									</td> 
									<td class="fl-td" style="width:40px;"> 
										<div class="fl-td-div">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										</div>
									</td> 
									<td class="fl-td" style="width:500px;"> 
										<div class="fl-td-div">
										test
										</div>
									</td> 
								</tr>
								<? for($x=0;$x<5;$x++) { ?>		
								<tr class="fl-tr"> 
									<td class="fl-td"> 
										<div class="fl-td-div">
										test
										</div>
									</td> 
									<td class="fl-td"> 
										<div class="fl-td-div">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										</div>
									</td> 
									<td class="fl-td"> 
										<div class="fl-td-div">
										test
										</div>
									</td> 
								</tr>
								<? } ?>		
							</tbody> 
						</table> <!-- end fl-table body --> 
						</div>
						
					</div> <!-- bdiv --> 

			</div> <!-- fpane -->
			
			</div> <!-- hbdiv -->
	
		</div>  <!-- fl-grid-inner -->
	
	</div> <!-- end fl-grid --> 	


	<h2>Freeze Panes</h2>
	
	<div class="fl-grid"> 

		<div class="fl-grid-inner">
 
 			<div class="fl-hbdiv">
 			
  			<div class="fl-fpane fl-fpane-left" style="width:195px;">
 
					<div class="fl-hdiv">
					
						<div class="fl-hdiv-inner">
						<table class="fl-table" cellspacing="0">
							<thead>
								<tr class="fl-tr">
									<th class="fl-th" width="70px">
										<div class="fl-th-div">
										Column 1
										</div>
										<div class="fl-th-con">
											<div class="fl-coldrag"></div>
										</div>
									</th>
									<th class="fl-th" width="60px">
										<div class="fl-th-div">
										Column 2
										</div>
										<div class="fl-th-con">
											<div class="fl-coldrag"></div>
										</div>
									</th>
									<th class="fl-th" width="60px">
										<div class="fl-th-div">
										Column 3
										</div>
										<div class="fl-th-con">
											<div class="fl-coldrag"></div>
										</div>
									</th>
								</tr>							
							</thead>
						</table>
						</div>
					
					</div> <!-- end of fl-hdiv -->
					<div class="fl-bdiv"  style="overflow: hidden;"> 
					
						<div class="fl-bdiv-inner">
						<table class="fl-table" cellspacing="0"> 
							<tbody> 
								<tr class="fl-tr"> 
									<td class="fl-td" style="width:70px;">
										<div class="fl-td-div">
										test
										</div>
									</td> 
									<td class="fl-td" style="width:60px;"> 
										<div class="fl-td-div">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										</div>
									</td> 
									<td class="fl-td" style="width:60px;"> 
										<div class="fl-td-div">
										test
										</div>
									</td> 
								</tr>
								<? for($x=0;$x<5;$x++) { ?>		
								<tr class="fl-tr"> 
									<td class="fl-td"> 
										<div class="fl-td-div">
										test
										</div>
									</td> 
									<td class="fl-td"> 
										<div class="fl-td-div">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										</div>
									</td> 
									<td class="fl-td"> 
										<div class="fl-td-div">
										test
										</div>
									</td> 
								</tr>
								<? } ?>		
							</tbody> 
						</table> <!-- end fl-table body --> 
					     </div>
					     
					</div> <!-- bdiv --> 

			</div> <!-- fpane -->

 
 			<div class="fl-fpane fl-fpane-right" style="margin-left: 295px;">
 					
					<div class="fl-hdiv">
						
						<div class="fl-hdiv-inner">
						<table class="fl-table" cellspacing="0">
							<thead>
								<tr class="fl-tr">
									<th class="fl-th" width="100px">
										<div class="fl-th-div">
										Column 4
										</div>
										<div class="fl-th-con">
											<div class="fl-coldrag"></div>
										</div>
									</th>
									<th class="fl-th" width="140px">
										<div class="fl-th-div">
										Column 5
										</div>
										<div class="fl-th-con">
											<div class="fl-coldrag"></div>
										</div>
									</th>
									<th class="fl-th" width="400px">
										<div class="fl-th-div">
										Column 6
										</div>
										<div class="fl-th-con">
											<div class="fl-coldrag"></div>
										</div>
									</th>
								</tr>							
							</thead>
						</table>
						</div>
					
					</div> <!-- end of fl-hdiv -->
					<div class="fl-bdiv"> 
					
						<div class="fl-bdiv-inner">
						<table class="fl-table" cellspacing="0"> 
							<tbody> 
								<tr class="fl-tr"> 
									<td class="fl-td" style="width:100px;">
										<div class="fl-td-div">
										test
										</div>
									</td> 
									<td class="fl-td" style="width:140px;"> 
										<div class="fl-td-div">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										</div>
									</td> 
									<td class="fl-td" style="width:400px;"> 
										<div class="fl-td-div">
										test
										</div>
									</td> 
								</tr>
								<? for($x=0;$x<5;$x++) { ?>		
								<tr class="fl-tr"> 
									<td class="fl-td"> 
										<div class="fl-td-div">
										test
										</div>
									</td> 
									<td class="fl-td"> 
										<div class="fl-td-div">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										</div>
									</td> 
									<td class="fl-td"> 
										<div class="fl-td-div">
										test
										</div>
									</td> 
								</tr>
								<? } ?>		
							</tbody> 
						</table> <!-- end fl-table body --> 
						</div>
					
					</div> <!-- bdiv --> 

			</div> <!-- fpane -->

			</div> <!-- hbdiv -->

		</div> <!-- fl-grid-inner -->

	</div> <!-- end fl-grid --> 	
	
	

	<script type="text/javascript" src="lib/jquery142.js"></script>
	<script type="text/javascript">
	
	
		function fixfw()
		{
		/* force-fit */
		
		var w2 = $('.fl-grid-fw .fl-bdiv .fl-table').outerWidth();
		$('.fl-grid-fw .fl-hdiv .fl-hdiv-inner').width(w2+2);
		
		/* freeze pane */
		
		var w1 = $('.fl-fpane-left .fl-table').outerWidth();
		$('.fl-fpane-left').width(w1);
		$('.fl-fpane-right').css('margin-left',$('.fl-fpane-left').outerWidth());
		
		}
		
		fixfw();
		
		$('.fl-coltog').click
		(
			function ()
				{

				var l = this.offsetLeft+$(this).parents('div.fl-hbdiv').get(0).offsetLeft+$(this).parents('.fl-th').get(0).offsetLeft;
				var t = this.offsetTop+$(this).parents('div.fl-hdiv').next().get(0).offsetTop+$(this).height()+$(this).parents('div.fl-hbdiv').get(0).offsetTop;
				
				var w = $(this).parents('.fl-grid').width();
				var w2 = $('.fl-menu:first').width();
				
				if ((l+w2)>w) 
					{
					l = l - w2 + $(this).width();
					}
				
				var k = l+'px';
				var k2 = $('.fl-menu:first').css('left');
				
				if (k==k2) 
					$('.fl-menu:first').toggle('fast');
				else
					$('.fl-menu:first').css({left:l,top:t}).show('fast');
				
/*
				$('.fl-coltogged').removeClass('fl-coltogged');
				
				if ($('.fl-menu:visible').length) 
					$(this).addClass('fl-coltogged');

				$('#testdata').text(k2); 				

*/
						
				
				}
		);
		
		$('.fl-menu:first').mouseleave
		(
			function ()
				{
				$(this).hide();
				}
		);
		
		$(window).resize(function(){fixfw();});
		
		if ($.browser.version == '6.0' && $.browser.msie)
		{
			$('.fl-grid').addClass('fl-grid-ie6');
			$('.fl-bdiv').each
			(	
				function ()
					{
					if ($(this).css('height')=='auto') $(this).css({'overflow':'hidden','overflow-x':'auto'});
					}
			);
			
		};
		
		$('.fl-menu-tr').hover
		(
			function ()
			{
			$(this).addClass('fl-menu-tr-hover');
			},
			function ()
			{
			$(this).removeClass('fl-menu-tr-hover');
			}
		);
	
		$('.fl-bdiv').scroll
		(
			function ()
				{
				var t = this;
				$(this).prev().each
				(
					function ()
						{
						this.scrollLeft = t.scrollLeft;
						}
				);

				$(this).parent().siblings().find('.fl-bdiv').each
				(
					function ()
						{
						this.scrollTop = t.scrollTop;
						}
				);
				
				}
		);	

	</script>

	
	
	</body>
</html>