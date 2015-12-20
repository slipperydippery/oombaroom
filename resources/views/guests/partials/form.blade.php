        <!-- Name Form Input -->
        <div class="form-group">
        	{!! Form::label('name', 'Name:') !!}
        	{!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Note Form Input -->
        <div class="form-group">
        	{!! Form::label('note', 'Note:') !!}
        	{!! Form::textarea('note', null, ['class' => 'form-control']) !!}
        </div>
        
        <!-- Email Form Input -->
        <div class="form-group">
        	{!! Form::label('email', 'Email:') !!}
        	{!! Form::text('email', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Phone Mobile Form Input -->
        <div class="form-group">
        	{!! Form::label('phone_mob', 'Phone Mobile:') !!}
        	{!! Form::text('phone_mob', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Phone Home Form Input -->
        <div class="form-group">
        	{!! Form::label('phone_home', 'Phone Home:') !!}
        	{!! Form::text('phone_home', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Adress - Street Form Input -->
        <div class="form-group">
        	{!! Form::label('adress_street', 'Adress - Street:') !!}
        	{!! Form::text('adress_street', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Adress - City Form Input -->
        <div class="form-group">
        	{!! Form::label('adress_city', 'Adress - City:') !!}
        	{!! Form::text('adress_city', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Adress - Postalcode Form Input -->
        <div class="form-group">
        	{!! Form::label('adress_postalcode', 'Adress - Postalcode:') !!}
        	{!! Form::text('adress_postalcode', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Adress - Country Form Input -->
        <div class="form-group">
        	{!! Form::label('adress_country', 'Adress - Country:') !!}
        	{!! Form::text('adress_country', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Add Guest Submit Field -->
        <div class="form-group">
            {!! Form::submit($submittext, ['class' => 'btn form-control']) !!}
        </div>
