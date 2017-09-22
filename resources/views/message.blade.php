@if(session('statement'))
 
          <div class="alert alert-danger" role="alert">
            <p align="center">
      {{session('statement')}}
      </div>
        </p>
        @elseif(session('success'))

		<div class="alert alert-success" role="alert">
       <p align="center">
      {{session('success')}}
      </div>
        </p>
		@endif

@yield('message_text')
