<script>
$(document).ready(function(){
	$('#actorbtn').click(function(e){
		e.preventDefault();
		$.ajax({
			method: "post",
			url: "fetchdata.php",
			data: $('#displaydata').serialize(),
			dataType: "html",
			success: function(response){
				$('#messagedisplay').html(response);
				
				$.ajax({
					method: "post",
					url: "displayque.php",
					data: $('#query').serialize(),
					dataType: "html",
					success: function(response){
					$	('#displayque').html(response);
					}
				});
			}
		});
		
	})
	$('#addbtn').click(function(e){
		e.preventDefault();
		$.ajax({
			method: "post",
			url: "fetchdata1.php",
			data: $('#displaydata').serialize(),
			dataType: "html",
			success: function(response){
				$('#messagedisplay').html(response);
				
				$.ajax({
					method: "post",
					url: "displayque1.php",
					data: $('#query').serialize(),
					dataType: "html",
					success: function(response){
					$	('#displayque').html(response);
					}
				});
			}
		});
	})
	$('#categorybtn').click(function(e){
		e.preventDefault();
		$.ajax({
			method: "post",
			url: "fetchdata2.php",
			data: $('#displaydata').serialize(),
			dataType: "html",
			success: function(response){
				$('#messagedisplay').html(response);
				
				$.ajax({
					method: "post",
					url: "displayque2.php",
					data: $('#query').serialize(),
					dataType: "html",
					success: function(response){
					$	('#displayque').html(response);
					}
				});
			}
		});
	})
	$('#citybtn').click(function(e){
		e.preventDefault();
		$.ajax({
			method: "post",
			url: "fetchdata3.php",
			data: $('#displaydata').serialize(),
			dataType: "html",
			success: function(response){
				$('#messagedisplay').html(response);
				
				$.ajax({
					method: "post",
					url: "displayque3.php",
					data: $('#query').serialize(),
					dataType: "html",
					success: function(response){
					$	('#displayque').html(response);
					}
				});
			}
		});
	})
	$('#countrybtn').click(function(e){
		e.preventDefault();
		$.ajax({
			method: "post",
			url: "fetchdata4.php",
			data: $('#displaydata').serialize(),
			dataType: "html",
			success: function(response){
				$('#messagedisplay').html(response);
				
				$.ajax({
					method: "post",
					url: "displayque4.php",
					data: $('#query').serialize(),
					dataType: "html",
					success: function(response){
					$	('#displayque').html(response);
					}
				});
			}
		});
	})
	$('#customerbtn').click(function(e){
		e.preventDefault();
		$.ajax({
			method: "post",
			url: "fetchdata5.php",
			data: $('#displaydata').serialize(),
			dataType: "html",
			success: function(response){
				$('#messagedisplay').html(response);
				
				$.ajax({
					method: "post",
					url: "displayque5.php",
					data: $('#query').serialize(),
					dataType: "html",
					success: function(response){
					$	('#displayque').html(response);
					}
				});
			}
		});
	})
	$('#filmbtn').click(function(e){
		e.preventDefault();
		$.ajax({
			method: "post",
			url: "fetchdata6.php",
			data: $('#displaydata').serialize(),
			dataType: "html",
			success: function(response){
				$('#messagedisplay').html(response);
				
				$.ajax({
					method: "post",
					url: "displayque6.php",
					data: $('#query').serialize(),
					dataType: "html",
					success: function(response){
					$	('#displayque').html(response);
					}
				});
			}
		});
	})
	$('#filmacbtn').click(function(e){
		e.preventDefault();
		$.ajax({
			method: "post",
			url: "fetchdata7.php",
			data: $('#displaydata').serialize(),
			dataType: "html",
			success: function(response){
				$('#messagedisplay').html(response);
				
				$.ajax({
					method: "post",
					url: "displayque7.php",
					data: $('#query').serialize(),
					dataType: "html",
					success: function(response){
					$	('#displayque').html(response);
					}
				});
			}
		});
	})
	$('#filmcatbtn').click(function(e){
		e.preventDefault();
		$.ajax({
			method: "post",
			url: "fetchdata8.php",
			data: $('#displaydata').serialize(),
			dataType: "html",
			success: function(response){
				$('#messagedisplay').html(response);
				
				$.ajax({
					method: "post",
					url: "displayque8.php",
					data: $('#query').serialize(),
					dataType: "html",
					success: function(response){
					$	('#displayque').html(response);
					}
				});
			}
		});
	})
	$('#filmtbtn').click(function(e){
		e.preventDefault();
		$.ajax({
			method: "post",
			url: "fetchdata9.php",
			data: $('#displaydata').serialize(),
			dataType: "html",
			success: function(response){
				$('#messagedisplay').html(response);
				
				$.ajax({
					method: "post",
					url: "displayque9.php",
					data: $('#query').serialize(),
					dataType: "html",
					success: function(response){
					$	('#displayque').html(response);
					}
				});
			}
		});
	})
	$('#inbtn').click(function(e){
		e.preventDefault();
		$.ajax({
			method: "post",
			url: "fetchdata10.php",
			data: $('#displaydata').serialize(),
			dataType: "html",
			success: function(response){
				$('#messagedisplay').html(response);
				
				$.ajax({
					method: "post",
					url: "displayque10.php",
					data: $('#query').serialize(),
					dataType: "html",
					success: function(response){
					$	('#displayque').html(response);
					}
				});
			}
		});
	})
	$('#lanbtn').click(function(e){
		e.preventDefault();
		$.ajax({
			method: "post",
			url: "fetchdata11.php",
			data: $('#displaydata').serialize(),
			dataType: "html",
			success: function(response){
				$('#messagedisplay').html(response);
				
				$.ajax({
					method: "post",
					url: "displayque11.php",
					data: $('#query').serialize(),
					dataType: "html",
					success: function(response){
					$	('#displayque').html(response);
					}
				});
			}
		});
	})
	$('#paybtn').click(function(e){
		e.preventDefault();
		$.ajax({
			method: "post",
			url: "fetchdata12.php",
			data: $('#displaydata').serialize(),
			dataType: "html",
			success: function(response){
				$('#messagedisplay').html(response);
				
				$.ajax({
					method: "post",
					url: "displayque12.php",
					data: $('#query').serialize(),
					dataType: "html",
					success: function(response){
					$	('#displayque').html(response);
					}
				});
			}
		});
	})
	$('#rentalbtn').click(function(e){
		e.preventDefault();
		$.ajax({
			method: "post",
			url: "fetchdata13.php",
			data: $('#displaydata').serialize(),
			dataType: "html",
			success: function(response){
				$('#messagedisplay').html(response);
				
				$.ajax({
					method: "post",
					url: "displayque13.php",
					data: $('#query').serialize(),
					dataType: "html",
					success: function(response){
					$	('#displayque').html(response);
					}
				});
			}
		});
	})
	$('#staffbtn').click(function(e){
		e.preventDefault();
		$.ajax({
			method: "post",
			url: "fetchdata14.php",
			data: $('#displaydata').serialize(),
			dataType: "html",
			success: function(response){
				$('#messagedisplay').html(response);
				
				$.ajax({
					method: "post",
					url: "displayque14.php",
					data: $('#query').serialize(),
					dataType: "html",
					success: function(response){
					$	('#displayque').html(response);
					}
				});
			}
		});
	})
	$('#storebtn').click(function(e){
		e.preventDefault();
		$.ajax({
			method: "post",
			url: "fetchdata15.php",
			data: $('#displaydata').serialize(),
			dataType: "html",
			success: function(response){
				$('#messagedisplay').html(response);
				
				$.ajax({
					method: "post",
					url: "displayque15.php",
					data: $('#query').serialize(),
					dataType: "html",
					success: function(response){
					$	('#displayque').html(response);
					}
				});
			}
		});
	})
	$('#viewbtn').click(function(e){
		e.preventDefault();
	});

});


</script>