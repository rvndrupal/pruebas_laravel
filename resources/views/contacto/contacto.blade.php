@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                Email
                   
                </div>

                <div class="panel-body">
                   
                <div class="contact-form">
                        
                <div class="col-lg-6">
                    
                    {!! Form::open(['route'=> 'contact.store']) !!}

                   
                        
                        {!! Form::text('nombre',null, ['placeholder'=>'Nombre']) !!}<p><p></p>

                        {!! Form::text('email',null, ['placeholder'=>'Email']) !!}<p></p>

                        
                        {!! Form::textarea('mensaje', null, ['placeholder'=>'Mensaje']) !!}
                        
                        
                        {!! Form::submit('Enviar') !!}

                        {!! Form::close() !!}
                        

                </div>
                    
                   
                    
                    

                </div>
                      
                             

                   
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection