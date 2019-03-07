@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
               
                
				<form style="margin-bottom: 110px;" class="form-validate" method="post" action="" id="contact-form">
					<div class="form-group">
                        <div id="resposta"></div>
                    </div>

                    <div class="form-group">
                        <p>
                            Ligue e tire suas dúvidas com o desenvolvedor.
                            <br><b> Skype:</b> robertomelo822
                            <br>
                            +55-21 981988134
                        </p>
                    </div>
                    
                    <div class="form-group">
						<!-- <legend></legend> -->

						<p>
							<i class="muted">Preencha os campos obrigatórios *.</i>
						</p>
					</div>

					<div class="clearfix"></div>

						<div class="row-fluid">
							<div class="form-group">
								<label title="" class="hasTip required" for="jform_contact_name" id="jform_contact_name-lbl">Nome<span class="star">&nbsp;*</span></label>
								<div class="controls">
									<input type="text" size="30" class="form-control required" value="" id="jform_contact_name" name="contact_name" aria-required="true" required="required">
								</div>
							</div>
							<div class="form-group">
									<label title="" class="hasTip required" for="jform_contact_email" id="jform_contact_email-lbl">E-mail<span class="star">&nbsp;*</span></label>
										<div class="controls">
											<input type="email" size="30" value="" id="jform_contact_email" class="form-control validate-email required" name="contact_email" aria-required="true" required="required">
										</div>
							</div>
							<div class="form-group">
									<label title="" class="hasTip required" for="jform_contact_emailmsg" id="jform_contact_emailmsg-lbl">Assunto<span class="star">&nbsp;*</span></label>
										<div class="controls">
											<input type="text" size="60" class="form-control required" value="" id="jform_contact_emailmsg" name="assunto" aria-required="true" required="required">
										</div>
							</div>
							<div class="form-group">
								<label title="" class="hasTip required" for="jform_contact_message" id="jform_contact_message-lbl">Mensagem
									<span class="star">&nbsp;*</span></label>
										<div class="controls">
											<textarea class="form-control required" rows="10" cols="50" id="jform_contact_message" name="mensagem" aria-required="true" required="required"></textarea>
										</div>
										<div class="control-group">
											<div class="controls"></div>
										</div>
							</div>

						</div>

						<div class="clearfix"></div>
						<br><br>
						<div class="form-group">
					   
							<button type="submit" class="btn validate btn-primary pull-right">Enviar E-mail</button>

													<div class="contact_email-copy pull-right">
																			</div>


							<input type="hidden" value="com_contact" name="option">
							<input type="hidden" value="contact.submit" name="task">
							<input type="hidden" value="" name="return">
							<input type="hidden" value="1:website-owner" name="id">
                            <input type="hidden" value="{{ csrf_token() }}" name="_token">
									
							
						</div>

					
				</form>
			</div>

	<script type="text/javascript">
	setTimeout(() => {
        jQuery('form#contact-form').validate({
			rules: {
				contact_name: { required: true, minlength: 3 },
				email: { required: true, email: true },
				mensagem: { required: true }
			},
			messages: {
				contact_name: { required: 'Preencha o campo nome', minlength: 'No mínimo 3 letras' },
				email: { required: 'Informe o seu email', email: 'Ops, informe um email válido' },
				mensagem: { required: 'Mensagem obrigatória.' }

			},
			submitHandler: function( form ){
				var dados = jQuery( form ).serialize();

				jQuery.ajax({
					type: "POST",
                    url: "{{url('enviar')}}",
                    dataType: 'html',
					data: dados,
					success: function( data )
					{
						//retornando mensagem
						jQuery("#resposta").html(data);
						//limpando os dados do formulario apos envio
						jQuery(form).each (function(){
						  this.reset();
						});
					}
				});

				return false;
			}
		});
    }, 2000);
		
	
	</script>			
            

           
        </div>
    </div>

@endsection
