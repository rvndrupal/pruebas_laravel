<div class="from-group">    
    {!! Form::label('name','Nombre del Producto') !!}
    
    {!! Form::text('name', null, ['class' => 'form-control']) !!}   
    
</div>

<div class="from-group">    
    {!! Form::label('description','Descripción del Producto') !!}
    
    {!! Form::text('description', null, ['class' => 'form-control']) !!}   
    
</div>

<div class="from-group"> 
        <p><p></p>   
        {!! Form::label('estado','Estado') !!}<p>
        <label>        
            {!!  Form::radio('estado','ACTIVO') !!} ACTIVO        
        </label>
        <label>        
            {!!  Form::radio('estado','DESACTIVADO') !!} OCULTO <p>        
        </label>    
    
</div>

<div class="from-group">    
        
    {!! Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) !!}   
    
</div>