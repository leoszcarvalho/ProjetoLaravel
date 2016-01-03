{!!  Form::label('name','This is the form title')  !!}
{!!  Form::text('name')  !!}

{{--Validação do campo title usa apenas  bracket com duas exclamações para que o html n seja substituido --}}
{!!   $errors->first("name","<p class='error'>:message</p>") !!}

{!!  Form::submit($button_text, array('class' => 'button', "style" => "margin-left:5px;")) !!}